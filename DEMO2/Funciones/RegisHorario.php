<?php
if(isset($_POST['btn-upload']))
  {


$dia = $_POST["dia"];
$tipoturno = $_POST["tipoturno"];
$entrada = $_POST["entrada"];
$descanso = $_POST["descanso"];
$regresoD= $_POST["regresoD"];
$salida = $_POST["salida"];



$sql = "INSERT INTO hora_trabajo(dia, tipoturno, entrada, descanso, regresoD, salida) VALUES ('$dia', '$tipoturno', '$entrada','$descanso', '$regresoD', '$salida')";

$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
  echo '<script>
  alert("FALLO EL REGISTRO DE HORARIO");
  </script>';
}
else{
  echo '<script>
  alert("REGISTRO DE HORARIO CON EXITO");
  </script>';

}mysqli_close($mysqli);
}
?>