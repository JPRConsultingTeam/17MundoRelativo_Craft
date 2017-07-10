<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idempresa'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("delete from empresa where idempresa='$id'");	
	echo "<script> alert('Desactivado Con Exito'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Empresas.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Empresas.php'>";
	}		 

?>