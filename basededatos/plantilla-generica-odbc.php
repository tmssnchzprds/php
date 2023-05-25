<?php
odbc_connect("conexion-tienda", "sa", "\nd_va2V\S");
$sql="SELECT * FROM articulos";
$resultado= odbc_exec($idConexion, $sql);
while ($registro= odbc_fetch_array($resultado))
{
    echo "Nombre Producto".$registro["nombre"]." Pvp:".$registro["pvp"]."<br>";
}
odbc_close($idConexion );
?>