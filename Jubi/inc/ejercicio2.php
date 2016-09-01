<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$altura_cuadrada = $altura * $altura;

$imc = $peso / $altura_cuadrada;

echo "El IMC es: ", $imc;
 ?>