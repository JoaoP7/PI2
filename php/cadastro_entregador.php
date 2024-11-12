<?php
// Dados de conexão com o banco de dados
$servername = "127.0.0.1"; 
$username = "root"; 
$password = "Root"; 
$dbname = "cadastro_entregadores"; 
// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$sobrenome = $_POST['sobrenome'];
$imagem = isset($_POST['imagem']) ? $_POST['imagem'] : '';  
$dia = $_POST['dia'];
$mes = $_POST['mes'];

?>
