<?php
session_start();
if (isset($_SESSION["nombrecompleto"]))
    {
echo "Hola <b>".$_SESSION["nombrecompleto"]."</b> estas en tu zona privada";
echo "<br>";
echo "Perfil: ".$_SESSION["cod_perfil"];
echo "<br>";
    }
 else {
        header("Location:formulario-login.php");
}
?>
<a href="logout.php">Cerrar la sesion</a>