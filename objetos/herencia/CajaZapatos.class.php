<?php
require ("Caja.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CajaZapatos
 *
 * @author jose
 */
class CajaZapatos extends Caja{
    private $olor="muy mal";
    private $numeroZapatos=2;
    
    public function __construct($largo, $ancho, $alto, $color = "marrones", $numZapatos) {
        echo "Constructor de la clase hija...<br>";
        $this->numeroZapatos=$numZapatos;
        parent::__construct($largo, $ancho, $alto, $color);
    }

    public function __destruct() {
        echo "Destructor de la clase hija...<br>";
        parent::__destruct();
    }

        public function ejemplo(){
        return $this->color;
    }
}
