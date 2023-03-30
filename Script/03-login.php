<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

include_once('01-conexao.php');
$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$result = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_array($result);

if(count($usuario) == 1){
    echo 'Login realizado com sucesso!';
}else{
    echo 'Usuário não encontrado!';
}
mysqli_close($conn);

?>