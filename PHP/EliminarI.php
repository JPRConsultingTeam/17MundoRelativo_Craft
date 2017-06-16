<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idincidencia'];
	$mysqli = new mysqli("localhost", "root", "12056", "reloj1");		
	$sql = $mysqli->query("delete from incidencias where idincidencia='$id'");	
	echo "<script> alert('Desactivado Con Exito'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Incidencias.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Incidencias.php'>";
	}		 

?>