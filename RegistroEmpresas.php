<?php
include 'conexion.php';
?>

<?php

$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$calle=$_POST['calle'];
$cp=$_POST['cp'];
$rfc=$_POST['rfc'];


$sql="INSERT INTO empresa(nombre, telefono, correo, pais, estado, municipio, calle, cp, rfc) VALUES ('$nombre', '$telefono', '$correo', '$pais', '$estado', '$municipio', '$calle', '$cp', '$rfc')";

$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
	echo '<script>
	alert("ERROR AL REGISTRAR EMPRESA");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("EMPRESA REGISTRADA CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);


?>