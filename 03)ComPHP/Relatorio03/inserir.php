<?php
try
{
    $con = new PDO("mysql:host=localhost; dbname=exercicioPoo","root","");
    $result = $con->exec("Insert Into famosos(codigo,nome) values (4,' Teste JorgeBenJor')");
    $con=null;

    
}
catch(PDOException $e){
    print("Erro!:".$e->getMessage()."\n");
}
echo "Cheguei aqui";
?>