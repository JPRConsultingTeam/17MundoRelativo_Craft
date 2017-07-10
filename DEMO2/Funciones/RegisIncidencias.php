<?php

$formatos= array ('.jpg','.png', '.docx', '.pdf');

if(isset($_POST['btn-upload']))
  {


$idusuario=$_POST['idusuario'];

$idtipo=$_POST['idtipo'];
 
$fechainicial=$_POST['fechainicial'];
$fechafinal=$_POST['fechafinal'];
$documento=$_FILES['documento']['name'];
$documentotmp=$_FILES['documento']['tmp_name'];
$ext= substr($documento, strrpos($documento, '.'));
if (in_array($ext, $formatos)) {
  if(move_uploaded_file($documentotmp, "../documentos/$documento")){
   
}



$sql="INSERT INTO incidencias(idusuario, idtipo, fechainicial, fechafinal,documento) VALUES ('$idusuario','$idtipo','$fechainicial','$fechafinal','$documento')";



$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
  echo '<script>
  alert("ERROR AL REGISTRAR INCIDENCIA");
  </script>';
}
else{
  echo '<script>
  alert("INCIDENCIA REGISTRADA CON EXITO");
  </script>';

}mysqli_close($mysqli);

}
}

?>