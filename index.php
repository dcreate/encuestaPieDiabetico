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
			<form id="formulario" method="post" action="procesar_encuesta.php">
				<label for="nombre">Nombre: </label> <input type="text" name="nombre" placeholder="Introduzca su nombre completo" required />
				<label for="edad">Edad: </label> <input type="number" name="edad" min="1" max="100" placeholder="Introduzca su edad" required />
				<label for="sexo">Sexo: </label> 
					<select name="sexo">
						<option value="0">Elige..</option>
						<option value="1">HOMBRE</option>
						<option value="2">MUJER</option>
					</select>
				<label for="otro">Otro: </label><input type="text" name="otro" placeholder="INTRODUCCIR" />
				<label for="an">Años de padecimiento: </label><input type="number" name="an" min="1" max="100" placeholder="Años de padecer diabetes" />
				<label for="glucosa">Glicemia capilar: </label><input type="number" name="glucosa" min="1" max="500" placeholder="INTRODUCCIR" />
				<HR width=50% align="center">
				<label for="preg1">1.-¿Ha , notado cambios en la coloración de sus pies?</label><input type="radio" name="preg1" value="1">SI <input type="radio" name="preg1" value="0" checked>NO
				<label for="preg2">2.-¿sus pies se sienten constantemente fríos?</label><input type="radio" name="preg2" value="1">SI <input type="radio" name="preg2" value="0" checked>NO
				<label for="preg3">3.-¿Ha notado que sus pies son muy calientes en la región plantar?</label><input type="radio" name="preg3" value="1">SI <input type="radio" name="preg3" value="0" checked>NO
				<label for="preg4">4.-¿Sus pies son muy húmedos y presentan mal olor? </label><input type="radio" name="preg4" value="1">SI <input type="radio" name="preg4" value="0" checked>NO
				<label for="preg5">5.-¿constantemente sufre de calambres?</label><input type="radio" name="preg5" value="1">SI <input type="radio" name="preg5" value="0" checked>NO
				<label for="preg6">6.-¿La piel de sus pies es brillante, delgada y fría?</label><input type="radio" name="preg6" value="1">SI <input type="radio" name="preg6" value="0" checked>NO
				<label for="preg7">7.-¿Constantemente presenta dolor, pesadez, hormigueo y comezón?</label><input type="radio" name="preg7" value="1">SI <input type="radio" name="preg7" value="0" checked>NO
				<label for="preg8">8.-¿Presenta algún tipo de callosidad en la región plantar de sus pies?</label><input type="radio" name="preg8" value="1">SI <input type="radio" name="preg8" value="0" checked>NO
				<label for="preg9">9.-¿Utiliza zapato de punta muy agosta en su vida diaria?</label><input type="radio" name="preg9" value="1">SI <input type="radio" name="preg9" value="0" checked>NO
				<label for="preg10">10.-¿Tiene zonas muy resecas o grietas en la región plantar de sus pies?</label><input type="radio" name="preg10" value="1">SI <input type="radio" name="preg10" value="0" checked>NO
				<label for="preg11">11.-¿Las uñas de sus pies son amarillentas y quebradizas?</label><input type="radio" name="preg11" value="1">SI <input type="radio" name="preg11" value="0" checked>NO
				<label for="preg12">12.-¿Constantemente sufre de uñas enterradas?</label><input type="radio" name="preg12" value="1"> SI <input type="radio" name="preg12" value="0" checked>NO
				<label for="preg13">13.-¿Los contornos de sus uñas presentan dolor, inflamación y enrojecimiento en forma constante? </label><input type="radio" name="preg13" value="1"> SI<input type="radio" name="preg13" value="0" checked>NO
				<label for="preg14">14.-¿Sus uñas son en forma de garra o están deformes?</label><input type="radio" name="preg14" value="1">SI <input type="radio" name="preg14" value="0" checked>NO
				<label for="preg15">15.-¿Presenta ámpulas en sus pies de contenido seroso?</label><input type="radio" name="preg15" value="1">SI <input type="radio" name="preg15" value="0"checked>NO
				<label for="preg16">16.-¿Hay formación de escamas y comezón intensa entre sus dedos?</label><input type="radio" name="preg16" value="1">SI <input type="radio" name="preg16" value="0" checked>NO
				<label for="preg17">17.-¿Tiene deformación de sus dedos  pulgares en alguno de sus pies?</label><input type="radio" name="preg17" value="1">SI <input type="radio" name="preg17" value="0" checked>NO
				<label for="preg18">18.-¿Alguno de sus dedos de los pies se encuentra encimado?</label><input type="radio" name="preg18" value="1">SI <input type="radio" name="preg18" value="0" checked>NO
				<label for="preg19">19.-¿Presenta hinchazón de sus pies en alguna hora determinada del día?</label><input type="radio" name="preg19" value="1">SI<input type="radio" name="preg19" value="0" checked>NO
				<label for="preg20">20.-¿Ha notado que sus dedos son alargados y cabezones?</label><input type="radio" name="preg20" value="1">SI <input type="radio" name="preg20" value="0" checked>NO
				<br>
				<input type="submit" value="Guardar" name="guardar">
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
