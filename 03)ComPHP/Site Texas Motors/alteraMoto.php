<?php
include "conecta.php";
$txtConteudo = filter_input_array(INPUT_GET,FILTER_DEFAULT);
if(isset($txtConteudo["id"])){
  $var_id = $txtConteudo["id"];
  $sql = "SELECT * FROM MOTO";
  $sql = $sql. " WHERE IDMOTO = '" .$var_id."'";

  $rs = mysqli_query($conexao,$sql);
  $reg = mysqli_fetch_array($rs);

  $codigo = $reg["IDMOTO"];
  $var_modelo = $reg["MODELO"];
  $var_ano = $reg["ANO"];
  $var_cor = $reg["COR"];
  $var_marca = $reg["MARCA"];
}
else{
  echo "registro não localizado!";
  echo "<meta http-equiv='Refresh' content='2; URL=consultaMoto.php'>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Altera Moto</title>
</head>
<body>

<section>
<h2>Altera Moto</h2>
<form action="gravaAlteracaoMoto.php" method="post">
<input type="hidden" name="codigoMoto" value="<?php print $codigo; ?>"/>


Modelo: <input type="text" name="cModelo" value="<?php print $var_modelo; ?>"/> <br>
Ano: <input type="text" name="cAno" value="<?php print $var_ano; ?>"/> <br>
Cor: <input type="text" name="cCor" value="<?php print $var_cor; ?>"/> <br>
Marca: <input type="text" name="cMarca" value="<?php print $var_marca; ?>"/> <br>

<input type="submit" value="Salvar Alteração" name="b1">




</section>


</form>  

</body>

</html>