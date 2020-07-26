<?php
$cota=$_POST['cota'];
$dolar=$_POST['valor'];

$reais = $cota * $dolar;

$dolar = number_format($dolar, 2, '.', '');
$reais = number_format($reais, 2, '.', '');

echo "O valor US$ $dolar é igual a R$ $reais";

?>


