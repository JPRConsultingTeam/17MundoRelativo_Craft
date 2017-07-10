<?php 
include ("../Funciones/Conexion.php");
$mysqli=inicio();

 ?>

 <?php
 
 $idusuario=$_REQUEST['idusuario'];


$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$notelef=$_POST['notelef'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$ano=$_POST['ano'];
$edad=$_POST['edad'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$calle=$_POST['calle'];
$cp=$_POST['cp'];
$idempresa=$_POST['idempresa'];
$fechaalta=$_POST['fechaalta'];
$fechabaja=$_POST['fechabaja'];
$idgrupo=$_POST['idgrupo'];
$noseguro=$_POST['noseguro'];
$modchecar=$_POST['modchecar'];
$idhora=$_POST['idhora'];
$puesto=$_POST['puesto'];
$contac1=$_POST['contac1']; 
$contac2=$_POST['contac2'];


$sql= "UPDATE usuarios SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', genero='$genero', notelef='$notelef', correo='$correo', contrasena='$contrasena',dia='$dia', mes='$mes',ano='$ano',edad='$edad', pais='$pais', estado='$estado', municipio='$municipio', calle='$calle', cp='$cp', idempresa='$idempresa', fechaalta='$fechaalta', fechabaja='$fechabaja', idgrupo='$idgrupo', noseguro='$noseguro', modchecar='$modchecar', idhora='$idhora', puesto='$puesto', contac1='$contac1', contac2='$contac2' WHERE idusuario='$idusuario'";


$resultado = $mysqli->query($sql);
if (!$resultado){
	echo '<script>
	alert("ERROR AL MODIFICAR USUARIO");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("USUARIO MODIFICADO CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);






 ?>