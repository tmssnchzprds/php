<?php
require_once ("B.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of A
 *
 * @author jose
 */
class A {
    private $a="Soy A";
    function getA() {
        return $this->a;
    }
    //Primera forma, instanciacion dentro de un metodo
public function usaB(){
    $claseB=new B();
    return $claseB->getB();
}
    //Segunda forma, recibo por parametro el objeto
    public function usaB2(B $obj){
        return$obj->getB();
    }
}
