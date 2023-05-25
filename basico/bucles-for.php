<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for($indice=0;$indice<=10;$indice++)
        {
            echo "El numero vale ".$indice."<br>";
        }
        $coches=array("mercedes","audi","seat");
        for ($i=0;$i<=count($coches)-1;$i++)
        {
            echo $coches[$i]."<br>";
        }
        foreach ($coches as $valor)
        {
            echo $valor."<br>";
        }
        $monedas=array("españa"=>"peseta","alemania"=>"marco","francia"=>"franco");
        foreach ($monedas as $clave=>$valor)
        {
            echo $clave." ".$valor."<br>";
        }
        ?>
    </body>
</html>
