<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idusuario'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("UPDATE usuarios set habilitado='1' where idusuario='$id'");	

	echo "<script> alert('Activado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Crud/UsuarioInactivo.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../CrudUsuarios.php'>";
	}		 

?>



