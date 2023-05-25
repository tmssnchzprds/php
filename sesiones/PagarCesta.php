<?php
session_start();
$precio=array("javascript"=>30,"photoshop"=>40,"php"=>35);
define("iva",18);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pagar Cesta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Desglose</h2>
        <table border="1">
            <tr>
                <th>Libros</th>
                <th>Cantidad</th>
                <th>Precio/Unidad</th>
                <th>Precio Total</th>
            </tr>
            <tr>
                <td>Javascript</td>
                <td><?php echo $_SESSION["carrito"]["javascript"]; ?></td>
                <td><?php echo $precio["javascript"]." €"; ?></td>
                <td><?php $preciototal["javascript"]=$precio["javascript"]*$_SESSION["carrito"]["javascript"];
                          echo $preciototal["javascript"]." €"; ?></td>
                
            </tr>
            <tr>
                <td>Photoshop</td>
                <td><?php echo $_SESSION["carrito"]["photoshop"]; ?></td>
                <td><?php echo $precio["photoshop"]." €"; ?></td>
                <td><?php $preciototal["photoshop"]=$precio["photoshop"]*$_SESSION["carrito"]["photoshop"];
                           echo $preciototal["photoshop"]." €"; ?></td>
            </tr>
            <tr>
                <td>PHP5</td>
                <td><?php echo $_SESSION["carrito"]["php"]; ?></td>
                <td><?php echo $precio["php"]." €"; ?></td>
                <td><?php $preciototal["php"]=$precio["php"]*$_SESSION["carrito"]["php"];
                            echo $preciototal["php"]." €"; ?></td>
            </tr>
            <tr>
                <td><b>Precio sin iva</b></td>
                <?php 
                    $cantidadtotal=$_SESSION["carrito"]["javascript"]+$_SESSION["carrito"]["photoshop"]+$_SESSION["carrito"]["php"];
                    $preciofinal=$preciototal["javascript"]+$preciototal["photoshop"]+$preciototal["php"];
                    switch ($cantidadtotal)
                    {
                        case $cantidadtotal>=10 && $cantidadtotal<=49: {
                            echo '<td colspan="2">Descuento del 5%</td>';
                            $preciofinal=$preciofinal-($preciofinal*5/100);
                            break;
                        }
                        case $cantidadtotal>=50 && $cantidadtotal<=99: {
                            echo '<td colspan="2">Descuento del 10%</td>';
                            $preciofinal=$preciofinal-($preciofinal*10/100);
                            break;
                        }
                        case $cantidadtotal>=100: {
                            echo '<td colspan="2">Descuento del 20%</td>';
                            $preciofinal=$preciofinal-($preciofinal*20/100);
                            break;
                        }
                        default: {
                            echo '<td colspan="2">No hay descuento</td>';
                            
                        }
                    }
                    echo "<td>".number_format($preciofinal,2 ,",",".")." €</td>";
                ?>
            </tr>
            <tr>
                <td><b>Precio Final</b></td>
                <td colspan="2"></td>
                <td><?php
                $preciofinal=$preciofinal+($preciofinal*iva/100);
                echo number_format($preciofinal,2,",",".")." €";
                ?></td>
        </table>
        <a href="CrearCesta.php">Añadir más libros</a>
    </body>
</html>
