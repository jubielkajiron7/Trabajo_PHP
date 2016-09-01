<?php 

$monto = $_POST['cantidad'];
$divisa = $_POST['divisa'];
$precio = 29;
$resultado;
if ($divisa == 1) 
{
	$resultado = $monto * $precio;
	echo "EL resultado es: ", $resultado, " Cordobas";
}
else
{
	if ($divisa ==2) 
	{
		$resultado = $monto / $precio;
		echo "El resultado es: ", $resultado, " Dolares";
	}
}

 ?>