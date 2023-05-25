<?php
session_start();
$libros=$_POST["libros"];
$cantidad=$_POST["cantidad"];
if (!isset($_SESSION["carrito"]))
{
    $_SESSION["carrito"]=array("javascript"=>0,"photoshop"=>0,"php"=>0);
}
$_SESSION["carrito"][$libros]=($_SESSION["carrito"][$libros])+$cantidad;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Insertar Cesta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Contenido de la cesta</h2>
        <table border="1">
            <tr>
                <th>Libros</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                <td>Javascript</td>
                <td><?php echo $_SESSION["carrito"]["javascript"]; ?></td>
            </tr>
            <tr>
                <td>Photoshop</td>
                <td><?php echo $_SESSION["carrito"]["photoshop"]; ?></td>
            </tr>
            <tr>
                <td>PHP5</td>
                <td><?php echo $_SESSION["carrito"]["php"]; ?></td>
            </tr>
        </table>
        <a href="CrearCesta.php">Añadir más libros</a>
        <a href="VaciarCesta.php">Vaciar Cesta</a>
        <a href="PagarCesta.php">Pagar Cesta</a>
    </body>
</html>
