<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estatica
 *
 * @author jose
 */
class Estatica {
    static public $variable_estatica="pepe";
    public $variable_de_instancia="juan";
    static public function MetodoEstatico(){
        echo "Hola, soy un metodo estatico";
    }
    public function MetodoInstanciado(){
        echo "Hola, soy un metodo instanciado";
    }
}

echo Estatica::$variable_estatica;
echo "<br>";
echo Estatica::MetodoEstatico();
echo "<br>";
$objEstatica=new Estatica();
echo $objEstatica->variable_de_instancia;
echo "<br>";
echo $objEstatica->MetodoInstanciado();
echo "<br>";
