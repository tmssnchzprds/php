<?php
require_once '../modelo/Articulo.class.php';

$objArticulo=new Articulo();
switch ($_GET["accion"]) {
    case "listar":
            $mensaje="Listado de todos los articulos";
            $articulos=$objArticulo->listar();

        break;
   case "ofertas":
            $mensaje="Listado de todos las ofertas";
            $articulos=$objArticulo->listar(-1,true);

        break;
   case "novedades":
            $mensaje="Listado de todos las novedades";
            $articulos=$objArticulo->listar(-1,false,true);

        break;
    default:
        die("Accion no permitida");
}

require_once ("../vista/vista.phtml");
?>