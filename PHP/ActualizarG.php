<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "12056", "reloj1");	
	
	$nombre = $_POST['nombre'];
	$descripcion =  $_POST['descripcion'];
	$activo =  $_POST['activo'];	

	$sql = $mysqli->query("update grupo set nombre='$nombre', descripcion=$descripcion, activo='$activo' where nombre=$nombre");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=Grupos.php">