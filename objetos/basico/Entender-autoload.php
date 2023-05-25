<?php
function __autoload($nombreClase)
{
    echo $nombreClase."<br>";
    require("./clases/".$nombreClase.".class.php");
}
/*
require ("./clases/A.class.php");
require ("./clases/B.class.php");
require ("./clases/C.class.php");
require ("./clases/D.class.php");
*/
$objA=new A();
echo $objA->getVar();
echo "<br>";
$objB=new B();
echo $objB->getVar();
echo "<br>";
$objC=new C();
echo $objC->getVar();
echo "<br>";
$objD=new D();
echo $objD->getVar();
echo "<br>";
?>
