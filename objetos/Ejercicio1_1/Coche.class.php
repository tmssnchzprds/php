<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coche
 *
 * @author jose
 */
class Coche extends Cuatro_ruedas{
    private $numero_cadenas_nieve;
    
    public function __construct($color, $peso, $numero_puertas=0, $numero_cadenas_nieve=0) {
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
        parent::__construct($color, $peso, $numero_puertas);
    }

        public function añadir_cadenas_nieve($num){
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve+$num;
    }
    public function quitar_cadenas_nieve($num){
        $this->numero_cadenas_nieve = $this->numero_cadenas_nieve-$num;
    }
    function getNumero_cadenas_nieve() {
        return $this->numero_cadenas_nieve;
    }

    function setNumero_cadenas_nieve($numero_cadenas_nieve) {
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }


}
