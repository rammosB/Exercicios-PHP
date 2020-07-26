<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];

echo "Valores Digitados:<br>Variável A: $n1<br>Variável B: $n2<br><br>";

$aux = $n1;
$n1 = $n2;
$n2 = $aux;

echo "Valores Trocados:<br>Variável A: $n1<br>Variável B: $n2";

?>
