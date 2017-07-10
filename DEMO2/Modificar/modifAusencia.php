<?php


include("../Funciones/Conexion.php");
$mysqli=inicio();

$idausencia=$_REQUEST['idausencia'];

$idusuario=$_POST['idusuario'];
$ausencia=$_POST['ausencia'];
$fechainicio=$_POST['fechainicio'];
$fechafinal=$_POST['fechafinal'];

$sql="UPDATE ausencia SET idusuario='$idusuario', ausencia='$ausencia', fechainicio='$fechainicio', fechafinal='$fechafinal' WHERE idausencia='$idausencia'";

$resultado = mysqli_query($mysqli, $sql);

if  (!$resultado){
  echo '<script>
    alert ("Incidencia no modificada");
    window.history.go(-1);
    </script>';
}else {
    echo '<script>
    alert ("Se modifico con exito");
    window.history.go(-1);
    </script>';
     }mysqli_close($mysqli);



?>