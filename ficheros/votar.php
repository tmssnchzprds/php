<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Gracias por su voto</h2>
        <?php
        if (isset($_COOKIE["votar"]))
            {   echo "No puedes votar de nuevo";}
            else {setcookie("votar",true, time()*60*60*24*365);
        $idf=fopen("votos.txt","r+");
        $votos_actuales=fgets($idf);
        rewind($idf);
        $array_votos= explode(",", $votos_actuales);
        $lenguaje_seleccionado=$_GET["lenguaje"];
        $array_votos[$lenguaje_seleccionado]++;
        $votos_actualizados=implode(",",$array_votos);
        fputs($idf, $votos_actualizados);
        fclose($idf);
        ?>
        <h2>Asi van las votaciones</h2>
        <br>
        Php: <?php echo $array_votos[0]; ?> (votos)
        <br>
        Java: <?php echo $array_votos[1]; ?> (votos)
        <br>
        C: <?php echo $array_votos[2]; ?> (votos)
            <?php } ?>
    </body>
</html>
