<?php
if(($_FILES["fichero"]["type"]=="image/jpeg") && ($_FILES["fichero"]["size"]<=(1024*1024)))
{
echo "Recibiendo el fichero...";
echo "<br>";
echo "nombre: ".$_FILES["fichero"]["name"];
echo "<br>";
echo "tama&ntilde;o en MegaBytes: ".($_FILES["fichero"]["size"]/(1024*1024));
echo "<br>";
echo "Tipo: ".$_FILES["fichero"]["type"];
echo "<br>";
echo "Carpeta temporal: ".$_FILES["fichero"]["tmp_name"];
}else { echo"El formato de fichero no es correcto o el tamaño no es correcto";}
$nombreFichero=$_FILES["fichero"]["name"];
$rutaOrigen=$_FILES["fichero"]["tmp_name"];
$rutaDestino="./".$nombreFichero;
if (file_exists($rutaDestino)==true){echo "<br>el fichero ya existe";}else{
move_uploaded_file($rutaOrigen, $rutaDestino);}
echo '<br><img src="'.$nombreFichero.'" width="100" height"100">';
?>