<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Estoy en la pagina maestra</h3>
        <!--Lo de abajo viene de otro fichero el require se para-->
        <?php require ("trozo.php"); ?>
        <h3>Continuamos</h3>
        <?php require_once ("trozo.php");?>
    </body>
</html>
