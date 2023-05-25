<?php
session_start();
//$loginRecibido=$_POST["login"];
//$passwordRecibido=$_POST["pass"];

//$consulta="SELECT * FROM usuarios WHERE login like'".$loginRecibido."'AND password like'".$passwordRecibido."';";
include("funciones.php");


if (loguear($_POST["login"],$_POST["pass"])==true)
{
     header("Location:zona-privada.php");        
} else {
    header("Location:formulario-login.php");
}

?>