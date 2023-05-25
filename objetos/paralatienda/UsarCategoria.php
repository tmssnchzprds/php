<?php
require_once ("class/Categoria.class.php");

echo "<h2>Probando la clase de Categoria</h2>";
echo "<br>";

$objCategoria=new Categoria();
$objCategoria->ver(4);
echo $objCategoria->getId_categoria();
echo "<br>";
echo $objCategoria->getNombre();

$listado_categorias=$objCategoria->getCategorias();
foreach ($listado_categorias as $categoria_actual){
    echo $categoria_actual["cod_categorias"].' '.$categoria_actual["nombre"].'<img src="http://www.tienda-tomas.com/fotos-categorias/'.$categoria_actual["imagen"].'"><br>';
}
