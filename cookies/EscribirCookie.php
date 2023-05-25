<?php
echo"Lanzando cookie al navegador del cliente...";
$nombreCliente="Tomas Sanchez Paredes";
setcookie("galleta",$nombreCliente,time()+60*60);
echo "Cookie lanzada...";
?>