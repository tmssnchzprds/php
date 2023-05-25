<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        switch ($perfil)
        {
            case 1: {echo "Eres un cliente";
break;
            }
            case 2: {echo "Eres un emleado";
break;
            }
            case 3: {echo "eres un administrador;";
break;
            }
        default : {                echo "no se quien eres";}
        }
        ?>
    </body>
</html>
