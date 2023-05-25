<?php
require ('conexion.php');
$resultado=mysql_query ($sql);
//$registro1=mysql_fetch_array($resultado);
//$registro2=mysql_fetch_object($resultado);
//echo "Nombre Producto".$registro1["nombre"]." Pvp:".$registro1[1];
//echo"Nombre Producto".$registro2->nombre." Pvp:".$registro1->pvp;
while ($registro=mysql_fetch_array($resultado))
{
    echo "Nombre Producto".$registro["nombre"]." Pvp:".$registro["pvp"]."<br>";
}
$filas=mysql_num_rows($resultado);
/*for ($i=0;$i<$filas;$i++)
{
     echo "Nombre Producto".$registro["nombre"]." Pvp:".$registro["pvp"];
}*/
mysql_close($idConexion);
?>