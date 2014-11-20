<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Encuesta para tesis, Pie Diabeico" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1 /">
	<title>ENCUESTA PIE DIABETICO</title>
	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Istok+Web|Esteban|Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="normalize.css" />
	<link rel="stylesheet" href="estilo.css" />
	<script src="prefixfree.js"></script>
</head>
<body>
	<header>
		<figure id="logo">
			<img src="image/logo.jpg" />
		</figure>
		<h1>Encuesta Sobre Pie Diabetico</h1>
		<figure id="avatar">
			<img src="image/pie.jpg" />
		</figure>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">ENCUESTA</a></li>
			<li><a href="contenido.php">RESULTADOS</a></li>
		</ul>
	</nav>
	<?php
	if(!empty($_GET['msj']))
	{
	?>
		<aside>
			<?php echo "<h4>".$_GET['msj']."</h4>";?>
		</aside>
	<?php
	}
	?>
	<section id="contenido">
		<article class="item">
			<h3>Busqueda de resultados:</h3>
			<form id="formulario" class="formulario" method="post" action="buscar.php">
				<label for="edad">Edad: </label><input type="number" name="edad" min="1" max="100" placeholder="PONER EDAD" />
				<label for="sexo">Sexo: </label> 
					<select name="sexo">
						<option value="0">Elige..</option>
						<option value="1">HOMBRE</option>
						<option value="2">MUJER</option>
					</select>
				<label for="">Fecha de Encuesta: </label><input type="date" name="fecha" placeholder="SELECCIONE LA FECHA" /><br>
				<input type="submit" name="enviar" value="BUSCAR" />
			</form>
		</article>
	</section>
	<footer>
		<p>
			<strong>Encuesta para obtener datos sobre pie Diabetico</strong>
		</p>
		<p>
			Creado por @dcreate
		</p>
	</footer>
</body>
</html>
