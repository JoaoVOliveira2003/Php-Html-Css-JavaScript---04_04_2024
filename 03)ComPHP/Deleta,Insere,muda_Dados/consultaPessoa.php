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
    <meta background-color: rgb(0, 0, 0);charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script language="Javascript">
       
       function confirmacao(id,nome){
            var resp = confirm("Deseja remover " +nome+ "?");
            if (resp == true){
                window.location.href="excluiPessoa.php?+id="+id;
            }

        }

    </script>

</head>

<body>

    <section>
    <div class="nata">
    <table cellspacing="0" border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <?php
            while ($reg = mysqli_fetch_array($rs)) {
                $id = $reg["IDPESSOA"];
                $nome = $reg["NOME"];
                $celular = $reg["CELULAR"];
                $email = $reg["EMAIL"];
            ?>
                <tr>
                    <td><?php print $nome; ?></td>
                    <td><?php print $celular; ?></td>
                    <td><?php print $email; ?></td>
                    <td>
                        <a href="alteraPessoa.php?id=<?php print $id; ?>"
                            style="text-decoration: none; color: black;">
                            <span style="font-size: 1.5em; ">&#9874;</span>                     
                        </a>
                        <a href="javascript:func()" onclick="confirmacao('<?php print $id; ?>','<?php print $nome; ?>')" 
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
    </section>
</body>

</html>
