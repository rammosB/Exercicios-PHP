<?php
$nome=$_POST['aluno'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

$media = ($n1 + $n2 + $n3) / 3;
$media = number_format($media, 1, '.', '');

echo "Aluno(a): $nome<br><br>Média Aritmética: $media";

?>