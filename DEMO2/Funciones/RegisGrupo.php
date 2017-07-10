<?php

if(isset($_POST['btn-upload']))
  {
 
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$activo=$_POST['activo'];

$sql = "INSERT INTO grupo(nombre, descripcion, activo) VALUES ('$nombre', '$descripcion', '$activo')"; 
$resultado = mysqli_query($mysqli, $sql);

if   (!$resultado){
  echo '<script>
    alert ("No se pudo registrar el grupo");
    </script>';
}else {
    echo '<script>
    alert ("Se Registro Con Exito");
    </script>';
     }mysqli_close($mysqli);
   }

   ?>