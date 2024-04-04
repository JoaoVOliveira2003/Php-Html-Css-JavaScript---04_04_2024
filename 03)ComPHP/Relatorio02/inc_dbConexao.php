<?php
$conexao = mysqli_connect("localhost","root","");
$bancodedados = "tads2023";

$db = mysqli_select_db($conexao,$bancodedados);

if (!$db)
    {
         echo "Não conectou ao servidor";
         die();
     }
?>