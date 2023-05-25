<?php
oci_connect("conexion-tienda", "sa", "\nd_va2V\S");
$sql="SELECT * FROM articulos";
$resultado= oci_execute($idConexion, $sql);
while ($registro= oci_fetch_array($resultado))
{
    echo "Nombre Producto".$registro["nombre"]." Pvp:".$registro["pvp"]."<br>";
}
oci_close($idConexion);
?>