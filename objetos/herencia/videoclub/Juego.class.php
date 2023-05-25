<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juego
 *
 * @author jose
 */
class Juego extends Soporte{
    protected $consola;
    protected $min_num_jugadores;
    protected $max_num_jugadores;
    
    public function __construct($tit, $num, $precio, $consola, $min_j, $max_j) {
        $this->consola = $consola;
        $this->min_num_jugadores = $min_j;
        $this->max_num_jugadores = $max_j;
        parent::__construct($tit, $num, $precio);
    }
    
    public function imprime_caracteristicas() {
        parent::imprime_caracteristicas();
        echo "consola: ".$this->consola."<br>";
        echo "minimo de jugadores: ".$this->min_num_jugadores."<br>";
        echo "maximo de jugadores: ".$this->max_num_jugadores."<br>";
        $this->imprime_jugadores_posibles();
    }
    
    private function imprime_jugadores_posibles() {
        echo "de".$this->min_num_jugadores." a ".$this->max_num_jugadores."<br>";
    }
}
