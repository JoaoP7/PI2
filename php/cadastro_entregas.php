<?php
// Dados de conexão com o banco de dados
$servername = "127.0.0.1"; 
$username = "root"; 
$password = "Root"; 
$banco = "entregas"; 

// Criando a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>
