<?php

class Caja {
    //Propiedades
    private $largo;
    private $ancho;
    private $alto;
    private $color="rojo";
    private $contenido;
    
    /*
    public function __construct($color,$ancho,$largo,$alto) {
        $this->alto=$alto;
        $this->ancho=$ancho;
        $this->largo=$largo;
        $this->color=$color;
    }
*/
function __construct($largo, $ancho, $alto, $color="marrones") {
   $this->largo = $largo;
   $this->ancho = $ancho;
   $this->alto = $alto;
   $this->color = $color;
   echo "construyendo la clase";
}

public function __destruct() {
    echo "destruyendo la clase...";    
}

public function __toString() {
    return $this->alto." ". $this->ancho." ". $this->largo." ". $this->color." ". $this->contenido;

}

//Accesores
function getLargo() {
    return $this->largo;
}

function getAncho() {
    return $this->ancho;
}

function getAlto() {
    return $this->alto;
}

function getColor() {
    return $this->color;
}

function setLargo($largo) {
    $this->largo = $largo;
}

function setAncho($ancho) {
    $this->ancho = $ancho;
}

function setAlto($alto) {
    $this->alto = $alto;
}

function setColor($color) {
    $this->color = $color;
}

//Metodos
public function introducir($algo)
    {
        $this->contenido=$algo;
    }
/*
function setContenido($contenido) {
    $this->contenido = $contenido;
}
*/
    public function extraer()
    {
        return $this->contenido;
    }
}

?>