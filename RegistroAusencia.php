<?php
include 'Conexion.php';

?>

<?php

$idusuario=$_POST['idusuario'];
$ausencia=$_POST['ausencia'];
$fechainicio=$_POST['fechainicio'];
$fechafinal=$_POST['fechafinal'];

$sql="INSERT INTO ausencia (idusuario, ausencia, fechainicio, fechafinal) VALUES ('$idusuario','$ausencia','$fechainicio','$fechafinal')";




$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
	echo '<script>
	alert("ERROR AL REGISTRAR AUSENCIA");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("AUSENCIA REGISTRADA CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);


?>

