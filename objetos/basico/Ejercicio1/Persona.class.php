<?php
require_once ("Perro.class.php");
require_once ("Gato.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author jose
 */
class Persona {
    private $edad;
    private  $nombre;
    private $_hermano;
    private $_perro;
    private $_gato;
    
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function setHermano(Persona $hermano) {
        $this->_hermano = $hermano;
    }

    function setPerro(Perro $perro) {
        $this->_perro = $perro;
    }

    function setGato(Gato $gato) {
        $this->_gato = $gato;
    }
    
    function getEdad() {
        return $this->edad;
    }

    function getNombre() {
        return $this->nombre;
    }

        public function acariciarPerro(Perro $objPerro,$lugar){return $objPerro->tocan($lugar);}
        public function acariciarGato(Gato $objGato,$lugar){return $objGato->tocan($lugar);}
    public function alimentar(){return $this->_perro->comerComida();}

    
}
