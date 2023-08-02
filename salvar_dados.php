<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "id21104048_admin";
$password = "Contarde1a10ehfoda!";
$dbname = "id21104048_admin";

// Conectar ao banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obter os valores enviados pelo formulário
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Inserir os valores no banco de dados
$sql = "INSERT INTO Cadastro (Nome, Telefone, Email) VALUES ('$nome', '$telefone', '$email')";

if (mysqli_query($conn, $sql)) {
    // Redirecionar para a página "index.html" após 1 segundo
    header("Refresh: 1; URL=index.html");
    echo "Dados salvos com sucesso no banco de dados! Redirecionando...";
} else {
    echo "Erro ao salvar os dados: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
