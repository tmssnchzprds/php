<?php

class Poligono {
    public $numerolados;
    public $base;
    public $altura;
    protected function area() {
        echo "No se puede calcular el area depende del tipo de poligono";
    }
}

class Cuadrado extends Poligono {
    public function area() {
        return ($this->base*$this->altura);
    }
}

class Triangulo extends Poligono {
    public function area() {
        return ($this->base*$this->altura/2);
    }
}

class Rectangulo extends Poligono {
    public function area() {
        return ($this->base*$this->altura);
    }
}

$objCuadrado= new Cuadrado();
$objCuadrado->altura=2;
$objCuadrado->base=2;
$objTriangulo=new Triangulo();
$objTriangulo->altura=3;
$objTriangulo->base=2;
$objRectangulo=new Rectangulo();
$objRectangulo->altura=1;
$objRectangulo->base=10;

function CalculaArea(Poligono $obj){
    echo $obj->area()." m2";
}
CalculaArea($objCuadrado);
echo "<br>";
CalculaArea($objTriangulo);
echo "<br>";
CalculaArea($objRectangulo);
echo "<br>";
?>
