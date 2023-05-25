<!DOCTYPE html>
<?php
$id=$_GET["id"];

$provincia=array(6=>"Badajoz",8=>"Barcelona",11=>"Cadiz",28=>"Madrid",29=>"Malaga");
if(isset($_GET["nombre"]))
{
    $nombre=$_GET["nombre"];
}else{
    $nombre=$provincia[$id];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Provincia escogida</h2>
        <?php
        echo 'El codigo de la provincia seleccionada es "'.$id.'" que corresponde con "'.$nombre.'".';
        ?>
    </body>
</html>
