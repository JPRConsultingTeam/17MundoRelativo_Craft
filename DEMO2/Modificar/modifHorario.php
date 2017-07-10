<?php 
include ("../Funciones/Conexion.php");
$mysqli=inicio();

 ?>

 <?php
 
 $idhora=$_REQUEST['idhora'];

$dia = $_POST["dia"];
$tipoturno = $_POST["tipoturno"];
$entrada = $_POST["entrada"];
$descanso = $_POST["descanso"];
$regresoD = $_POST["regresoD"];
$salida = $_POST["salida"];

$sql="UPDATE hora_trabajo SET dia='$dia', tipoturno='$tipoturno', entrada='$entrada', descanso='$descanso', regresoD='$regresoD', salida='$salida' WHERE idhora='$idhora'";

$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
	echo '<script>
	alert("FALLO EL MODIFICACIÓN DE HORARIO");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("MODIFICACIÓN DE HORARIO CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);

 ?>