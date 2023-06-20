<?php
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

// Preparar a consulta SQL para selecionar os dados da tabela fluxo_caixa
$sql = "SELECT * FROM fluxo_caixa";

// Executar a consulta SQL
$result = $conn->query($sql);

// Verificar se há registros retornados
if ($result->num_rows > 0) {
    // Exibir os registros em uma tabela
    echo "<table>";
    echo "<tr><th>ID</th><th>Data</th><th>Tipo</th><th>Valor</th><th>Histórico</th><th>Cheque</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["data"] . "</td>";
        echo "<td>" . $row["tipo"] . "</td>";
        echo "<td>" . $row["valor"] . "</td>";
        echo "<td>" . $row["historico"] . "</td>";
        echo "<td>" . $row["cheque"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
