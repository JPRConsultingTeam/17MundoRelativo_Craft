<?php

//AQUI SE ESTA HACIENDO LA CONEXION A LA BASE DE DATOS

$host="localhost";
$user="root";
$password="12056";
$dbname="reloj1"; //NOMBRE DE LA BASE DE DATOS

$mysqli = new mysqli($host, $user, $password, $dbname);
	if ($mysqli->connect_error){
			//echo "errorrrrr";

		}

		//else echo "esto ya funciona ajjajaj";



?>