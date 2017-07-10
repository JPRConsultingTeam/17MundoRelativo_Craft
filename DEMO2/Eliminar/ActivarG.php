<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idgrupo'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("UPDATE grupo SET activo='1' where idgrupo='$id'");	
	echo "<script> alert('Activado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/GpoInactivo.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud//Grupos.php'>";
	}		 

?>



