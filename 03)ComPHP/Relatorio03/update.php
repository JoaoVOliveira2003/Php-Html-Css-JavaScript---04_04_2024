<?php
try
{
    $con = new PDO("mysql:host=localhost; dbname=exercicioPoo","root","");
    $result = $con->exec("UPDATE tads.clientes3 SET nome="joao do coco" where id='6';");

    $con=null;

    
}
catch(PDOException $e){
    print("Erro!:".$e->getMessage()."\n");
}
echo "Cheguei aqui";
?>