<?php
$txtConteudo = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(isset($txtConteudo["codigoPessoa"])){
  $id = $txtConteudo ["codigoPessoa"];
  $nome = $txtConteudo ["cNome"];
  $celular = $txtConteudo ["cCelular"];
  $email = $txtConteudo ["cEmail"];
}else{
  echo"Não mudou";
  echo"meta<http-equiv='refresh' content='2;
  URL=alteraPessoa.php'>";
}
include "conecta.php";
$sql = "UPDATE PESSOA SET"; 
$sql = $sql." NOME = '$nome',";
$sql = $sql." CELULAR = '$celular',";
$sql = $sql." EMAIL = '$email'";
$sql = $sql." WHERE IDPESSOA = '".$id."'";

echo $sql;
$rs = mysqli_query($conexao,$sql);
if(!$rs){
  echo "problema na conexão!";
  return;
}
echo "<meta http-equiv='refresh' content='0; URL=consultaPessoa.php'>";
mysqli_close($conexao);

?>