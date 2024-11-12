<?php
// Dados de conexão com o banco de dados
$servername = "127.0.0.1";
$username = "root"; 
$password = "Root"; 
$dbname = "cadastros"; 
'' ;
$placa =  isset($_POST['placa']) ? $_POST['placa'] : '';
$ano_veiculo = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : '2000';

// Preparando a query para inserir os dados
$sql = "INSERT INTO entregadores (nome, sobrenome, imagem, dia, mes, ano, rg, cpf, rua, numero, bairro, estado, cidade, cep, veiculo, placa, ano_veiculo) 
        VALUES ('$nome', '$sobrenome', '$imagem', '$dia', '$mes', '$ano', '$rg', '$cpf', '$rua', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$veiculo', '$placa', '$ano_veiculo')";

// Verificando se a inserção foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechando a conexão
$conn->close();

if ($_FILES['imagem']['error'] == 0) {
    $imagem_nome = $_FILES['imagem']['name'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];
    $imagem_destino = 'uploads/' . $imagem_nome;

    // Movendo o arquivo para o diretório de uploads
    if (move_uploaded_file($imagem_tmp, $imagem_destino)) {
        echo "Imagem carregada com sucesso!";
    } else {
        echo "Erro ao carregar a imagem!";
    }
} else {
    echo "Nenhuma imagem foi carregada.";
}


?>
