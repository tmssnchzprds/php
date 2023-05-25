<?php
function ejemplo_tonto($nombre)
{
    //$cadena="HOLA".$nombre.", buenos dias!!";
    //return $cadena;
    return "HOLA ".$nombre.", buenos dias!!";
}
$respuesta=ejemplo_tonto("tomas");
echo $respuesta;
echo "<br>";
function ejemplo_tonto2($nombre,$estadoCivil="soltero")
{
    echo "HOLA ".$nombre.", buenos dias!!, estas ".$estadoCivil;
}
ejemplo_tonto2("tomas");
?>