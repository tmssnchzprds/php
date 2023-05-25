<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Ejemplo de login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Ejemplo de futuro login</h2>
        <form method="post" action="login.php">
            <input type="text" name="login">
            <input type="password" name="pass">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if (isset($_SESSION["error"])) {echo $_SESSION["error"];}
        ?>
    </body>
</html>
