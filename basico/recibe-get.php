<?php
echo "Recibiendo parametros por GET:";
echo "<br>";
//$nombreRecibido=$_GET["nombre"];
//echo "<b>".$nombreRecibido."</b>";
if (isset($_GET["nombre"]))
{
    echo "<b>".$_GET["nombre"]."</b>";
} else {
    echo "No has pasado la variable nombre";
}
?>