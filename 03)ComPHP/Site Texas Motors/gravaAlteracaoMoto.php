<?php
$txtConteudo = filter_input_array(INPUT_POST,FILTER_DEFAULT);
if(isset($txtConteudo["codigoMoto"])){
  $id = $txtConteudo ["codigoMoto"];
  $modelo = $txtConteudo ["cModelo"];
  $ano = $txtConteudo ["cAno"];
  $cor = $txtConteudo ["cCor"];
  $marca = $txtConteudo ["cMarca"];
}else{
  echo"Não mudou";
  echo"meta<http-equiv='refresh' content='2;
  URL=alteraMoto.php'>";
}
include "conecta.php";
$sql = "UPDATE MOTO SET"; 
$sql = $sql." MODELO = '$modelo',";
$sql = $sql." ANO = '$ano',";
$sql = $sql." COR = '$cor',";
$sql = $sql." MARCA = '$marca'";
$sql = $sql." WHERE IDMOTO = '".$id."'";



echo $sql;
$rs = mysqli_query($conexao,$sql);
if(!$rs){
  echo "problema na conexão!";
  return;
}
echo "<meta http-equiv='refresh' content='0; URL=consultaMoto.php'>";
mysqli_close($conexao);

?>