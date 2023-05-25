<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA PRACTICA, MODULO 2, UNIDAD FORMATIVA 1</title>
    </head>
    <body>
        <?php
        require 'promocion.class.php';
        $objPromociones=new Promocion();
        $promociones=$objPromociones->listar();
        ?>
        <form name="formulario" id="formulario" action="php/detalle.php" method="get">
        Seleccione una promocion:<select name="promocion" id="promocion">
                                    <?php
                                    foreach ($promociones as $promocion){
                                        echo '<option value="'.$promocion["cod_promocion"].'">'.$promocion["nombre"].'</option>';
                                    }
                                    ?>
				    </select>
        <button>Ver</button>
        </form>
    </body>
</html>
