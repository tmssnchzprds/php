<?php
require ('conexion.php');
$sql=" DELETE FROM articulos WHERE cod_articulo = ".$_GET["cod_articulo"].";";
$resultado=mysql_query($sql);
if ($resultado==false)
{
    echo "Error al eliminar";
}
 else {
header('Location:listado-articulos.php');    
}
mysql_close();
?>

