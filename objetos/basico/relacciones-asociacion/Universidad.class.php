<?php
require ("Alumno.class.php");
/**
 * Description of Universidad
 *
 * @author jose
 */
class Universidad {
    private $alumnos=array();
    //put your code here
    private $nombre_universidad;
   /*Composicion 
    function __construct(Alumno $un_alumno) {
        $this->alumnos[]=$un_alumno;
    }
    */
    function getNombre_universidad() {
        return $this->nombre_universidad;
    }

    function setNombre_universidad($nombre_universidad) {
        $this->nombre_universidad = $nombre_universidad;
    }

    public function añadir_alumno(Alumno $un_alumno) {
        $this->alumnos[]=$un_alumno;
    }
    public function cuantos_alumnos() {
        return count($this->alumnos);
    }
    public function mostrar_alumnos() {
            $html="";
        foreach ($this->alumnos as $clave =>$obj) {
            $html.="<b>".$obj->getNombre()."</b><br>";
        }
        return $html;
    }
}
