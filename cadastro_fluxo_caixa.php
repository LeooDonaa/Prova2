<?php
include("conexao.php");

$data = $_POST['data']; // Obtem o valor da data
$tipo = $_POST['tipo']; // Obtem o valor do tipo
$valor = $_POST['valor']; // Obtem o valor do valor
$historico = $_POST['historico']; // Obtem o valor do historico
$cheque = $_POST['cheque']; // Obtem o valor do cheque

$sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)"; // Monta a consulta SQL de inserção
$sql .= " VALUES ('".$data."', '".$tipo."','".$valor."','".$historico."', '".$cheque."');"; // Adiciona os valores obtidos na consulta SQL
echo $sql. "<br>"; // Exibe a consulta SQL (apenas para fins de depuração)

$result = mysqli_query($con, $sql); // Executa a consulta do banco de dados

if ($result) {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro ao tentar cadastrar!";
}

echo "<br><a href='index.php'>Voltar</a>"; // Link para voltar à página inicial
?>
