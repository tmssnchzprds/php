<?php
$variable1=12345; //GLOBAL A LA PAGINA

function prueba ()
{
    global $variable2; //Todas las variables pasadas como parametros son locales a la funcion
    $variable2=67889; //GLOBAL A LA PAGINA
    $variable3=67889; //LOCAL A LA FUNCION
}
echo $variable1;
prueba(); //si no llamamos la funcion no tenemos acceso a variable2
echo $variable2; //si existe la variable fuera de la funcion prevalece a una global dentro de la funcion
?>