<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "12056", "reloj1");	
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$direccion =  $_POST['direccion'];	

	$sql = $mysqli->query("update localizar set nombre='$nombre', direccion='$direccion' where id=$id");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=Localizacion.php">