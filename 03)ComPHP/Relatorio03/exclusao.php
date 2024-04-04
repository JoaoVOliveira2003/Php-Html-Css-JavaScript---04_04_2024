<?php
try
{
    $con = new PDO("mysql:host=localhost; dbname=exercicioPoo","root","");
    $con->exec("delete from famosos where  codigo=7");
    $con=null;

    
}
catch(PDOException $e){
    print("Erro!:".$e->getMessage()."\n");
}
echo "Cheguei aqui";
?>