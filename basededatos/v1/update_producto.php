<?php
require ('conexion.php');
$sql=" UPDATE articulos SET pvp = ".$_POST["precio"]." WHERE cod_articulo = ".$_POST["cod_articulo"].";";
$resultado=mysql_query($sql);
if ($resultado==false)
{
    echo "Error al actualizar";
}
 else {
header('Location:listado-articulos.php');    
}
mysql_close();
?>
