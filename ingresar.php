<?php 
include "conexion.php"; 
if(isset($_POST['enviar']))
{
	if(!empty($_POST['user']) && !empty($_POST['pass']))
	{
		conectar(); 
    	$nombre=strip_tags(mysql_real_escape_string($_POST['user'])); 
   		$pass=md5(strip_tags(mysql_real_escape_string($_POST['pass']))); 
    	$b=mysql_query("select *from useres where user='$nombre'") or die ("error".mysql_error()); 
	    desconectar(); 
	    $existe=mysql_num_rows($b); 
	    if($existe<=0)
	    {
	    	conectar();
	    	$con=mysql_query("INSERT INTO useres(id_user,user,password)VALUE('','$nombre','$pass')") or die("error: ".mysql_error());
	    	desconectar();
	    	if($con)
	    	{
	    		header("location:ingreso.php?msj=INGRESADO CON EXITO");
	    		exit();
	    	}
	    	else
	    	{
	    		header("location:ingreso.php?msj=OCURRIO UN PROBLEMA, VUELVA A INTENTARLO");
	    		exit();
	    	}
	    }
	    else
	    {
	    	header("location:ingreso.php?msj=YA EXISTE USUARIO"); 
	    	exit(); 
	    }
	} 
	else
	{
		//si no hay valores en los inputs 
		if(empty($_POST['nombre']))
		{ 
			$user="*FALTA NOMBRE"; 
		}
		if(empty($_POST['pass']))
		{
			$pas="*FALTA PASSWORD"; 
		}
		header("location:ingreso.php?msj=LLENAR TODOS LOS DATOS&user=".$user."&pas=".$pas."&usuario=".$_POST['nombre']."&password=".$_POST['pass']); 
		exit();
	} 
} 
?>
