<?php
include "conecta.php";
$sql = "SELECT * FROM MOTO";
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

    <script language="Javascript">
       
       function confirmacao(id,nome){
            var resp = confirm("Deseja remover " +nome+ "?");
            if (resp == true){
                window.location.href="excluiMoto.php?+id="+id;
            }
        }

    </script>

</head>

<body>
    
    <section>
 <h1>Motos Cadastradas</h1>
    <div class="">

    <table cellspacing="0" border="1">
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th>Marca</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <?php
            while ($reg = mysqli_fetch_array($rs)) {
                $id = $reg["IDMOTO"];
                $modelo = $reg["MODELO"];
                $ano = $reg["ANO"];
                $cor = $reg["COR"];
                $marca = $reg["MARCA"];
   
   ?>
                <tr>
                    <td><?php print $modelo; ?></td>
                    <td><?php print $ano; ?></td>
                    <td><?php print $cor; ?></td>
                    <td><?php print $marca; ?></td>
                    
                    <td>
                        <a href="alteraMoto.php?id=<?php print $id; ?>"
                            style="text-decoration: none; color: black;">
                            <span style="font-size: 1.5em; ">&#9874;</span>                     
                        </a>
                        
    <a href="javascript:func()" onclick="confirmacao('<?php print $id; ?>','<?php print $modelo; ?>')" 
    style="text-decoration: none; color: black;">
    <span style="font-size: 1.5em;">&#128465;</span>                       
                                             </a>
                   
                   
                   
                        </td>
                
                
                
                </tr>
            <?php } ?>
        </table>
        </div>
        <p>
            &#128465; - apagar
            &#9874; - modificar
        </p>
        <a href="index.php" class="button"><button>Voltar</button></a>
 
    </section>
</body>

</html>
