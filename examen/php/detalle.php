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
        $promocion=$_GET["promocion"];
        $objPromociones=new Promocion();
        $objPromociones->visualizar($promocion);
        ?>
        <table border="1">
            <tr>
                <th colspan="2">Detalle de la Promocion con código:<?php echo $promocion; ?> </th>
            </tr>
            <tr>
                <td>Nombre Promoción:</td>
                <td><?php echo $objPromociones->getNombre();?></td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td><?php echo $objPromociones->getDescripcion();?></td>
            </tr>
            <tr>
                <td>Provincia:</td>
                <td><?php echo $objPromociones->getProvincia();?></td>
            </tr>
            <tr>
                <td>Foto:</td>
                <td><img src="../images/<?php echo $objPromociones->getFoto();?>"></td>
            </tr>
        </table>
    </body>
</html>
