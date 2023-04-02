<?php
$nome = $_POST['nomeCompleto'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
include_once('01-conexao.php');

$sql = "SELECT usuarios (nome, cpf, email, senha) 
        VALUES ('$nome', '$cpf', '$email', '$senha')";

mysqli_query($conn, $sql);
mysqli_close($conn);
echo 'Cadastro realizado com sucesso!';
?>