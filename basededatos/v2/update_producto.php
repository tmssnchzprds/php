<?php
require ('conexion.php');
$sql=" UPDATE articulos SET pvp = ".$_GET["precio"]." WHERE cod_articulo = ".$_GET["cod_articulo"].";";
$resultado=mysql_query($sql);
if ($resultado==false)
{
    $mensaje["operacion"]="KO";
    $mensaje["texto"]="Error al actualizar";
}
 else {
$mensaje["operacion"]="OK";
$mensaje["texto"]="correcto";
}
mysql_close();
?>
