<?php

$host="localhost";
$user="root";
$pass="";
$db="login";
$conexao=new mysqli($host,$user,$pass,$db);
if($conexao->connect_error){
    echo "Falha ao se conectar ao BD".$conexao->connect_error;
}
?>