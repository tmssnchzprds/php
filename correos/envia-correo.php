<?php
require ("class.phpgmailer.php");
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$consulta=$_POST["consulta"];
$body="contenido correo";
$objCorreo=new PHPGMailer();
$objCorreo->Username="tmssnchzprds";
$objCorreo->Password="";
$objCorreo->From=$email;
$objCorreo->Subject="Asunto";
$objCorreo->Body=$body;
$objCorreo->addAddress("tmssnchzprds@hotmail.com");
$objCorreo->send();
echo "Correo lanzado";
?>