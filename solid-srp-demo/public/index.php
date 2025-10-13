<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRP Demo</title>
    <style>
    body{
        font-family:system-ui,Segoe UI,Arial;
        margin:2rem;
    }
        label
        {
            display:block;
            margin:.5rem 0;
            }
    </style>
</head>
<body>
    <h1>Cadastro de Usuário (SRP)</h1>
    <form method="post" action="/solid-srp-demo/public/register.php">
        <label>Nome <input name="name" required></label>
        <label>E-mail <input name="email" type="email" required></label>
        <label>Senha <input name="password" type="password" required></label>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>