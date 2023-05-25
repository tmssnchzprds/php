<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dos_ruedas
 *
 * @author jose
 */
class Dos_ruedas extends Vehiculo{
    protected $cilindrada;
    
    public function __construct($color, $peso, $cilindrada=0) {
        $this->cilindrada=$cilindrada;
        parent::__construct($color, $peso);
    }

        public function poner_gasolina($litros){
        $this->peso = $this->peso+$litros;
    }
    function getCilindrada() {
        return $this->cilindrada;
    }

    function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }


}
