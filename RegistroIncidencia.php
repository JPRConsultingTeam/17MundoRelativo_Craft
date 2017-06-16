<?php

include 'Conexion.php';
?>

<?php
$idusuario=$_POST['idusuario'];
$tipoincidencia=$_POST['tipoincidencia'];
$fechainicial=$_POST['fechainicial'];
$fechafinal=$_POST['fechafinal'];
$documento = (isset($_FILES['documento'])) ? $_FILES['documento'] : null;

if ($documento) {
      $ruta_destino_archivo = "documentos/{$documento['name']}";
      $archivo_ok = move_uploaded_file($documento['tmp_name'], $ruta_destino_archivo);
   }

$sql="INSERT INTO incidencias(idusuario, tipoincidencia, fechainicial, fechafinal,documento) VALUES ('$idusuario','$tipoincidencia','$fechainicial','$fechafinal','$documento')";

$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
	echo '<script>
	alert("ERROR AL REGISTRAR INCIDENCIA");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("INCIDENCIA REGISTRADA CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);


?>