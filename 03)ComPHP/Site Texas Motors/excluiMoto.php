<?php

$txtConteudo = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if (isset($txtConteudo["id"])) {
    $varId = $txtConteudo["id"];

    include "conecta.php";

    $sql = "DELETE FROM MOTO";
    $sql = $sql . " WHERE IDMOTO = '" . $varId . "' ";

    $rs = mysqli_query($conexao, $sql);

    if ($rs) {
      print "Excluído com sucesso";
    } else {
      print "Dados não excluídos corretamente";
    }

    mysqli_close($conexao);
    print '<meta http-equiv="refresh" content="2; URL=consultaMoto.php">';
} else {
    print "Exclusão não efetuada, verifique!";
}
?>
