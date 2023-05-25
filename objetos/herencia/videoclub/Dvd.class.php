<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dvd
 *
 * @author jose
 */
class Dvd extends Soporte{
    protected $idiomas_disponibles;
    protected $formato_pantalla;
    
    public function __construct($tit, $num, $precio, $idiomas, $pantalla) {
        $this->idiomas_disponibles = $idiomas;
        $this->formato_pantalla = $pantalla;
        parent::__construct($tit, $num, $precio);
    }
    
    public function imprime_caracteristicas() {
        parent::imprime_caracteristicas();
        echo "idiomas disponibles: ".$this->idiomas_disponibles."<br>";
        echo "formato de pantalla: ".$this->formato_pantalla."<br>";
    }

}
