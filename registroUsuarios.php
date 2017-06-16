<?php
include 'Conexion.php';
?>

<?php

$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$edad=$_POST['edad'];
$genero=$_POST['genero'];
$notelef=$_POST['notelef'];
$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];
$fechanacimiento=$_POST['fechanacimiento'];
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




$sql= "INSERT INTO usuarios (nombre, apellidop, apellidom, edad, genero, notelef, correo, contrasena, fechanacimiento, pais, estado, municipio, calle, cp, idempresa, fechaalta, fechabaja, idgrupo, noseguro, modchecar, idhora, puesto, contac1, contac2) VALUES ('$nombre','$apellidop','$apellidom','$edad','$genero', '$notelef','$correo','$contrasena','$fechanacimiento','$pais','$estado','$municipio','$calle','$cp','$idempresa','$fechaalta','$fechabaja','$idgrupo','$noseguro','$modchecar','$idhora','$puesto','$contac1','$contac2')";


$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
	echo '<script>
	alert("ERROR AL REGISTRAR USUARIO");
	window.history.go(-1);
	</script>';
}
else{
	echo '<script>
	alert("USUARIO REGISTRADO CON EXITO");
	window.history.go(-1);
	</script>';

}mysqli_close($mysqli);


?>