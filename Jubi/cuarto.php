<!DOCTYPE html>
<html>
<head>
	<meta >
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	<title>Jubielka</title>
</head>
<body>

<header>
	<nav>
	<h3>Trabajo PHP</h3>
	<ul>
		<li><a href="index.php">Primero</a></li>
		<li><a href="segundo.php">Segundo</a></li>
		<li><a href="tercero.php">Tercero</a></li>
		<li><a href="cuarto.php">Cuarto</a></li>
	</ul>
	</nav>
</header>
<br>
<br>
	<br>
	<br>
<section id="principal">
	<article id="uno"></article>
	<article id="dos">
		<form action="inc/ejercicio4.php" method="post">
		<label>Ingrese la distancia</label>
		<br>
		<br>
	<input type="text" name="distancia" placeholder="Ingrese la distancia" id="distancia" required> 
	<br>
	<br>
	<select name="unidad">
		
		<option value="1">Km </option>
		<option value="2">Mt</option>
		<option value="3">Pg</option>
		<option value="4">Cm</option>

	</select>
	
	<br>
	<br>
	
	<button type="submit">Enviar</button>
</form>

	</article>
	<article id="tres"></article>
</section>


</body>
</html>