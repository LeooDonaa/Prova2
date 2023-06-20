<?php
    include('conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $hist = $_POST['hist'];
    $cheque = $_POST['cheque'];

    // Exibição do título da página
    echo "<h1>Alteração de dados</h1>";

    // Construção da consulta SQL para atualização dos dados
    $sql = "UPDATE fluxo_caixa SET 
    data='$data',
    tipo='$tipo',
    valor='$valor',
    historico='$hist',
    cheque='$cheque' 
    WHERE id=$id";

    // Exibição da consulta SQL na tela para fins de depuração
    echo $sql."<br>";

    // Execução da consulta SQL
    $result = mysqli_query($con,$sql);

    // Verificação do resultado da consulta
    if($result){
        echo "Dados Alterados com sucesso!<br>";
    } else{
        echo "Erro ao alterar dados: ".mysqli_error($con)."<br>";
    }
?>

<a href="index.php">Voltar</a>
