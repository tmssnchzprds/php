<?php
define("PI", 3.1416);

class Constante {
    const PI=3.1416;
    static function calculaLongitudCircunferencia($radio){
        $longitud=2*$radio*self::PI;
        return $longitud;
    }
}

echo "Constante global: ".PI;
echo "<br>";
echo "Costante de clase; ".Constante::PI;
echo "<br>";
echo Constante::calculaLongitudCircunferencia(50);
?>
