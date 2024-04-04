<?php
try
{
    $con = new PDO("mysql:host=localhost; dbname=exerciciopoo","root","");
    $result = $con->query("select codigo,nome  FROM exercicioPoo.famosos");
    if($result)
    {
        //percorre os resultados via interação
        foreach($result as $row)
        {
            echo $row ['codigo'].' - '.$row['nome']."<br> \n";
        }
        $con = null;
    }
}
catch(PDOException $e){
    print("Erro!:".$e->getMessage()."\n");
}

?>