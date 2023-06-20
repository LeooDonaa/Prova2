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
    $sql = "select * FROM fluxo_caixa";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Lista de Fluxos de Caixas</h1> 
    <table align="center" border="1" width="500">
            <th>CODIGO</th>
            <th>DATA</th>
            <th>TIPO</th>
            <th>VALOR</th>
            <th>HISTÓRICO</th>
            <th>CHEQUE</th>
            <?php
            do{
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['data']."</td>";
            echo "<td>".$row['tipo']."</td>";
            echo "<td>".$row['valor']."</td>";
            echo "<td>
            <a href='altera_fluxo_caixa.php?id=".$row['id']."'>".$row['historico']."</a></td>";
            echo "<td>".$row['cheque']."</td>";
            echo "<td><a 
            href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a>
            </td>";
            // do while na linha atual (Como se eu pegasse o valor do contador) e usar ele
            // como condição do WHERE do banco
            echo "</tr>";
        } while($row = mysqli_fetch_array($result));
        // sempre que estiver algum registro ele vai mostrar, ou seja
        // quando acabar os dados ele para de monstrar(uma repetição).     
        ?>
    </table>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>