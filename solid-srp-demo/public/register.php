<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Application\UserService;
use App\Domain\UserValidator;
use App\Infra\FileUserRepository;

// caminho do arquivo de "persistência"
$file = __DIR__ . '/../storage/users.txt';

$service = new UserService(
 repository: new FileUserRepository($file),
 validator: new UserValidator()
);

$ok = $service->register($_POST);

http_response_code($ok ? 201 : 422);

echo $ok ? 'Usuário cadastrado com sucesso!' : 'Erro ao cadastrar usuário. Verifique os dados e tente novamente.';