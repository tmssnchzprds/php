<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cinta_video
 *
 * @author jose
 */
class Cinta_video extends Soporte{
    protected $duracion;
    
    public function __construct($tit, $num, $precio, $duracion) {
        $this->duracion = $duracion;
        parent::__construct($tit, $num, $precio);
    }
    
    public function imprime_caracteristicas() {
        parent::imprime_caracteristicas();
        echo "duracion: ".$this->duracion."<br>";
    }

}
