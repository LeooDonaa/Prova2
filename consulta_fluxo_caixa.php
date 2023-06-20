<?php 
include("conexao.php");

$consulta = $_POST['consulta']; // Obtem o valor de consulta

if ($consulta == 'te') {

    // Consulta para obter o valor total de entradas
    $sql = "SELECT SUM(valor) AS valor FROM fluxo_caixa WHERE tipo = 'entrada'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Aqui está o valor total de entradas do banco: " . $row['valor'] . "<br>";
} else if ($consulta == 'ts') {

    // Consulta para obter o valor total de saídas
    $sql = "SELECT SUM(valor) AS valor FROM fluxo_caixa WHERE tipo = 'saida'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Aqui está o valor total de saídas do banco: " . $row['valor'] . "<br>";
} else if ($consulta == 'st') {

    // Consulta para obter o saldo total
    $sql = "SELECT SUM(CASE WHEN tipo = 'entrada' THEN valor ELSE 0 END) - 
            SUM(CASE WHEN tipo = 'saida' THEN valor ELSE 0 END) AS valor FROM fluxo_caixa";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    echo "Aqui está o valor total de saldo no banco: " . $row['valor'] . "<br>";
}

echo "<a href='index.php'>Voltar</a>"; // Link para voltar à página inicial
?>
