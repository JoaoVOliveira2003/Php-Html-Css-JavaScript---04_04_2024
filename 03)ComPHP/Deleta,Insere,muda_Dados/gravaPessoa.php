<?php
$nome = $_POST['cNome'];
$celular = $_POST['cCelular'];
$email = $_POST['cEmail'];

include "conecta.php";

$sql =  " INSERT INTO PESSOA ";
$sql = $sql. "(NOME,CELULAR,EMAIL)";
$sql = $sql . " VALUES ";
$sql = $sql. " (' " .$nome. " ' , ";
$sql = $sql. " '  " .$celular.  "   ',";
$sql = $sql. " ' " .$email. " ' ) " ;  
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
