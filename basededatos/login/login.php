<?php
session_start();
include("conexion.php");
include("funciones.php");
$loginRecibido=$_POST["login"];
$passwordRecibido=$_POST["pass"];

if (loguear($loginRecibido,$passwordRecibido)==true)
{
     header("Location:zona-privada.php");        
} else {
    header("Location:formulario-login.php");
}

?>