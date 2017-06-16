<?php
//incluye la conexion

session_start();
require("Conexion.php");

//AQUI SE HACE LA VALIDACIÓN PARA EL ADMINISTRADOR PREDETERMINADO

$username=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql2=mysqli_query($mysqli, "SELECT * FROM usuarios WHERE correo='$username'"); // Aquí hace la seleccion de la tabla usuarios de la base de datos reloj

if($f2=mysqli_fetch_assoc($sql2)){
	if($contrasena==$f2['pasadmin']){ 
		$_SESSION['idusuario']=$f2['idusuario'];
		$_SESSION['nombre']=$f2['nombre'];
		  //Aquí valida los campos de la tabla usuarios para Administrador

		echo "<script>location.href='Administrador.php'</script>";
	}else{

		
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='Index.html'</script>";
		}

}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='Index.html'</script>";	


}
?>

