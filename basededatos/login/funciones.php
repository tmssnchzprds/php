<?php
function loguear($user,$pass)
{
    $sql="SELECT * FROM usuarios WHERE login like'".$user."'AND password like'".$pass."';";
$resultado=mysql_query($sql);
$filas=mysql_num_rows($resultado);
    if ($filas!=0)
{
    //ENTRAMOS EN SESSION
    $registro=mysql_fetch_array($resultado);
    $_SESSION["nombrecompleto"]=$registro["nombrecompleto"];
    $_SESSION["cod_perfil"]=$registro["cod_perfil"];
    $_SESSION["cod_usuario"]=$registro["cod_usuario"];
     return true;        
} else {
    $_SESSION["error"]="Usuario no existe";
    return false;
}
}
?>