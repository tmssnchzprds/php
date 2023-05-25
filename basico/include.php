<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Estoy en la pagina maestra</h3>
        <!--Lo de abajo viene de otro fichero -->
        <?php include("trozo.php"); ?>
        <h3>Continuamos</h3>
        <?php include_once ("trozo.php");?>
    </body>
</html>
