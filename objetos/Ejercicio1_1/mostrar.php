<?php
function __autoload($nombreClase)
{
    require($nombreClase.".class.php");
}

$objDos_ruedas=new Dos_ruedas("rojo",150);
$objDos_ruedas->añadir_persona(70);
echo $objDos_ruedas->getPeso()." Kg";
$objDos_ruedas->setColor("verde");
$objDos_ruedas->setCilindrada(1000);
echo "<br>";
echo $objDos_ruedas->getColor();
$objCamion=new Camion("blanco", 6000);
$objCamion->añadir_persona(84);


