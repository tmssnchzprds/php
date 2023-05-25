<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
        <?php
         require ('conexion.php');
            $sql="Select nombre,descripcion,pvp FROM articulos WHERE cod_articulo=".$_GET["cod_articulo"].";";
            $resultado=mysql_query ($sql);
            $registro=mysql_fetch_array($resultado);
            echo "<h2>".$registro["nombre"]."</h2>";
            echo "<p>".$registro["descripcion"]."</p>";
            ?>
            <input type="text" name="precio" size="5" value="<?php echo $registro["pvp"];?>">
            <input type="hidden" name="cod_articulo" value="<?php echo $_GET["cod_articulo"];?>">
            <button id="actualizar">Actualizar PVP</button>
            <?php mysql_close();?>
        </form>
    </body>
</html>
