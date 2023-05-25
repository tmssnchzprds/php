<?php
require_once ("InterfazVehiculo.php");
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
class Coche implements interfazVehiculo{
    private $peso;
    private $potencia;
    private $velocidad;
            
    function __construct($peso, $potencia) {
        $this->peso = $peso;
        $this->potencia = $potencia;
    }

    
    public function acelerar($cuanto) {
        $this->velocidad+=$cuanto;
        return$this->velocidad;
    }

    public function arrancar() {
        return "estoy arrancando";
    }

    public function dimePeso() {
        return $this->peso;
    }

    public function dimePotencia() {
        return $this->potencia;
    }

}
