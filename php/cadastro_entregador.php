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
$ano = $_POST['ano'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'] . $_POST['cpf2'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'] . $_POST['cep2'];
$veiculo =  isset($_POST['veiculo']) ? $_POST['veiculo'] : '' ;
$placa =  isset($_POST['placa']) ? $_POST['placa'] : '';
$ano_veiculo = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : '2000';
?>
