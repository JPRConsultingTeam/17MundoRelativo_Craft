<?php

session_start();
if(isset($_SESSION['nombre']))
{
	$id = $_GET['idgrupo'];
	$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("delete from grupo where idgrupo='$id'");	
	echo "<script> alert('Desactivado'); </script>";
	echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Grupos.php'>";
}
else
	{
			echo "<script language='javascript'> alert('No Tiene Permisos'); </script>";
			echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=../Grupos.php'>";
	}		 

?>