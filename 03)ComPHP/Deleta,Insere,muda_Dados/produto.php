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
  <h2>Cadastro de produto</h2>
  <form action="gravaProduto.php" method="post">
    Descrição: <input type="text" name="cDescricao"> <br>
    Quantidade: <input type="text" name="cQuantidade"> <br>
    Valor: <input type="text" name="cValor"> <br>

    <input type="submit" value="Salvar" name="b1">
  </form>
</section>

</body>
</html>
