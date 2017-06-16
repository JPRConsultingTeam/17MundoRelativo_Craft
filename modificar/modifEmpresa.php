<?php 
include '../Conexion.php';

 ?>

 <?php
 
 $idempresa=$_REQUEST['idempresa'];


$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$calle=$_POST['calle'];
$cp=$_POST['cp'];
$rfc=$_POST['rfc'];


$sql= "UPDATE empresa SET nombre='$nombre', telefono='$telefono', correo='$correo', pais='$pais', estado='$estado', municipio='$municipio', calle='$calle', cp='$cp', rfc='$rfc' WHERE idempresa='$idempresa'";


$resultado = $mysqli->query($sql);
if (!$resultado){
	echo '<script>
	alert("ERROR AL MODIFICAR EMPRESA");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("EMPRESA MODIFICADA CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);






 ?>