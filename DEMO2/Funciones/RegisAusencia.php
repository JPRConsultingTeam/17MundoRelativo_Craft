<?php
if(isset($_POST['btn-upload'])) { 
 

                              
$idusuario=$_POST['idusuario'];

$ausencia=$_POST['ausencia'];
$fechainicio=$_POST['fechainicio'];
$fechafinal=$_POST['fechafinal'];

$sql="INSERT INTO ausencia (idusuario, ausencia, fechainicio, fechafinal) VALUES ('$idusuario','$ausencia','$fechainicio','$fechafinal')";




$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
  echo '<script>
  alert("ERROR AL REGISTRAR AUSENCIA");
  </script>';
}
else{
  echo '<script>
  alert("AUSENCIA REGISTRADA CON EXITO");
  </script>';

}mysqli_close($mysqli);

}
?>