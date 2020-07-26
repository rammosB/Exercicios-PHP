<?php
$valor=$_POST['valor'];

$prest = $valor / 5;

$prest = number_format($prest, 2, '.', '');
$valor = number_format($valor, 2, '.', '');

echo "Valor total da compra R$ $valor<br><br>Prestações:<br>5 vezes de R$ $prest";

?>