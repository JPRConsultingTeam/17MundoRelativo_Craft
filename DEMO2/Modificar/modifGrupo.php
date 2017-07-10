<?php 
include ("../Funciones/Conexion.php");
$mysqli=inicio();
 ?>

 <?php

 $idgrupo=$_REQUEST['idgrupo'];

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];


$sql = "UPDATE grupo SET nombre='$nombre', descripcion='$descripcion' WHERE idgrupo='$idgrupo'";

$resultado = mysqli_query($mysqli, $sql);

if   (!$resultado){
  echo '<script>
    alert ("No se modificar grupo");
    window.history.go(-1);
    </script>';
}else {
    echo '<script>
    alert ("Se modifico con exito");
    window.history.go(-1);
    </script>';
     }mysqli_close($mysqli);
   
?>