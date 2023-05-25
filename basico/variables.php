<?php
//variables
$nombrePerro='toby';
$edad=5;
$peso=10.5;
$millonario=true;
$vectores=array();
var_dump($nombrePerro);
    class objeto{};
$miObjeto=new objeto();
$valor=null;
//constantes
define("PI",3.1416);
?>

<h2>Ahora a pintar las variables</h2>
<?php
echo 'El perro se llama: '.$nombrePerro.' y tiene '.$edad.' años y pesa '.$peso.' kg';
?>
<h2>Idem</h2>
El perro se llama: <?php echo $nombrePerro; ?> y tiene <?php echo $edad; ?> años y pesa <?php echo $peso; ?> kg

<form>
    <input type="text" name="caja" value="<?php echo $peso;?>">
    <?php echo '<input type="text" name="caja" value="'.$peso.'">'; ?>
    <?php echo "<input type=\"text\" name=\"caja\" value=\"".$peso."\">"; ?>
</form>
<script type="text/javascript">
    var pesoPerro=<?php echo $peso;?>;
    alert(pesoPerro);
</script>
<?php echo "la constante vale ".PI;?>
