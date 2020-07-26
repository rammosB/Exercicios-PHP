<?php
$nome=$_POST['nome'];
$sal=$_POST['salario'];
$vendas=$_POST['vendas'];

$salfinal = $sal + ($vendas * 0.15);

$sal = number_format($sal, 2, ',', '');
$salfinal = number_format($salfinal, 2, ',', '');

echo "Vendedor(a): $nome<br><br>Salário Fixo: R$ $sal<br><br>Salário Final com Comissão de 15%: R$ $salfinal";

?>


