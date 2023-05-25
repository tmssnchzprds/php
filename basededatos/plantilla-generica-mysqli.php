<?php
$server="192.168.2.52";
$user="root";
$password="tomas";
$db="tienda-virtual";
$sql="";
$objMysqli= new mysqli($server,$user,$password,$db);
if($objMysqli->connect_errno)
{
    echo "Fallo al intentar conectar:".$objMysqli->connect_error;
}
$sql="Select nombre,pvp FROM articulos;";
$resultado=$objMysqli->query($sql);

while ($registro=$resultado->fetch_object())
{
    echo "Nombre Producto".$registro->nombre." Pvp:".$registro->pvp."<br>";
}

$objMysqli->close();
?>