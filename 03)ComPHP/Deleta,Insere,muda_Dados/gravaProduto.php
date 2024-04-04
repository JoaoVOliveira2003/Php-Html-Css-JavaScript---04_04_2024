<?php
$descricao= $_POST['cDescricao'];
$quantidade = $_POST['cQuantidade'];
$valor = $_POST['cValor'];

include "conecta.php";

$sql =  " INSERT INTO PRODUTO ";
$sql = $sql. "(DESCRICAO,QUANTIDADE,VALOR)";
$sql = $sql . " VALUES ";
$sql = $sql. " (' " .$descricao. " ' , ";
$sql = $sql. " '  " .$quantidade.  "   ',";
$sql = $sql. " ' " .$valor. " ' ) " ;  
echo $sql;

$rs = mysqli_query($conexao,$sql);
if(!$rs){
    echo $sql;
    echo 'problema de gravação!';
    echo '<meta http-equiv="refresh" content ="10; URL=index.php/>';
    return;
}
mysqli_close($conexao);
echo "<br> Gravaçã executada com sucesso!!!"
?>


