<!DOCTYPE html>
<?php
require ('conexion.php');
$sql="Select cod_articulo,nombre,pvp,foto FROM articulos";
if (isset($_POST["categoria"]) && ($_POST["categoria"]!=-1))
{
    
    $sql.=" WHERE cod_categoria=".$_POST["categoria"].";";
    $categoria_seleccionada=$_POST["categoria"];
}
else
{
    $categoria_seleccionada=-1;
}
            $resultado=mysql_query ($sql);
            $sql2="SELECT * FROM categorias ORDER BY nombre;";
            $resultado2=mysql_query ($sql2);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function eliminar(cod_articulo) {
                var resultado=confirm("estas seguro que deseas eliminar el articulo");
                if (resultado)
                {window.location="eliminar_producto.php?cod_articulo="+cod_articulo;}
            }
        </script>
    </head>

    <body>
        Selecciona la categoria:
        <form method="post" action="listado-articulos.php">
        <select name="categoria">
            <option value="-1">(todas)</option>
            <?php
            while ($categoria_actual=mysql_fetch_array($resultado2))
            {
                $texto_selected=($categoria_seleccionada==$categoria_actual["cod_categorias"])?"selected":"";
                echo '<option value="'.$categoria_actual["cod_categorias"].'"'.$texto_selected.'>'.$categoria_actual["nombre"].'</option>';
            }
            ?>
        </select>
            <button> filtrar</button>
        </form>
        <table border="1">
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Pvp</th>
            <th>Acciones</th>
        </tr>
        <?php
            while ($registro=mysql_fetch_array($resultado))
{
    echo '<tr><td><img width="50" height=50" src="http://tienda-tomas.com/imagenesproductos/'.$registro["foto"].'"></td><td>'.$registro["nombre"].'</td><td>'.$registro["pvp"].'</td><td><a href="detalle_producto.php?cod_articulo='.$registro["cod_articulo"].'">Editar</a> | <a href="#" onclick="eliminar('.$registro["cod_articulo"].');">Eliminar</a></td></tr>';
}
      mysql_close();  
        ?>
        </table>
    </body>
</html>
