<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="jquery-1.9.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            $("a").click(function(e){
                e.preventDefault();
                var atributo_href=$(this).attr("href");
                $("#edita_articulo").load(atributo_href);
                });
            
             $("#actualizar").click(function(e){
                e.preventDefault();
                $("#edita_articulo").fadeOut(100);
                var datos=$("#formulario").serialize();
                $.getJSON("update_producto.php",datos,mostrar)
                });
            function mostrar(datos){
                alert(datos.operacion+" "+datos.texto);
            }
            });
            function eliminar(cod_articulo) {
                var resultado=confirm("estas seguro que deseas eliminar el articulo");
                if (resultado)
                {window.location="eliminar_producto.php?cod_articulo="+cod_articulo;}
            }
        </script>
    </head>

    <body>
        <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Pvp</th>
            <th>Acciones</th>
        </tr>
        <?php
            require ('conexion.php');
            $sql="Select cod_articulo,nombre,pvp FROM articulos;";
            $resultado=mysql_query ($sql);
            while ($registro=mysql_fetch_array($resultado))
{
    echo '<tr><td>'.$registro["nombre"].'</td><td>'.$registro["pvp"].'</td><td><a class="ver" href="detalle_producto.php?cod_articulo='.$registro["cod_articulo"].'">Editar</a> | <a href="#" onclick="eliminar('.$registro["cod_articulo"].');">Eliminar</a></td></tr>';
}
      mysql_close();  
        ?>
        </table>
        <div id="edita_articulo">
            
        </div>
    </body>
</html>
