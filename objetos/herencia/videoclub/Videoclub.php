<?php
function __autoload($nombreClase)
{
    require($nombreClase.".class.php");
}
$cinta= new Cinta_video("Los goonies","10010",12,120);
$juego= new Juego("World of Warcraft","20221",64.90,"PC",1,10);
$dvd=new Dvd("El ultimo samurai","30021",29.90,"Espa&ntilde;ol,Japones","Panoramico");
$cinta->imprime_caracteristicas();
echo "<br>";
$juego->imprime_caracteristicas();
echo "<br>";
$dvd->imprime_caracteristicas();
?>

