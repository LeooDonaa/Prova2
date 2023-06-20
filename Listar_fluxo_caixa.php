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

    $sql = "SELECT * FROM fluxo_caixa"; // Consulta o banco de dados para selecionar todos os registros da tabela

    $result = mysqli_query($con, $sql); // Executa a consulta do banco de dados e armazenando o resultado

    $row = mysqli_fetch_array($result); // Obtem a primeira linha de resultado

    ?>
    <h1>Lista de Fluxos de Caixa</h1> 
    <table border="1" width="500">
        <tr> 
            <th>CODIGO</th>
            <th>DATA</th>
            <th>TIPO</th>
            <th>VALOR</th>
            <th>HISTÓRICO</th>
            <th>CHEQUE</th>
        </tr>
        <?php
        do {
            echo "<tr>"; // Início das linhas da tabela
            echo "<td>" . $row['id'] . "</td>"; // Exibe o valor da coluna 'id'
            echo "<td>" . $row['data'] . "</td>"; // Exibe o valor da coluna 'data'
            echo "<td>" . $row['tipo'] . "</td>"; // Exibe o valor da coluna 'tipo'
            echo "<td>" . $row['valor'] . "</td>"; // Exibe o valor da coluna 'valor'
            echo "<td><a href='altera_fluxo_caixa.php?id=" . $row['id'] . "'>" . $row['historico'] . "</a></td>"; // Cria um link para a página que altera com o ID
            echo "<td>" . $row['cheque'] . "</td>"; // Exibe o valor da coluna 'cheque'
            echo "<td><a href='excluir_fluxo_caixa.php?id=" . $row['id'] . "'>Excluir</a></td>"; // Cria um link para a página que exclui com o ID
            echo "</tr>"; // Fim da linha da tabela
        } while ($row = mysqli_fetch_array($result)); // Repete o bloco enquanto houver linhas de resultado
        
        ?>
    </table>
    <br>
    <a href="index.php">Voltar</a> <!-- Link para voltar à página inicial -->
</body>
</html>
