<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idhora'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("delete from hora_trabajo where idhora='$id'");	
	echo "<script> alert('Desactivado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Horarios.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Horarios.php'>";
	}		 

?>