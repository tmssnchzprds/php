<!DOCTYPE html>
<?php
$nombre="Juan";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Parametros por GET</h2>
        <a href="recibe-get.php?nombre=<?php echo $nombre;?>"Paso por get</a>
        <?php
        echo '<a href="recibe-get.php?nombre='.$nombre.'">Paso por get</a>';
        ?>
    </body>
</html>
