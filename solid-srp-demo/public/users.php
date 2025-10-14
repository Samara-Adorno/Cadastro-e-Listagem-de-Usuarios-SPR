<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Application\UserService;
use App\Infra\FileUserRepository;
use App\Domain\UserValidator;

$file = __DIR__ . '/../storage/users.txt';
$repository = new FileUserRepository($file);
$service = new UserService(
    repository: $repository,
    validator: new UserValidator()
);

$users = $service->listUsers();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
    body{
        font-family:system-ui,Segoe UI,Arial;
        margin:2rem;
    }
    h1{
        text-align:center;
        margin-bottom:2rem;
        color: #d90429;
    }
    table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto;
    }
    th {
        background-color: #0077b6;
        color: white;
        padding: 10px;
        font-weight: bold;
        text-align: left;
        border: 2px solid #ddd;
    }
    td {
        padding: 10px;
        border: 2px solid #ddd;
    }
    a{
        display: block;
        width: max-content;
        margin: 20px auto;
        padding: 10px 15px;
        background-color: #0077b6;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
        transition: background-color 0.3s ease;
    }
    a:hover{
        background-color: #023e8a;
    }
    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>

    <?php if (empty($users)): ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php else: ?>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>
    
    <a href="/Cadastro-e-Listagem-de-Usuarios-SPR/solid-srp-demo/public/">Cadastrar novo usuário</a>
</body>
</html>