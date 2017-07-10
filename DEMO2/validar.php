<?php
//incluye la conexion

session_start();


require("Funciones/Conexion.php");
$mysqli=inicio();

//AQUI SE HACE LA VALIDACIÓN PARA EL ADMINISTRADOR PREDETERMINADO

$username=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql2=mysqli_query($mysqli, "SELECT * FROM usuarios WHERE correo='$username'"); // Aquí hace la seleccion de la tabla usuarios de la base de datos reloj

if($f2=mysqli_fetch_assoc($sql2)){
	if($contrasena==$f2['pasadmin']){ 
		$_SESSION['idusuario']=$f2['idusuario'];
		$_SESSION['nombre']=$f2['nombre'];
		
		  //Aquí valida los campos de la tabla usuarios para Administrador

		print "<script>window.location='Administrador.php';</script>";	
}
  }


$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$username' and habilitado='1'");
	if($f=mysqli_fetch_assoc($sql)){
		if($contrasena==$f['contrasena']){
			$_SESSION['idusuario']=$f['idusuario'];
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['activo']=$f['activo'];
			

			header("Location: Usuario.php");
		}
		if(!isset($_SESSION['intentos'])) {
$intentos = 1; 

$_SESSION['intentos'] = $intentos;
} else {
$intentos = $_SESSION['intentos'];

}

$_SESSION["intentos"]++;
if ($_SESSION['intentos'] > 4)
{
$mysqli = new mysqli("localhost", "root", "", "reloj");		
	$sql = $mysqli->query("UPDATE usuarios set habilitado='0' WHERE correo='$username'");


	$mensaje = "Este Usuario ha sido desactivado comunicate con el administrador";
        echo "<script type='text/javascript'>alert('$mensaje');</script>";
        header( "refresh:0.2;url=Index.php" );


	session_destroy(); 
}else{ 
echo "<script> alert ('Llevas ".($_SESSION['intentos']-1)." intentos de 3'); </script>";
echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Index.php'>";
}

	}else{

		echo '<script> alert("Este usuario no existe o fue desactivado");</script>';
		echo"<META HTTP-EQUIV='Refresh' CONTENT='0; URL=Index.php'>";
	}






?>

