<?php 
include('conexao.php');

$id = $_GET['id']; // ID do registro que vai ser excluído

$sql = "DELETE FROM fluxo_caixa WHERE id=$id"; // Consulta o banco de dados para excluir o registro com o ID

$result = mysqli_query($con, $sql); // Executa a consulta SQL e armazenando o resultado

if($result) {
    echo "Dados Excluídos com sucesso!<br>"; // Exibe mensagem de sucesso se a exclusão der certo
} else {
    echo "Erro ao excluir dados: " . mysqli_error($con) . "<br>"; // Exibindo mensagem de erro se houve algum problema na exclusão
}
?>
<a href="index.php">Voltar</a> <!-- Link para voltar à página inicial -->
