<!DOCTYPE html>
<?php
// PRIMER TIPO, INDEXADOS O NUMERICOS
//$coches=array("mercedes","audi","seat");
$coches[0]="mercedes";
$coches[1]="audi";
$coches[2]="seat";
$coches[]=12;
$coches[]="opel";
$coches[]=10.5;
echo "Numero de coches ".count($coches);
echo $coches[4];
echo "<br>";
var_dump($coches);
echo "<br>";
print_r($coches);
sort($coches);//ORDENA ALFABETICAMENTE DE LA A...Z
echo "<br>";
print_r($coches);
rsort($coches);//ORDENA ALFABETICAMENTE DESCENDIENTEMENTE DE LA Z...A
echo "<br>";
print_r($coches);
//ARRAYS ASOCIATIVOS
//$monedas=array("españa"=>"peseta","alemania"=>"marco","francia"=>"franco");
$monedas["españa"]="peseta";
$monedas["alemania"]="marco";
$monedas["francia"]="franco";
echo "La moneda de alemania es: ".$monedas["alemania"];
$varios=array("5"=>"a",5.4=>"b",6=>"c",true=>"d");
$edades=array("pedro"=>19,"juan"=>28,"paco"=>34);
echo '<br>';
ksort($edades); //ORDENA POR EL INDICE ASC
print_r($edades);
echo "<br>";
krsort($edades); //ORDENA POR EL INDICE DESC
print_r($edades);
echo "<br>";
asort($edades); //ORDENA POR EL VALOR ASC
print_r($edades);
echo "<br>";
arsort($edades); //ORDENA POR EL VALOR DESC
print_r($edades);

$cochesMulti=array(array("ford","gasolina",400,"rojo"),array("camaro","gasolina",450,"amarillo"),array("seat","diesel",90,"verde"),array("ferrari","nitro",900,"rojo"));
echo "<br>";
echo "La potencia del camaro es: ".$cochesMulti[1][2];
echo "<br>";
echo "La color del ferrary es: ".$cochesMulti[3][3];
$cochesMulti2=array(
                    array("marca"=>"ford","tipo"=>"gasolina","potencia"=>400,"color"=>"rojo"),
                    array("marca"=>"camaro","tipo"=>"gasolina","potencia"=>450,"color"=>"amarillo"),
                    array("marca"=>"seat","tipo"=>"diesel","potencia"=>90,"color"=>"verde"),
                    array("marca"=>"ferrari","tipo"=>"nitro","potencia"=>900,"color"=>"rojo")
                );
echo "<br>";
echo "La potencia del camaro es: ".$cochesMulti2[1]["potencia"];
echo "<br>";
echo "La color del ferrary es: ".$cochesMulti2[3]["color"];
//IMPLODE Y EXPLODE
//$cadena=$coches[0]."-".$coches[1]."-".$coches[2];
$cadena= implode("-", $coches);
echo $cadena;
echo "<br>";
$puestos="Becario-programador-analista-jefe de proyecto";
$nuevo_array= explode("-", $puestos);
print_r($nuevo_array);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Array en PHP</h2>
        <?php
       $marcasCoches= array_column($cochesMulti2,'marca');
       echo $marcasCoches;
        ?>
    </body>
</html>
