<?php
include 'Conexao.php';

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$sql = "UPDATE fluxo_caixa SET descricao = '$descricao', tipo_movimentacao = '$tipo', valor = $valor, data_movimentacao = '$data' WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
    echo "Registro alterado com sucesso!";
} else {
    echo "Erro ao alterar o registro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
