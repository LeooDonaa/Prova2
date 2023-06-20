<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "fluxo_caixa";
$port = 3307;

// Estabelecer a conexão com o banco de dados
$con = mysqli_connect($hostname, $username, $password, $database, $port);

if (mysqli_connect_errno()) {
    printf("Erro conexão: %s\n", mysqli_connect_error());
    exit();
}

// Obter a opção selecionada do formulário
$tipoConsulta = $_POST['tipo_consulta'];

// Realizar a consulta com base na opção selecionada
if ($tipoConsulta == "saldo_total") {
    // Consulta para obter o saldo total
    $query = "SELECT SUM(valor) AS saldo_total FROM fluxo_caixa";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $saldoTotal = $row['saldo_total'];

        echo "Saldo Total: R$ " . $saldoTotal;
    } else {
        echo "Erro na consulta: " . mysqli_error($con);
    }
} elseif ($tipoConsulta == "total_saidas") {
    // Consulta para obter o total de saídas
    $query = "SELECT SUM(valor) AS total_saidas FROM fluxo_caixa WHERE tipo = 'saida'";
    $result = mysqli_query($con, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalSaidas = $row['total_saidas'];

        echo "Total de Saídas: R$ " . $totalSaidas;
    } else {
        echo "Erro na consulta: " . mysqli_error($con);
    }
} elseif ($tipoConsulta == "total_entradas") {
    // Consulta para obter o total de entradas
    $query = "SELECT SUM(valor) AS total_entradas FROM flux

