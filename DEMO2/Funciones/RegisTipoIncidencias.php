<?php



if(isset($_POST['btn-upload']))
  {
$nombre=$_POST['nombre'];
 

$sql="INSERT INTO alta_incidencias(nombre) VALUES ('$nombre')";



$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
  echo '<script>
  alert("ERROR AL REGISTRAR TIPO INCIDENCIA");
  </script>';
}
else{
  echo '<script>
  alert(" NUEVO TIPO DE INCIDENCIA REGISTRADO CON EXITO");
  </script>';

}mysqli_close($mysqli);
}
?>