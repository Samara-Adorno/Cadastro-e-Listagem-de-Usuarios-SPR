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
    h1{
        text-align:center;
        margin-bottom:2rem;
        color: #d90429;
    }
    form{
        display:flex;
        flex-direction:column;
        max-width:400px;
        margin:0 auto 2rem;
        padding:1rem;
        border:1px solid #ccc;
        border-radius:8px;
        box-shadow:0 0 10px rgba(0,0,0,.1);
    }
    label{
        margin-bottom:.5rem;
        font-size:1.1rem;
        color: #023e8a;
        font-weight:bold;
    }
    input{
        margin-bottom:1rem;
        padding:.5rem;
        border:1px solid #ccc;
        border-radius:4px;
        font-size:1rem;
    }
    button{
        padding:.3rem;
        background-color:#0077b6;
        color:#fff;
        border:none;
        border-radius:4px;
        cursor:pointer;
        transition:background-color .3s ease;
    }
    button:hover{
        background-color:#023e8a;
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
    <h1>Cadastro de Usuário (SRP)</h1>
    <form method="post" action="/Cadastro-e-Listagem-de-Usuarios-SPR/public/register.php">
        <label>Nome:</label>
        <input name="name" required>
        <label>E-mail:</label>
        <input name="email" type="email" required>
        <label>Senha:</label>
        <input name="password" type="password" required>
        <button type="submit"><h3>Cadastrar</h3></button>
    </form>
    <a href="/Cadastro-e-Listagem-de-Usuarios-SPR/public/users.php">Ver Usuários Cadastrados</a>
</body>
</html>