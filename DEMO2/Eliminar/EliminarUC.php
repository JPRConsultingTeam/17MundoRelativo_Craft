<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['id'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("DELETE from empleados where id='$id'");	
	echo "<script> alert('Desactivado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../UsuarioC.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../UsuarioC.php'>";
	}		 

?>