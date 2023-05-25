<?php
require_once ("class/Articulo.class.php");

echo "<h2>Probando la clase de Articulo</h2>";
echo "<br>";

$objArticulo=new Articulo();
$objArticulo->ver(5);
echo $objArticulo->getCod_articulo();
echo "<br>";
echo $objArticulo->getNombre();
echo "<br>";
echo $objArticulo->getDescripcion();
echo "<br>";
echo $objArticulo->getPvp();
echo "<br>";
echo $objArticulo->getStock();
echo "<br>";
echo $objArticulo->getOferta();
echo "<br>";
echo $objArticulo->getNovedad();
echo "<br>";
echo '<img src="http://www.tienda-tomas.com/imagenesproductos/'.$objArticulo->getfoto().'">';
echo "<br>";
echo $objArticulo->get_categoria()->getNombre();
echo "<br>";
echo $objArticulo->get_categoria()->getId_Categoria();

echo "<br>Probando la busqueda<br>";
$registro=$objArticulo->buscar(10,1000);
if ($registro!=false)
    {
    echo "Ha encontrado productos<br>";
    echo $registro[0]["nombre"]."<br>";
    }
    
$registro=$objArticulo->listar(1);
if ($registro!=false)
    {
    echo "Ha encontrado productos<br>";
    foreach ($registro as $registro_actual){
        echo $registro_actual["nombre"]." ".$registro_actual["pvp"]."<br>";
    }
    }
       
$registro=$objArticulo->listar(-1,true);
if ($registro!=false)
    {
    echo "Ha encontrado productos<br>";
    foreach ($registro as $registro_actual){
        echo $registro_actual["nombre"]." ".$registro_actual["pvp"]."<br>";
    }
    }
    
    $registro=$objArticulo->listar(-1,false,true);
if ($registro!=false)
    {
    echo "Ha encontrado productos<br>";
    foreach ($registro as $registro_actual){
        echo $registro_actual["nombre"]." ".$registro_actual["pvp"]."<br>";
    }
    }