<?php 
include('conexao.php');
$id = $_GET['id']; //Aqui é get, já que passa pela URL
$sql = "DELETE from fluxo_caixa WHERE id=$id";


$result = mysqli_query($con,$sql); //a variavel result vai ter o resultado, se deu certo ou n
    if($result){
        echo "Dados Excluidos com sucesso!<br>";}
    else{
        echo "Erro ao alterar dados: ".mysqli_error($con)."<br>";}
?>
<a href="index.php">Voltar</a>