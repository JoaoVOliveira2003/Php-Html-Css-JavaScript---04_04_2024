<?php
//realiza conexão com o mySql
$conexao= mysqli_connect("localhost","root","");

$bancodedados = "BDAULA";

$bd = mysqli_select_db($conexao,$bancodedados);
if(mysqli_connect_errno()){
  printf("Falha de conexão: %s \n",
  mysqli_connect_errno());
  die();
}

?>