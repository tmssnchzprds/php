<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author jose
 */
interface Dao {
    public function conectar();
    public function desconectar();
    public function ejecutarSQL($consulta);
    public function numeroFilas($resultado);
    public function leerFila($resultado);
    public function ultimoID();
}
