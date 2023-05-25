<?php

require_once ("Coche.class.php");

$objCoche=new Coche(400,150);

echo "Potencia ".$objCoche->dimePotencia();
echo "<br>";
echo "Peso ".$objCoche->dimePeso();
echo "<br>";
echo $objCoche->arrancar();
echo "<br>";
echo $objCoche->acelerar(100);
echo "<br>";
echo $objCoche->acelerar(50);