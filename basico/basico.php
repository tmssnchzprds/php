<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tutorial php, basico</title>
    </head>
    <body>
        <?php
        // comentario de una linea
        /*
         * comentario de varias lineas
         */
        echo '<h2>HOLA EN PHP</h2>';
        ?>
        <h2><?php echo 'HOLA EN PHP'; ?></h2>
        <table border="1">  
            <tr>
                <td><?php echo 'fila1'; ?></td>
            </tr>
            <tr>
                <?php echo '<td>fila2</td>'; ?>
            </tr>
        </table>
        <!-- comentario en html -->
    </body>
</html>
