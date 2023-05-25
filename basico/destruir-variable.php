<?php
$nombre="juan";

?>
<h2>Sigue la pagina</h2>
<?php
//sleep(5);
//die("ALTO!!");
unset($nombre); //destruyo la variable
?>
<h2>Termina la pagina</h2>
<?php
echo $nombre;
?>