<?php

$nome = $_POST['name'];
$razaosocial = $_POST['razaosocial'];
$cpnj = $_POST['cpnj'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$password = $_POST['password'];

$hash = hash('sha256', $password);

echo "<h1>Cadastrado!</h1>
Nome: $nome, <br>
Razão social: $razaosocial, <br>
CNPJ: $cpnj, <br>
Email: $email, <br>
Endereço: $endereco, <br>
CEP: $cep, <br>
País: $pais, <br>
Estado: $estado, <br>
Cidade: $cidade, <br>
Telefone: $telefone, <br>
Senha: $hash, <br>";

// == compara valor === compara valor e tipo