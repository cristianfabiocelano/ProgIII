<?php
include_once "cd.php";
//$id=$_POST["id"];
try{
$conStr="mysql:host=localhost;dbname=cdcol";

$pdo=new PDO($conStr,'root',"");

$sentencia=$pdo->query('SELECT titel as titulo, interpret as interprete, jahr as anio FROM cds');
$sentencia->setFetchMode(PDO::FETCH_INTO,new cd);
$json=json_encode($sentencia);
foreach($sentencia as $cd)
{
    echo $cd->ToString();
    echo "\n";
}

/*
while($fila = $sentencia->fetch())
{
    $obj=new stdClass();
    $obj->id = $fila->id;
    $obj->anio =$fila->anio;
    $obj->interprete = $fila->interprete;
    $obj->titulo=$fila->titulo;
}*/

//$json=json_encode($obj);
//echo $json;
/*
$sp=$pdo->prepare('SELECT * FROM cds WHERE id > :id');
$sp->Execute(array("id"=>$id));
while($fila = $sp->fetch())
{
    var_dump($fila);

}*/
}catch(PDOException $e)
{
    echo $e->getMessage();
}

?>