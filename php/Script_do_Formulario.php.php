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
 $rg = $_POST['rg'];
$cpf = $_POST['cpf'] . $_POST['cpf2'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'] . $_POST['cep2'];
$veiculo = $_POST['veiculo'];
$placa = $_POST['placa'];
$ano_veiculo = $_POST['ano_veiculo'];
?>
