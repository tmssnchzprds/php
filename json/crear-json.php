<?php
$datos_perro=array("nombre"=>"toby","peso"=>25,"edad"=>10);
$datos_perro_json= json_encode($datos_perro);
echo $datos_perro_json;
    // falta  
$json_origen= '{"nombre":"pepe",edad":25}';
$obj_json= json_decode($json_origen);
echo "<br>";
echo $obj_json->nombre;
echo "<br>";
echo $obj_json->edad;
$array_json=json_decode($json_origen,true);
echo "<br>";
echo $obj_json["nombre"];
echo "<br>";
echo $obj_json["edad"];
?>