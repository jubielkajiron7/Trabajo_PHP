<?php 

$Horas = $_POST['horas'];
$pago = 100;
$general = $pago * $Horas;
$ir = $general * 0.06;
$inss = $general * 0.15;

$total = $general - $inss - $ir;

echo "El sueldo toal es:", $total;

 ?>