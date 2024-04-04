<?php 
include "conecta.php";
$sql = "SELECT * FROM PESSOA";
$rs = mysqli_query($conexao, $sql);
$total_registros = mysqli_num_rows($rs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <section>
    <table cellspacing="0" border="1"> 
      <thead>
        <tr>
          <th>Nome</th>
          <th>Celular</th>
          <th>Email</th>
          <th>Açoes</th>
        </tr>
      </thead>    

      <?php
        while($reg = mysqli_fetch_array($rs)) {
          $id = $reg["IDPESSOA"];
          $nome = $reg["NOME"];
          $celular = $reg["CELULAR"];
          $email = $reg["EMAIL"];
      ?> 
        <tr>
          <td><?php print $nome; ?></td>
          <td><?php print $celular; ?></td>
          <td><?php print $email; ?></td>
        </tr>
      <?php }?>
    </table>
  </section>
</body>
</html>
