<?php
function __autoload($nombreClase)
{
    require($nombreClase.".class.php");
}
$objVehiculo=new Vehiculo("negro",1500);
$objVehiculo->circula();
$objVehiculo->añadir_persona(70);
echo "<br>";
echo $objVehiculo->getPeso()." Kg";
$objCoche=new Coche("verde",1400);
$objCoche->añadir_persona(65);
$objCoche->añadir_persona(65);
echo "<br>";
echo $objCoche->getColor();
echo "<br>";
echo $objCoche->getPeso()." Kg";
$objCoche->repintar("rojo");
$objCoche->añadir_cadenas_nieve(2);
echo "<br>";
echo $objCoche->getColor();
echo "<br>";
echo $objCoche->getNumero_cadenas_nieve()." cadenas";
$objDos_ruedas=new Dos_ruedas("negro",120);
$objDos_ruedas->añadir_persona(80);
$objDos_ruedas->poner_gasolina(20);
echo "<br>";
echo $objDos_ruedas->getColor();
echo "<br>";
echo $objDos_ruedas->getPeso()." Kg";
$objCamion=new Camion("azul", 10000, 2, 10);
$objCamion->añadir_remolque(5);
$objCamion->añadir_persona(80);
echo "<br>";
echo $objCamion->getColor();
echo "<br>";
echo $objCamion->getPeso()." Kg";
echo "<br>";
echo $objCamion->getLongitud()." m";
echo "<br>";
echo $objCamion->getnumero_puertas()." puertas";


