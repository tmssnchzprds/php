<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Ejemplo de lectura de fichero</h2>
        <?php
         if($idf=fopen("fichero.txt","r"))
         {             echo "Fichero abierto".$idf;
             echo "<br>";    
            while (feof($idf)==false)
                {echo fgets($idf)."<br>";
                }
                fclose($idf);
                //Añadir contenido
                $idf=fopen("fichero.txt","a");
                $cadena="<br>ESTO ES NUEVO";
                fputs($idf,$cadena);
         }else{    echo "Error al abrir el fichero";}
        ?>
    </body>
</html>
