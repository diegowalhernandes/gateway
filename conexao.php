<?php
$server = 'localhost';
$usuario = 'root';
$senha = '';
$base = '';


$conexao = mysqli_connect($server, $usuario, $senha, $base);


if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

echo "Conectado com sucesso";
?>
