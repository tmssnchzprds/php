<?php

include("Caja.class.php");

$miCaja=new Caja(10,10,10,"verde");
/*
Echo "El color de mi caja es: ".$miCaja->color;
$miCaja->color="verde";
Echo "<br>El color de mi caja es: ".$miCaja->color;
*/
$miCaja->introducir("Un jamon");
//unset($miCaja);
$miCaja->setColor("azul");
echo $miCaja->getColor();
echo "<br>";
echo "Dentro de la caja hay: ".$miCaja->extraer();

echo $miCaja;
echo "<br>";
$otraCaja=clone $miCaja;
$otraCaja->setColor("rojo");
echo "Color de la caja 1 es: ".$miCaja->getColor();
echo "<br>";
echo "Color de la caja 2 es: ".$otraCaja->getColor();

?>