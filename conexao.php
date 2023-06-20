<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "fluxo_caixa";
$port = 3307;

// Estabelece a conexão com o banco de dados
$con = mysqli_connect($hostname, $username, $password, $database, $port);

if(mysqli_connect_errno()){
    printf("Erro conexão: %s\n",
    mysqli_connect_error());
    exit();
}

?>
