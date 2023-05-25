<?php
session_start();
echo "Identificador de sesion creado es ". session_id();
$nombreCliente="Tomás Sánchez Paredes";
$SESSION["nombre"]=$nombreCliente;
$SESSION["momento"]=time();
?>
<a href="ver-sesion.php">Ver la sesion</a>