<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Camion
 *
 * @author jose
 */
class Camion extends Cuatro_ruedas{
    private $longitud;
    
    public function __construct($color, $peso, $numero_puertas=0, $longitud) {
        $this->longitud = $longitud;
        parent::__construct($color, $peso, $numero_puertas);
    }

        public function añadir_remolque($longitud_remolque){
        $this->longitud = $this->longitud+$longitud_remolque;
    }
    function getLongitud() {
        return $this->longitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }


}
