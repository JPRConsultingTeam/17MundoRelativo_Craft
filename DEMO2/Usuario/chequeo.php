<?php

include "../Funciones/Conexion.php";
$mysqli = inicio();

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = date('d/m/y');  
$hora = date('H:i:s');
$latitud = $_POST["latitud"];
$longitud = $_POST["longitud"];


$sql = "INSERT INTO chequeo
(nombre,email,fecha,hora,latitud,longitud)
VALUES ('$nombre','$email','$fecha','$hora','$latitud','$longitud');";

$query = mysqli_query($mysqli,$sql);
if ($query){
echo "<script>alert(\"Exito al registrar.\"); </script>";
echo "<script>location.href='../Usuario.php'</script>";
}else{
echo "<script>alert(\"Error al registrar\"); </script>";
echo "<script>location.href='../Usuario.php'</script>";
}