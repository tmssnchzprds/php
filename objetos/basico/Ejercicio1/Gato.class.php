<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gato
 *
 * @author jose
 */
class Gato {
    private $nombre;
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
    public function tocan($lugar){
    switch ($lugar)
        {
            case "cola": {return "Has acariciado al gato en: ".$lugar."<br>". $this->tirarCola();
                break;
            }
        default : {return "Has acariciado al gato en: ".$lugar."<br>". $this->ronronear();}
        }
    }
    private function tirarCola(){return "El gato ha ara&ntilde;ado<br>";}
    private function ronronear(){return "El gato esta ronroneando<br>";}
}
