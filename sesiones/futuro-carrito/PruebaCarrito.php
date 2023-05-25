<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina para probar funcionamiento carrito</title>
    </head>
    <body>
        
        <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <option value="1">Jamon iberico</option>
                <option value="2">Chorizo</option>
                <option value="3">Tablet samsung</option>
                <option value="4">Pestiños</option>
            </select>   
            cantidad:<input type="text" name="cantidad" size="2">
            <input type="hidden" name="accion" value="insertar">
            <input type="submit" value="Añadir a la cesta">
        </form>    
        <br>
        <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <option value="1">Jamon iberico</option>
                <option value="2">Chorizo</option>
                <option value="3">Tablet samsung</option>
                <option value="4">Pestiños</option>
            </select>   
            <input type="hidden" name="accion" value="sumar">
            <input type="submit" value="Sumar en uno">
        </form>    
        <br>
       <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <option value="1">Jamon iberico</option>
                <option value="2">Chorizo</option>
                <option value="3">Tablet samsung</option>
                <option value="4">Pestiños</option>
            </select>   
            <input type="hidden" name="accion" value="restar">
            <input type="submit" value="Restar en uno">
        </form>    
        <br>
        <form method="get" action="controlador-carrito.php">
            <select name="producto">
                <option value="1">Jamon iberico</option>
                <option value="2">Chorizo</option>
                <option value="3">Tablet samsung</option>
                <option value="4">Pestiños</option>
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
