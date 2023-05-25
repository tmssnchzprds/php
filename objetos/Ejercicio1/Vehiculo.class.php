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
class Vehiculo {
    protected $color;
    protected $peso;
    
    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }
    
    public function circula(){
        echo "El vehículo circula";
    }
    public function añadir_persona($peso_persona){
        $this->peso = $this->peso+$peso_persona;
    }
    function getColor() {
        return $this->color;
    }

    function getPeso() {
        return $this->peso;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }



}
