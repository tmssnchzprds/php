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
interface interfazVehiculo {
    
    public function arrancar();
    public function acelerar($cuanto);
    public function dimePeso();
    public function dimePotencia();
}
