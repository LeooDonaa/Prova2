<?php
include 'Conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $descricao = $row['descricao'];
    $tipo = $row['tipo_movimentacao'];
    $valor = $row['valor'];
    $data = $row['data_movimentacao'];
} else {
    echo "Registro não encontrado.";
    exit;
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Fluxo de Caixa</title>
</head>
<body>
    <h1>Alterar Fluxo de Caixa</h1>
    <form action="Altera_fluxo_caixa_exe.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="descricao">Descrição:</label>
        <input type="text" id="descricao" name="descricao" value="<?php echo $descricao; ?>" required><br><br>

        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="receita" <?php if ($tipo == 'receita') echo 'selected'; ?>>Receita</option>
            <option value="despesa" <?php if ($tipo == 'despesa') echo 'selected'; ?>>Despesa</option>
        </select><br><br>

        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" value="<?php echo $valor; ?>" required><br><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" value="<?php echo $data; ?>" required><br><br>

        <input type="submit" value="Alterar">
    </form>
</body>
</html>
