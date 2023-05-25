<?php
require ("Coche.class.php");
require ("Moto.class.php");
require ("Formula1.class.php");

echo "Aceleracion de un coche de 125 cv y peso de 1300 kg <br>";
$objCoche=new Coche(120,1300);
$objCoche->setPuertas(4);
echo round($objCoche->aceleracionAproximada())." segundos";
echo "<br>";
echo "Aceleracion de una moto de 125 cv y peso de 180 kg <br>";
$objMoto=new Moto(125,180);
$objMoto->setAngulodeinclinacion(60);
echo round($objMoto->aceleracionAproximada())." segundos";
echo "<br>";
echo "Aceleracion de un formula 1 de 900 cv y peso de 600 kg <br>";
$objFormula1=new Formula1(900,600);
echo round($objFormula1->aceleracionAproximada())." segundos";
?>
