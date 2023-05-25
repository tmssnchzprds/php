<!DOCTYPE html>
<?php
include ("conexion.php");
$sql="select cod_articulo, nombre from articulos order by nombre;";
$resultado=mysql_query ($sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina para probar funcionamiento carrito</title>
    </head>
    <body>
        
        <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <?php 
                while ($articulo=mysql_fetch_array($resultado))
                {
                    echo '<option value="'.$articulo["cod_articulo"].'">'.$articulo["nombre"].'</option>';
                }
                mysql_data_seek($resultado,0);
                ?>
            </select>   
            cantidad:<input type="text" name="cantidad" size="2">
            <input type="hidden" name="accion" value="insertar">
            <input type="submit" value="Añadir a la cesta">
        </form>    
        <br>
        <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <?php 
                while ($articulo=mysql_fetch_array($resultado))
                {
                    echo '<option value="'.$articulo["cod_articulo"].'">'.$articulo["nombre"].'</option>';
                }
                mysql_data_seek($resultado,0);
                ?>
            </select>   
            <input type="hidden" name="accion" value="sumar">
            <input type="submit" value="Sumar en uno">
        </form>    
        <br>
       <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <?php 
                while ($articulo=mysql_fetch_array($resultado))
                {
                    echo '<option value="'.$articulo["cod_articulo"].'">'.$articulo["nombre"].'</option>';
                }
                mysql_data_seek($resultado,0);
                ?>
            </select>   
            <input type="hidden" name="accion" value="restar">
            <input type="submit" value="Restar en uno">
        </form>    
        <br>
        <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <?php 
                while ($articulo=mysql_fetch_array($resultado))
                {
                    echo '<option value="'.$articulo["cod_articulo"].'">'.$articulo["nombre"].'</option>';
                }
                ?>
            </select>  
            <input type="hidden" name="accion" value="eliminar">
            <input type="submit" value="Eliminar producto">
        </form>  
        <a href="controlador-carrito.php?accion=vaciar">
            Eliminar carrito
        </a>
        <br>
    </body>
</html>
