<?php 
session_start();
if($_SESSION['logueado']!="SI")
{
	header("location:login.php?msj=DEBE LOGUEARSE PRIMERO");
	exit();
}
?>
