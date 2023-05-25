<?php
/**
 *Esta funcion retorna el inporte con el iva sumado
 *@author Tomas Sánchez
 *@param float $importe Description
 *@param int $iva Description
 *@return float $iva_calculado Description
 **/
function calcular_iva($importe,$iva=21)
{
    $total=($importe)+(($importe*$iva/100));
    $total=number_format($total,2,",",".");
    return $total;
}
echo calcular_iva(4000000.50,21.5);
