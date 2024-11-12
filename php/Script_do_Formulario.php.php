<?php
$servername = "127.0.0.1"; 
$username = "root";        
$password = "Root";          
$dbname = "lanchonete";   

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtendo os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['ano'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];

?>
