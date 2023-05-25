<?php
function anadir_producto($cod_articulo,$cantidad=1)
{
    if (isset($_SESSION["carrito"][$cod_articulo]))
    { $_SESSION["carrito"][$cod_articulo]+=$cantidad;
    }else{
    $_SESSION["carrito"][$cod_articulo]=$cantidad;
    }
}
function quitar_producto($cod_articulo)
{
    unset($_SESSION["carrito"][$cod_articulo]);
    if (count($_SESSION["carrito"])==0)
    {
        vaciar_carrito();
    }
}
function sumar_producto($cod_articulo)
{
    $_SESSION["carrito"][$cod_articulo]+=1;
}
function restar_producto($cod_articulo)
{
    $_SESSION["carrito"][$cod_articulo]-=1;
    if ($_SESSION["carrito"][$cod_articulo]==0)
    {
        quitar_producto($cod_articulo);
    }
}
function vaciar_carrito()
{
    unset($_SESSION["carrito"]);
}
 function desglose_carrito(){

//$nombre_producto=array(1=>"Jamon jabugo", 2=>"Chorizo cantimpalo", 3=>"tablet samsung", 4=>"pestiños");
//$precio_producto=array(1=>300, 2=>30, 3=>200, 4=>10);
//$imagenes_producto=array(1=>"jamonbellota.jpg" ,2=>"chorizo-artesano-de-jabali.jpg" ,3=>"no-image.jpg", 4=>"Pinonate-Menudillo.jpg");
$html='<table width="80%">
            <tr>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
                <th>Subtotal</th>
            </tr>';


                    $total_sin_iva=0;
                    foreach ($_SESSION["carrito"]as $cod=>$cant)
                    {
                        $sql="SELECT * FROM articulos WHERE cod_articulo=".$cod;
                        $resultado=mysql_query($sql);
                        $articulo=mysql_fetch_array($resultado);
                        $total_sin_iva+=($articulo["pvp"]*$cant);
                        $html.= '<tr>';
                        $html.='<td><img src="http://www.tienda-tomas.com/imagenesproductos/'.$articulo["foto"].'" width="50" height="50"></td>';
                        $html.= '<td>'.$articulo["nombre"].'</td>';
                        $html.= '<td>'.$articulo["pvp"].' €</td>';
                        $html.= '<td>'.$cant.'</td>';
                        $html.= '<td><a href="controlador-carrito.php?accion=sumar&producto='.$cod.'"><img src="aumentar.png"></a><a href="controlador-carrito.php?accion=restar&producto='.$cod.'"><img src="restar.png"></a><a href="controlador-carrito.php?accion=eliminar&producto='.$cod.'"><img src="eliminar.png"></a></td>';
                        $html.= '<td>'.number_format(($articulo["pvp"]*$cant),0,",",".").' €</td>';
                        $html.= '</tr>';
                        unset($resultado);
                        unset($articulo);
                    }
            $html.='<tr><td colspan="6"></td></tr>';
            $html.='<tr><td colspan="5"><b>Total:</b></td><td>'.number_format($total_sin_iva,0,",",".").' €</td></tr>';
        $html.='</table>';
        return $html;
}
function resumen_carrito() {
   // $precio_producto=array(1=>300, 2=>30, 3=>200, 4=>10);
    $total_articulos=0;
    $total_sin_iva=0;
    foreach ($_SESSION["carrito"]as $cod=>$cant)
       {
        $sql="SELECT * FROM articulos WHERE cod_articulo=".$cod;
                        $resultado=mysql_query($sql);
                        $articulo=mysql_fetch_array($resultado);
                        
        $total_articulos+= $cant;
        $total_sin_iva+=($articulo["pvp"]*$cant);
    }
    $html='<table class="cesta">'
            . '<tr><th colspan="2">Resumen</th></tr>'
            . '<tr><td>Articulos:</td><td>'.$total_articulos.'</td></tr>'
            . '<tr><td>Total:</td><td>'.number_format($total_sin_iva,0,",",".").' €</td></tr>'
            . '<tr><td colspan"2">ver-pagar</td></tr></table>';
    return $html;
}
?>
