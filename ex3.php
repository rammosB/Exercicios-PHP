<?php
$km=$_POST['km'];
$litros=$_POST['litros'];

$consumo = $km / $litros;

$consumo = number_format($consumo, 2, '.', '');

echo "O Consumo Médio do Automóvel é $consumo km/l";

?>
