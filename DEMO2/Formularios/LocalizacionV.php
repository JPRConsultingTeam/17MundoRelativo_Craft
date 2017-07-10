<?php
include("../Funciones/Conexion.php");
$mysqli=inicio();


include("../Geolocalizar.php");

$nombre = $_POST["nombre"];

$direccion = $_POST["direccion"];


$fecha = date('d/m/y');  
$hora = date('H:i:s');

$return = Maps::buscaLugar($direccion);
$lat = $return[0];
$lng = $return[1];

$sql = "INSERT INTO lugares
(nombrelugar,direccionlugar,latlugar,lnglugar,fecha,hora)
VALUES ('$nombre','$direccion','$lat','$lng','$fecha','$hora');";

$query = mysqli_query($mysqli,$sql);
if ($query){
echo "<script>alert(\"Exito al registrar.\"); </script>";
echo "<script>location.href='../Crud/Localizacion.php'</script>";
}else{
echo "<script>alert(\"Error al registrar\"); </script>";
echo "<script>location.href='../Crud/Localizacion.php'</script>";
}

?>