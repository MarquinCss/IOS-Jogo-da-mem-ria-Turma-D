<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $nome = $_POST["nome"];

    // Faça a conexão com o banco de dados (substitua as informações de conexão com as suas)
    $servername = "localhost";
    $username = "dados_usuarios";
    $password = "sua_senha";
    $dbname = "ranking_memoria";

    // Crie uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique se a conexão foi bem sucedida
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Crie a consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO sua_tabela (nome) VALUES ('$nome')";

    // Execute a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Feche a conexão com o banco de dados
    $conn->close();
}
?>
