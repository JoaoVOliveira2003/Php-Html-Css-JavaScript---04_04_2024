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
    <h1>Sistemas Texas Motors</h1>  
    <img src="imag/logotexas.png" alt="">
    <br>
    <a href="moto.php" class='button'> <button>Inserção de motos</button></a>
    <br><br>
    <a href="consultamoto.php" class='button'><button>Vistoria e alteração de dados</button></a>
    <br><br>

    <div id="downloadLink"></div>


    
  </section>

  <script>
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Sucesso na requisição
          document.getElementById('downloadLink').innerHTML = xhr.responseText;
        } else {
          // Tratar erro, se necessário
          console.error('Erro ao fazer requisição: ' + xhr.status);
        }
      }
    };
    xhr.open('GET', 'Emilio.php', true);
    xhr.send();
  </script>

</body>
</html>
