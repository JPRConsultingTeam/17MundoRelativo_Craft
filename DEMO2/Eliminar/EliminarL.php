<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idlugar'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");			
	$sql = $mysqli->query("DELETE from lugares where idlugar='$id'");	
	echo "<script> alert('Desactivado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Localizacion.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/Localizacion.php'>";
	}		 

?>