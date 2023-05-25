<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cochesMulti=array(array("ford","gasolina",400,"rojo"),array("camaro","gasolina",450,"amarillo"),array("seat","diesel",90,"verde"),array("ferrari","nitro",900,"rojo"));
        ?>
        <table border="1">
            <tr>
                <th>Numero</th>
                <th>Numero*5</th>
            </tr>
            <?php
            for ($i=1;$i<=10;$i++)
            {
                echo "<tr><td>".$i."</td><td>".($i*5)."</td></tr>";
            }
            ?>
        </table>
        <table border="1">
            <tr>
                <th>NumeroCoche</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Potencia</th>
                <th>Color</th>
            </tr>
            <?php
            foreach ($cochesMulti as $marca=>$datos)
            {
                echo "<tr><td>".$marca."</td>";
                foreach ($datos as $valor)
                {
                    echo "<td>".$valor."</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
