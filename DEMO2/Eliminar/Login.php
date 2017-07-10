<?php

if(!empty($_POST)){
	if(isset($_POST["usuario"]) &&isset($_POST["contrasena"])){
		if($_POST["usuario"]!=""&&$_POST["contrasena"]!=""){
			
			$dbname = "reloj1";
			$enlace = mysqli_connect("localhost", "root", "", "reloj");
			mysqli_select_db($enlace, $dbname);
			
			$user_id=null;
			$sqli= "select * from usuarios where correo=\"$_POST[usuario]\" and contrasena=\"$_POST[contrasena]\" ";
			$query = mysqli_query($enlace, $sqli);
			while ($r=$query->fetch_array()) {
				$user_id=$r["idusuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../Index.php';</script>";
			}else{
				if ($r["activo"]==1) {
					session_start();
					$_SESSION["activo"]=$r["activo"];
					$_SESSION["nombre"]=$r["nombre"];
					$_SESSION["apellidop"]=$r["apellidop"];
					$_SESSION["correo"]=$r["correo"];
					$_SESSION["user_id"]=$user_id;
					print "<script>window.location='../Administrador.php';</script>";	
				}else{
					session_start();
					$_SESSION["apellidop"]=$r["apellidop"];
					$_SESSION["nombre"]=$r["nombre"];
					$_SESSION["correo"]=$r["correo"];
					$_SESSION["user_id"]=$user_id;
					print "<script>window.location='../Usuario.php';</script>";	
				}
							
			}
		}
	}
}



?>