<?php
include 'Conexion.php';
?>

<?php

$dia = $_POST["dia"];
$tipoturno = $_POST["tipoturno"];
$entrada = $_POST["entrada"];
$salida = $_POST["salida"];
$descanso = $_POST["descanso"];
$regresoD = $_POST["regresoD"];



$sql = "INSERT INTO hora_trabajo(dia, tipoturno, entrada, salida, descanso, regresoD) VALUES ('$dia', '$tipoturno', '$entrada','$salida', '$descanso', '$regresoD')";

$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
	echo '<script>
	alert("FALLO EL REGISTRO DE HORARIO");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("REGISTRO DE HORARIO CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);
?>


