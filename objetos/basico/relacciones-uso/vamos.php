<?php
require_once ("A.class.php");

$objA=new A();
echo "Relaccion de uso:";
echo $objA->usaB();
echo "<br>";
//de la segunda forma:

require_once ("B.class.php");

$objClaseB=new B();
echo $objA->usaB2($objClaseB);