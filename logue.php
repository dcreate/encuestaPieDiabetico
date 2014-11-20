<?php 
session_start(); 
include "conexion.php"; 
if(isset($_POST['enviar']))
{
	if(!empty($_POST['user']) && !empty($_POST['pass']))
	{
		conectar(); 
    	$nombre=strip_tags(mysql_real_escape_string($_POST['user'])); 
   		$pass=md5(strip_tags(mysql_real_escape_string($_POST['pass']))); 
    	$b=mysql_query("select *from useres where user='$nombre'") or die ("error".mysql_error()); 
	    $existe=mysql_num_rows($b); 
	    $c=mysql_fetch_array($b); 
	    desconectar(); 
	    if($existe>0)
	    {
	    	$_SESSION['usuario']=$nombre; 
	    	if($pass==$c['password'] && !empty($pass))
	    	{
	    		$_SESSION['logueado']="SI"; 
	    		header("location:vaciar.php?msj=LOGUEADO CON EXITO");
	    		exit();
	    	}
	    	else
	    	{
	    		header("location:login.php?msj=EL PASSWORD ESTA MAL"); 
	    		exit(); 
	    	}
	    }
	    else
	    {
	    	header("location:login.php?msj=NO EXISTE USUARIO"); 
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
		header("location:login.php?msj=LLENAR TODOS LOS DATOS&user=".$user."&pas=".$pas."&usuario=".$_POST['nombre']."&password=".$_POST['pass']); 
		exit();
	} 
} 
?>
