<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    $data = $_POST["data"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $historico = $_POST["historico"];
    $cheque = $_POST["cheque"];

    // Realizar a conexão com o banco de dados
    $servername = "nome_do_servidor";
    $username = "nome_de_usuario";
    $password = "senha";
    $database = "nome_do_banco_de_dados";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Preparar a consulta SQL para inserção dos dados no banco de dados
    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
            VALUES ('$data', '$tipo', '$valor', '$historico', '$cheque')";

    // Executar a consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso no banco de dados.";
    } else {
        echo "Erro ao inserir os dados no banco de dados: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>
