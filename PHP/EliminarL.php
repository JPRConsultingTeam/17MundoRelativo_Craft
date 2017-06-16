<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['cod_Cliente'];
	$mysqli = new mysqli("localhost", "root", "12056", "reloj1");			
	$sql = $mysqli->query("delete from lugares where cod_Cliente='$id'");	
	echo "<script> alert('Desactivado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Localizacion.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Localizacion.php'>";
	}		 

?>