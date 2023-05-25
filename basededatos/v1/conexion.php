<?php

$server="192.168.2.52";
$user="root";
$password="tomas";
$db="tienda-virtual";
$sql="Select nombre,pvp FROM articulos;";
$idConexion=mysql_connect($server, $user, $password);
mysql_select_db($db,$idConexion);

?>