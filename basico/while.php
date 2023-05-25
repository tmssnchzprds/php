<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $contador=1;
            while ($contador<=10)
            {
                echo "El contador vale ".$contador;
                $contador++;
            }
             $indice=1;
            do
            {
                echo "El contador vale ".$indice;
                $indice++;
            }while ($indice<=10);
            $coches=array("mercedes","audi","seat");
            $i=0;
            while ($i<=count($coches)-1)
            {
                echo "El coche numero ".$i." es ".$coches[$i];
                echo "<br>";
                $i++;
            }
            
        ?>
    </body>
</html>
