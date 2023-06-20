<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include('conexao.php');

    $sql = "SELECT * FROM fluxo_caixa"; // Consulta SQL para selecionar todos os registros da tabela fluxo_caixa

    $result = mysqli_query($con, $sql); // Executando a consulta SQL e armazenando o resultado

    $row = mysqli_fetch_array($result); // Obtendo a primeira linha de resultado como um array associativo

    ?>
    <h1>Lista de Fluxos de Caixa</h1> 
    <table align="center" border="1" width="500">
        <tr> <!-- Cabeçalho da tabela -->
            <th>CODIGO</th>
            <th>DATA</th>
            <th>TIPO</th>
            <th>VALOR</th>
            <th>HISTÓRICO</th>
            <th>CHEQUE</th>
        </tr>
        <?php
        do {
            echo "<tr>"; // Início de uma nova linha da tabela
            echo "<td>" . $row['id'] . "</td>"; // Exibindo o valor da coluna 'id'
            echo "<td>" . $row['data'] . "</td>"; // Exibindo o valor da coluna 'data'
            echo "<td>" . $row['tipo'] . "</td>"; // Exibindo o valor da coluna 'tipo'
            echo "<td>" . $row['valor'] . "</td>"; // Exibindo o valor da coluna 'valor'
            echo "<td><a href='altera_fluxo_caixa.php?id=" . $row['id'] . "'>" . $row['historico'] . "</a></td>"; // Criando um link para a página de alteração com o ID do registro
            echo "<td>" . $row['cheque'] . "</td>"; // Exibindo o valor da coluna 'cheque'
            echo "<td><a href='excluir_fluxo_caixa.php?id=" . $row['id'] . "'>Excluir</a></td>"; // Criando um link para a página de exclusão com o ID do registro
            echo "</tr>"; // Fim da linha da tabela
        } while ($row = mysqli_fetch_array($result)); // Repetindo o bloco enquanto houver linhas de resultado
        
        ?>
    </table>
    <br>
    <a href="index.php">Voltar</a> <!-- Link para voltar à página inicial -->
</body>
</html>
