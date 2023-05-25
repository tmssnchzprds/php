<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Soporte
 *
 * @author jose
 */
class Soporte {
    public $titulo;
    protected $numero;
    private $precio;
    
    public function __construct($tit, $num, $precio) {
        $this->titulo = $tit;
        $this->numero = $num;
        $this->precio = $precio;
    }
    
    public function dame_precio_sin_iva()
    {
        return $this->precio;
    }
    
    public function dame_precio_con_iva()
    {
        return ($this->precio)+(($this->precio)*21/100);
    }
    
    public function dame_numero_identificacion()
    {
        return $this->numero;
    }
    
    public function imprime_caracteristicas()
    {
        echo "titulo: ".$this->titulo."<br>";
        echo "numero: ".$this->dame_numero_identificacion()."<br>";
        echo "precio sin iva: ". $this->dame_precio_sin_iva()." &euro;<br>";
        echo "precio con iva: ". $this->dame_precio_con_iva()." &euro;<br>";
    }
}
