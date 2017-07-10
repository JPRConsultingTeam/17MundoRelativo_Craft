<?php

include "../Funciones/Conexion.php";
$mysqli = inicio();

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = date('d/m/y');  
$horaS = date('H:i:s');


$sql = "INSERT INTO chequeo
(nombre,email,fecha,horaS)
VALUES ('$nombre','$email','$fecha','$horaS');";

$query = mysqli_query($mysqli,$sql);
if ($query){
echo "<script>alert(\"Exito al registrar.\"); </script>";
echo "<script>location.href='../Usuario.php'</script>";
}else{
echo "<script>alert(\"Error al registrar\"); </script>";
echo "<script>location.href='../Usuario.php'</script>";
}