<?php
session_start();
include ("funciones-carrito.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        switch ($_GET["accion"]) {
        case  "insertar":
            anadir_producto($_GET["producto"],$_GET["cantidad"]);
            break;
        case  "sumar":
            sumar_producto($_GET["producto"]);
            break;
        case  "restar":
            restar_producto($_GET["producto"]);
            break;
        case  "eliminar":
            quitar_producto($_GET["producto"]);
            break;
        case "vaciar";
            vaciar_carrito();
            break;
        default:
            die("Error pagina no encontrada");
        }
        if (isset($_SESSION["carrito"]))
        {
            echo resumen_carrito();
            echo desglose_carrito();
        } else {
            echo "Carrito vacio";
        }
        ?>
    </body>
</html>
