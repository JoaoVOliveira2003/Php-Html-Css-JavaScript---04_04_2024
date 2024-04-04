<?php
$modelo = $_POST['cModelo'];
$cor = $_POST['cCor'];
$ano = $_POST['cAno'];
$marca = $_POST['cMarca'];

include "conecta.php";

$sql =  " INSERT INTO MOTO ";
$sql = $sql. "(MODELO,ANO,COR,MARCA)";
$sql = $sql . " VALUES ";
$sql = $sql. " (' " .$modelo. " ' , ";
$sql = $sql. " '  " .$ano.  "   ',";
$sql = $sql. " '  " .$cor.  "   ',";
$sql = $sql. " ' " .$marca. " ' ) " ;  
echo $sql;

print '<meta http-equiv="refresh" content="2; URL=Moto.php">';

$rs = mysqli_query($conexao,$sql);
if(!$rs){
    echo $sql;
    echo 'problema de gravação!';
    echo '<meta http-equiv="refresh" content ="10; URL=index.php/>';

    return;
}
mysqli_close($conexao);
echo '<meta http-equiv="refresh" content ="10; URL=index.php/>';

echo "<br> Gravaçã executada com sucesso!!!"




?>
