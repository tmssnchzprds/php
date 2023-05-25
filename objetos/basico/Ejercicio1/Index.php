<?php
require_once ("Persona.class.php");
require_once ("Escuela.class.php");
require_once ("Perro.class.php");
require_once ("Gato.class.php");
/* Rosa tiene un perro */
$Rosa = new Persona('Rosa', 5);
$perro = new Perro('Tito', 'blanco y negro'); 
$Rosa->setPerro($perro); 

/* Martina, dueña del mismo perro... */

 $Martina = new Persona('Martina', 3);
 $Martina->setPerro($perro); 
 echo "<br>";
 echo $Martina->acariciarPerro($perro,"cabeza");
  echo "<br>";
 echo $Martina->acariciarPerro($perro,"cola");
 echo "<br>";
 echo "Martina da de comer al perro";
 echo "<br>";
 echo $Martina->alimentar();
 echo "<br>";
 $Rosa->setHermano($Martina);
 $Martina->setHermano($Rosa);
/* Marcos es dueño de un gato */

 $Marcos = new Persona('Marcos', 6); 
 $gato=new Gato("Misifu");
 $Marcos->setGato($gato);
 echo "<br>";
 echo $Marcos->acariciarGato($gato,"cola");
  echo "<br>";
 echo $Marcos->acariciarGato($gato,"cabeza");
 echo "<br>";
 
/* Escuela Dos Corazones */

 $escuela = new Escuela('Dos Corazones');

 /* ... Micaela va junto con 5 niños más ... */

 $escuela->addAlumno($Rosa); 
 $escuela->addAlumno($Martina);
 $escuela->addAlumno($Marcos);
 $escuela->addAlumno(new Persona('Julio',5));
 $escuela->addAlumno(new Persona('Martin',4));
 $escuela->addAlumno(new Persona('Carla',4));
 echo "<br>Alumnos de la escuela<br>";
 echo $escuela->listar();

