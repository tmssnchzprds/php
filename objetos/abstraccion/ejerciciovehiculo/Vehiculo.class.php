<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehiculo
 *
 * @author jose
 */
abstract class Vehiculo1 {
    public $potencia;
    public $peso;
    
    function __construct($potencia, $peso) {
        $this->potencia = $potencia;
        $this->peso = $peso;
    }
    
    function relacionPesoPotencia(){
        return ($this->peso/$this->potencia);
    }
    
    abstract public function aceleracionAproximada();

}
