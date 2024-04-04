<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GravaaçãoMoto</title>
</head>
<body>

<section>
<h1>Cadastro dos dados da moto </h1>

<form action="Gravamoto.php" method="post">
  
  <div class="modelo">
Modelo: <input type="text" name="cModelo"> <br>

  </div>
<div class="marca">
 Marca: <input type="text" name="cMarca"> <br>

</div>
<div class="ano">
   Ano: <input type="text" name="cAno"> <br>
     
</div>
<div class="cor">
  Cor: <input type="text" name="cCor"> <br>

</div>

    

<input type="submit"  value="Salvar" name="b1">
</form>
<br>
<div class="button">
<a href="index.php"><button>Voltar</button></a>
</div>

</section>




</body>
</html>