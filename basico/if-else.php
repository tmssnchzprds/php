<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $edad=21;
        $sexo="F";
        $millonario=true;
        if ((($edad>=18) && ($millonario==true)) || ($sexo=="F"))
        {
            echo "Entras en la discoteca";
        }
 else {            echo 'No entras en la discoteca';}
if (isset($edad))
{
    echo "Existe la edad";
}
 else {
    echo "No Existe la edad";
}
        ?>
    </body>
</html>
