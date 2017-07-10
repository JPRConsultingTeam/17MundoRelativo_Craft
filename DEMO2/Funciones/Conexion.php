
<?php
function inicio(){

//AQUI SE ESTA HACIENDO LA CONEXION A LA BASE DE DATOS
 $mysqli = new mysqli("localhost", "root", "", "reloj");    
      if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
          exit();
      }
		//else echo "esto ya funciona ajjajaj";

      
return $mysqli;

}
?>
