<?php
require_once("Vehiculo.class.php");
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
class Coche extends Vehiculo1 {
    
    private $puertas;
    public function aceleracionAproximada() {
        $coeficienteTransmision=2.2;
        $t= $this->peso*771.73/(2*$this->potencia*735);
        $t=$t*$coeficienteTransmision;
        return $t;
    }
    function getPuertas() {
        return $this->puertas;
    }

    function setPuertas($puertas) {
        $this->puertas = $puertas;
    }


}
?>