<?php

$cpnj = $_POST['cpnj'];
$password = $_POST['password'];

// usado mais no cadastro
$senha = hash('sha256', $senha);

if ($password === '1234' && $cpnj === '12345678000190') {
    $password = hash('sha256', $senha);
    echo "<h1>Logado!</h1>" . '<br>';
    echo "CNPJ: $cpnj, <br> Senha: $password";
} else {
    echo "Não está logado! ";
}

// == compara valor === compara valor e tipo