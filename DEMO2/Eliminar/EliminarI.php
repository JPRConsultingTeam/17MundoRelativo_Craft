<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idincidencia'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("DELETE from incidencias where idincidencia='$id'");	
	echo "<script> alert('Desactivado Con Exito'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Incidencias.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Incidencias.php'>";
	}		 

?>