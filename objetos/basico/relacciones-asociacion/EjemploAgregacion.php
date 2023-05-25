<?php
require_once ("Universidad.class.php");
require_once ("Alumno.class.php");

echo "<h2>Ejemplo de relaccion de agregacion:</h2>";
$objUniversidad=new Universidad();
$objUniversidad->setNombre_universidad("Juan Carlos I");

$objAlumno1=new Alumno();
$objAlumno1->setNombre("Francisco");

$objAlumno2=new Alumno();
$objAlumno2->setNombre("Manuela");

$objAlumno3=new Alumno();
$objAlumno3->setNombre("Pepe");

$objUniversidad->añadir_alumno($objAlumno1);
$objUniversidad->añadir_alumno($objAlumno2);
$objUniversidad->añadir_alumno($objAlumno3);

echo "Alumnos en la universidad ".$objUniversidad->cuantos_alumnos();
echo "<br>";
echo "Datos de los alumnos:<br>";
echo $objUniversidad->mostrar_alumnos();