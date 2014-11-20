<?php
require "valida.php";
?>
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
			<li><a href="vaciar.php">VACIAR</a></li>
			<li><a href="ingreso.php">USERS</a></li>
			<li><a href="salir.php">SALIR</a></li>
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
			<h2>REGISTRO USER</h2>
			<form id="formulario" class="formulario" method="post" action="ingresar.php">
				<label for="user">USUARIO: </label>
				<input type="text" name="user"  placerholder="NOMBRE USUARIO" />
				<?php if(!empty($_GET['user'])){echo "<h4>". $_GET['user']."</h4>";}?>
				<label for="pass">PASSWORD:</label>
				<input type="password" name="pass" /><br>
				<?php if(!empty($_GET['pas'])){echo "<h4>". $_GET['pas']."</h4>";}?>
				<input type="submit" name="enviar" value="REGISTRAR">
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
