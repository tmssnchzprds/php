<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perro
 *
 * @author jose
 */
class Perro {
    private $nombre;
    private $color;
    private $estomagoLleno;
    
    function __construct($nombre, $color, $estomagoLleno=false) {
        $this->nombre = $nombre;
        $this->color = $color;
    }
    
    private function hacerDigestion(){$this->estomagoLleno=false;
    return $this->hacerNecesidades();}
public function comerComida(){$this->estomagoLleno=true;
    return "El perro ha comido<br>". $this->hacerDigestion();}
public function tocan($lugar){
    switch ($lugar)
        {
            case "cabeza": {return "Has acariciado al perro en: ".$lugar."<br>". $this->moverCola();
                break;
            }
        default : {return "Has acariciado al perro en: ".$lugar."<br>El perro ladra<br>";}
        }
    
}
private function moverCola(){return "El perro mueve la cola<br>";}
private function hacerNecesidades(){return "El perro hace caca<br>";}

}
