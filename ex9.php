<?php
$valor=$_POST['valor'];

$rend = $valor * 0.007;
$total = $valor + $rend;

$valor = number_format($valor, 2, '.', '');
$rend = number_format($rend, 2, '.', '');
$total = number_format($total, 2, '.', '');

echo "Valor Investido R$ $valor<br><br>Rendimento R$ $rend<br><br>Total com Rendimento R$ $total";

?>
