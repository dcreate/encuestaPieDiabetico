<?php
if(isset($_POST['enviar']))
{
	include "conexion.php";
	$edad=$_POST['edad'];
	$sexo=$_POST['sexo'];
	$fecha=$_POST['fecha'];
	if(!empty($_POST['edad']) || $_POST['sexo']!=0 || !empty($_POST['fecha']))
	{
		$cadena="select *from encuesta where edad='$edad' or sexo='$sexo' or fecha='$fecha' order by nombre";
	}
	else
	{
		$cadena="select *from encuesta order by nombre";
	}
	conectar();
	$query=mysql_query($cadena) or die ("error en consulta: ".mysql_error());
	$cont=mysql_num_rows($query);
	desconectar();
	if($cont>0)
	{
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
	<link href="estilo.css" rel="stylesheet" type="text/css" media="screen" /> 
	<link href="imprimir.css" rel="stylesheet" type="text/css" media="print" /> 
	<script src="prefixfree.js"></script>
</head>
<body>
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
			<li><a href="contenido.php">REGRESAR</a></li>
		</ul>
	</nav>
	<section id="contenido">
		<article class="item">
			<h3>RESULTADOS BUSQUEDA:</h3>
			<table align="center" border="3">
				<tr>
					<td>NOMBRE</td><td>EDAD</td><td>SEXO</td><td>MEDIDA</td><td>AÑOS DE PADECIMIENTO</td><td>OTRO PADECIMIENTO</td><td>FECHA</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td><td>OBSERVACION</td>
				</tr>
				<?php
				while($con=mysql_fetch_array($query))
				{
					$aux=$con['sexo'];
					if($aux==1)
					{
						$auxi="HOMBRE";
					}
					elseif ($aux==2) 
					{
						$auxi="MUJER";
					}
					else
					{
						$auxi="";
					}
					echo '<tr>';
					echo '<td>'.strtoupper($con['nombre']).'</td>';
					echo '<td>'.strtoupper($con['edad']).'</td>';
					echo '<td>'.strtoupper($auxi).'</td>';
					echo '<td>'.strtoupper($con['medida']).'</td>';
					echo '<td>'.strtoupper($con['anos_pade']).'</td>';
					echo '<td>'.strtoupper($con['otro_pade']).'</td>';
					echo '<td>'.strtoupper($con['fecha']).'</td>';
					for($i=1;$i<=20;$i++)
					{
						$auxq=$con['preg'.$i];
						if(($auxq)=="1"){echo '<td>X</td>';}else{echo '<td></td>';}
					}
					echo '<td>'.strtoupper($con['nivel']).'</td>';
					echo '</tr>';
				}
				?>
			</table>
		</article>
		<article>
			<form method="post" action="xls.php" class="formulario1" id="formulario1">
				<input type="hidden" value="<?php echo $cadena;?>" name="cadenas" />
				<input type="submit" name="enviar" value="EXCEL" />
				<input type="button" name="imprimir" value="IMPRIMIR" onclick="window.print(); return false;" />
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
<?php
	}
	else
	{
		header("location:contenido.php?msj=NO EXISTE NINGUN RESULTADO");
		exit();
	}
}
else
{
	header("location:contenido.php?msj=DEBE SELECCIONAR QUE DESEA");
	exit();
}
?>
