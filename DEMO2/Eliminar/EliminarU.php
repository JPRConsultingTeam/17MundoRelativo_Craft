<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idusuario'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("UPDATE usuarios set habilitado='0' where idusuario='$id'");	

	echo "<script> alert('Desactivado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/CrudUsuarios.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../CrudUsuarios.php'>";
	}		 

?>
