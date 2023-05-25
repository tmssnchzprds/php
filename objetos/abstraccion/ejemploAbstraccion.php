<?php

abstract class ClaseAbstracta {
    
    abstract public function saludo();
        
    public function despedida(){
        echo "Adios";
    }
}

class ClaseEspaniol extends ClaseAbstracta{
    
    public function saludo() {
        echo "Hola Bienvenido";
    }
}
class ClaseAleman extends ClaseAbstracta{
    
    public function saludo() {
        echo "Hai, Willkome!";
    }

}
class ClaseIngles extends ClaseAbstracta{
    
    public function saludo() {
        echo "Hello, Wellcome";
    }

}

$objEspaniol=new ClaseEspaniol();
$objEspaniol->saludo();
$objEspaniol->despedida();
$objAleman=new ClaseAleman();
$objAleman->saludo();
$objAleman->despedida();
$objIngles=new ClaseIngles();
$objIngles->saludo();
$objIngles->despedida();
?>