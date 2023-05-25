<?php
session_start();
/*if (isset($SESSION["nombre"])){
echo "Bienvenido ".$SESSION["nombre"]." veo que estas por aqui.";
}else{echo "su sesion a expirado";}*/ 
if (time()>$SESSION["momento"]+20)
{
    echo "Su sesion a expirado, tiene 20 segundos";
}
else{
    echo "Bienvenido ".$SESSION["nombre"]." veo que estas por aqui.";

}
?>

<a href="destruir-sesion.php">Destruir la sesion</a>