<?php
if(isset($_POST['guardar']))
{
	if (!empty($_POST['nombre']) && !empty($_POST['edad']) && ($_POST['sexo']!=0) && !empty($_POST['otro']) && !empty($_POST['an']) && !empty($_POST['glucosa'])) 
	{
		include "conexion.php";
		$nombre=$_POST['nombre'];
		$edad=$_POST['edad'];
		$sexo=$_POST['sexo'];
		$otro=$_POST['otro'];
		$an=$_POST['an'];
		$glucosa=$_POST['glucosa'];
		$res=0;
		for ($i=1; $i<=20; $i++) 
		{ 
			$preg[$i]=$_POST['preg'.$i];
			$res=$res+$preg[$i];
		}
		if($res>=0 && $res<=5)
		{
			$nivel="Leve";
		}
		elseif ($res>=6 && $res<=10)
		{
			$nivel="Moderado";
		}
		elseif ($res>=11 && $res<=20)
		{
			$nivel="Severo";
		}
		else
		{
			$nivel="Mal";	
		}
		$fecha=date("Y-m-d");
		conectar();
		$query=mysql_query("INSERT INTO encuesta(id_encuesta,nombre,edad,sexo,medida,anos_pade,otro_pade,fecha,preg1,preg2,preg3,preg4,preg5,preg6,preg7,preg8,preg9,preg10,preg11,preg12,preg13,preg14,preg15,preg16,preg17,preg18,preg19,preg20,nivel)VALUE('','$nombre','$edad','$sexo','$glucosa','$an','$otro','$fecha','$preg[1]','$preg[2]','$preg[3]','$preg[4]','$preg[5]','$preg[6]','$preg[7]','$preg[8]','$preg[9]','$preg[10]','$preg[11]','$preg[12]','$preg[13]','$preg[14]','$preg[15]','$preg[16]','$preg[17]','$preg[18]','$preg[19]','$preg[20]','$nivel')") or die("error: ".mysql_error());
		desconectar();
		if($query)
		{
			header("location:index.php?msj=GUARDADO CON EXITO");
			exit();	
		}
		else
		{
			header("location:index.php?msj=OCURRIO UN ERROR AL GUARDAR VUELVA A INTENTARLO");
			exit();
		}

	}
	else
	{
		header("location:index.php?msj=TE FALTAN DATOS, FAVOR DE LLENAR TODOS");
		exit();		
	}
	
}
else
{
	header("location:index.php?msj=DEBE LLENAR TODA LA ENCUESTA");
	exit();
}
?>
