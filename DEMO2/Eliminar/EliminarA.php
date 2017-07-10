<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idausencia'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("delete from ausencia where idausencia='$id'");	
	echo "<script> alert('Desactivado Con Exito'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Ausencias.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Ausencias.php'>";
	}		 

?>