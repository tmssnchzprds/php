<?php
if (isset($_COOKIE["galleta"]))
{
echo "Bienvenido de nuevo <b>".$_COOKIE["galleta"]."</b>,gracias por volver";
}else {echo "Eres nuevo cliente";}
?>