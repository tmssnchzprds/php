<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cuatro_ruedas
 *
 * @author jose
 */
class Cuatro_ruedas extends Vehiculo {
    protected $numero_puertas;
    
    public function __construct($color, $peso, $numero_puertas=0) {
        $this->numero_puertas = $numero_puertas;
        parent::__construct($color, $peso);
    }

        public function repintar($color){
        $this->color = $color;
    }
    public function añadir_persona($peso_persona) {
        $this->peso= $this->peso+$peso_persona;
        
    }
            function getNumero_puertas() {
        return $this->numero_puertas;
    }

    function setNumero_puertas($numero_puertas) {
        $this->numero_puertas = $numero_puertas;
    }


}
