<?php
require_once ("Persona.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Escuela
 *
 * @author jose
 */
class Escuela {
    private $nombre;
    private $_alumnos=array();
    
    function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    public function addAlumno(Persona $un_alumno) {
        $this->_alumnos[]=$un_alumno;
    }
    
    public function listar() {
            $html='<table border="1"><tr><th>Nombre</th><th>Edad</th></tr>';
        foreach ($this->_alumnos as $clave =>$obj) {
            $html.="<tr><td>".$obj->getNombre()."</td><td>".$obj->getEdad()."</td></tr>";
        }
        $html.="</table>";
        return $html;
    }

}
