<?php
session_start();
require_once 'class/Carrito.class.php';

$objCesta=new Carrito();
$objCesta->vaciar_carrito();
$objCesta->anadir_producto(1, 10);
$objCesta->anadir_producto(2, 5);
$objCesta->anadir_producto(3, 4);

echo $objCesta->desglose_carrito();

echo "<br>";

echo $objCesta->resumen_carrito();
echo "<br>";
$objCesta->restar_producto(1);
$objCesta->restar_producto(1);
$objCesta->restar_producto(1);
$objCesta->restar_producto(1);
$objCesta->restar_producto(1);
$objCesta->quitar_producto(2);
echo $objCesta->desglose_carrito();