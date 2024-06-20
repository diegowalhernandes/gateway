<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_Post['senha'];

$senhaEncrip = MD5($senha)

$inserir = "INSERT INTO `baseteste`(`nome`, `email`, `senha`, `cpf`, status) VALUES ('$nome','$email,'$email','$senhaEncrip','$cpf', 'Bloqueado')";
$inserir = msqli_query($conexao,$sql);

header('Location: index.php')

?>