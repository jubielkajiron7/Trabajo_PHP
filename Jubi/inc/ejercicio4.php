<?php 

$distancia = $_POST['distancia'];
$medida = $_POST['unidad'];
$km;
$mt;
$pg;
$cm;
if ($medida == 1) 
{
	$km = $distancia * 1;
	$mt = $distancia * 1000;
	$pg = $distancia * 39370;
	$cm = $distancia * 100000;

	echo "Distancia en Km: ", $km;
	echo "<br>";
	echo "Distancia en Mt: ", $mt;
	echo "<br>";
	echo "Distancia en Pg: ",  $pg;
	echo "<br>";
	echo "Distancia en Cm: ", $cm;
}

if ($medida == 2) 
{
	$km = $distancia * 0.001;
	$mt = $distancia * 1;
	$pg = $distancia * 39.3701;
	$cm = $distancia * 100;

	echo "Distancia en Km: ", $km;
	echo "<br>";
	echo "Distancia en Mt: ", $mt;
	echo "<br>";
	echo "Distancia en Pg: ",  $pg;
	echo "<br>";
	echo "Distancia en Cm: ", $cm;
}

if ($medida == 3) 
{
	$km = $distancia * 0.000025;
	$mt = $distancia * 0.0254;
	$pg = $distancia * 1;
	$cm = $distancia * 2.5400013716000003;

	echo "Distancia en Km: ", $km;
	echo "<br>";
	echo "Distancia en Mt: ", $mt;
	echo "<br>";
	echo "Distancia en Pg: ",  $pg;
	echo "<br>";
	echo "Distancia en Cm: ", $cm;
}

if ($medida == 4) 
{
	$km = $distancia * 0.00001;
	$mt = $distancia * 0.01;
	$pg = $distancia * 0.393701;
	$cm = $distancia * 1;

	echo "Distancia en Km: ", $km;
	echo "<br>";
	echo "Distancia en Mt: ", $mt;
	echo "<br>";
	echo "Distancia en Pg: ",  $pg;
	echo "<br>";
	echo "Distancia en Cm: ", $cm;
}

 ?>