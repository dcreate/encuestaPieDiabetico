<?php
	if($_POST['confirmado']==1)
	{
		include "conexion.php";
		conectar();
		$con=mysql_query("TRUNCATE TABLE encuesta") or die ("error: ".mysql_error());
		desconectar();
		if($con)
		{
			header("location:vaciar.php?msj=TABLA BORRADA CON EXITO");
			exit();
		}
		else
		{
			header("location:vaciar.php?msj=OCURRIO UN PROBLEMA AL INTENTAR VACIAR LA TABLA");
			exit();
		}
	}
	else
	{
		header("location:vaciar.php?msj=ACCION NO CONFIRMADA");
		exit();
	}


?>
