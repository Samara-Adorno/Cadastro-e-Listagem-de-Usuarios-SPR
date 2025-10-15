# 🧾 Cadastro e Listagem de Usuários — SRP + PHP Puro

Projeto desenvolvido como parte do exercício “Complemento do projeto atual: Listagem de usuários”, aplicando os princípios de Responsabilidade Única (SRP), **PSR-4 e organização em camadas em PHP puro (sem frameworks).

## 🚀 Objetivo

Criar um sistema simples de cadastro e listagem de usuários, persistindo os dados em arquivo texto JSON por linha (sem banco de dados).

O foco é demonstrar separação de responsabilidades e aplicação correta das boas práticas de arquitetura.

## ⚙ Tecnologias Utilizadas

* PHP 8+
* Composer (autoload PSR-4)
* XAMPP (servidor local)
* Arquitetura em camadas (SRP)

## 🧩 Camadas e Responsabilidades

| Camada / Classe | Responsabilidade Principal |
| :--- | :--- |
 Cadastro-listagem-SPR/ 
├─ composer.json 
├─ vendor/ 
├─ src/ 
│ 
│  ├─ Application/ 
│  │  ├─ UserService.php    | Orquestra a criação e listagem dos usuários, chamando o validador e o repositório. |
│  ├─ Domain/ 
│  │  └─ UserRepository.php  | Repositório do projeto. |
|  |  └─ UserValidator.php  | Valida os dados do usuário (nome e preço). |
validação 
│  └─ Infra/ 
│     └─ FileUserRepository.php   | Lê e grava os usuários no arquivo storage/products.txt. |
├─ public/ 
│  ├─ index.php                 | Formulário de cadastro de usuário. | 
│  ├─ register.php               | Recebe POST e chama o service. | 
│  └─ users.php             | Tabela com a lista os usuários cadastrados (somente leitura). | 
└─ storage/ 
   └─users.txt              | JSON por linha contendo a lista dos usuários cadastrados. |



## 📋 Regras de Negócio
1.  name: nome do usuário a ser cadastrado.
2.  email: é obrigatório tem que ser um e-mail válido.
3.  password: deve ter no mínimo 8 caracteres.
4.  Dados são salvos no arquivo storage/users.txt (um JSON por linha).

## 🛠️ Limitações

1. Sem banco de dados;
2. Sem frameworks;
3. PHP puro;
4. Sem edição/remoção;
5. Sem paginação/ordenar.

## ▶ Como Executar o Projeto

1.  Clonar o repositório:
    bash
    git clone [https://github.com/Samara-Adorno/Cadastro-e-Listagem-de-Usuarios-SPR.git].


## 🧑‍🎓 Nomes dos discentes e RAs

| Nome do Discente | RA        |
| ---------------- | --------- |
| Maisa Amaral    | 1997058 |
| Samara Adorno   | 2001639 |
---
