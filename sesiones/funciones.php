<?php
function loguear($user,$pass)
{
    if ($user=='juan' && $pass=='juan')
{
    //ENTRAMOS EN SESSION
    
    $_SESSION["nombrecompleto"]="Juan Bartolo";
    $_SESSION["cod_usuario"]=2;
     return true;        
} else {
    $_SESSION["error"]="Usuario no existe";
    return false;
}
}
?>