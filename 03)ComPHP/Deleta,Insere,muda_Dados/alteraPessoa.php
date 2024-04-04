<?php
include "conecta.php";
$txtConteudo = filter_input_array(INPUT_GET,FILTER_DEFAULT);
if(isset($txtConteudo["id"])){
  $var_id = $txtConteudo["id"];
  $sql = "SELECT * FROM PESSOA";
  $sql = $sql. " WHERE IDPESSOA = '" .$var_id."'";

  $rs = mysqli_query($conexao,$sql);
  $reg = mysqli_fetch_array($rs);

  $codigo = $reg["IDPESSOA"];
  $var_nome = $reg["NOME"];
  $var_celular = $reg["CELULAR"];
  $var_email = $reg["EMAIL"];
}
else{
  echo "registro não localizado!";
  echo "<meta http-equiv='Refresh' content='2; URL=consultaPessoa.php'>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Altera pessoa</title>
</head>
<body>

<section>
<h2>Altera pessoa</h2>
<form action="gravaAlteracaoPessoa.php" method="post">
<input type="hidden" name="codigoPessoa" value="<?php print $codigo; ?>"/>

Nome: <input type="text" name="cNome" value="<?php print $var_nome; ?>"/> <br>
Celular: <input type="text" name="cCelular" value="<?php print $var_celular; ?>"/> <br>
Email: <input type="text" name="cEmail" value="<?php print $var_email; ?>"/> <br>

<input type="submit" value="Salvar" name="b1">

</section>


</form>  

</body>
</html>