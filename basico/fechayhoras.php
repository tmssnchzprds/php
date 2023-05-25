<?php
echo "Manejo de fechas y horas";
echo "<br>";
echo date("d/m/Y");
echo date("d-m-Y");
echo date("d/m/Y h:i:s M e l");
$fechaHoy=date_create(date("d-m-Y"));
$fechaCreada=date_create("2016-12-31");
echo date_format($fechaCreada, "d-m-y");
$diferencia=date_diff($fechaHoy, $fechaCreada);
echo $diferencia->format("%a dias");        
/*
 * d dia del mes
 * D dia de la semana
 * m mes
 * M mes en modo texto
 * Y año con 4 digitos
 * y año con 2 digitos
 * h hora
 * i minutos
 * s segundos
 */
?>