
<?php

if(isset($_POST['btn-upload']))
{
 
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
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
$habilitado=$_POST['habilitado'];




$sql= "INSERT INTO usuarios (nombre, apellidop, apellidom, genero, notelef, correo, contrasena, dia, mes, ano, edad, pais, estado, municipio, calle, cp, idempresa, fechaalta, fechabaja, idgrupo, noseguro, modchecar, idhora, puesto, contac1, contac2, habilitado) VALUES ('$nombre','$apellidop','$apellidom','$genero', '$notelef','$correo','$contrasena','$dia','$mes','$ano','$edad','$pais','$estado','$municipio','$calle','$cp','$idempresa','$fechaalta','$fechabaja','$idgrupo','$noseguro','$modchecar','$idhora','$puesto','$contac1','$contac2','$habilitado')";

$resultado = mysqli_query ($mysqli, $sql);
if (!$resultado){
  echo '<script>
  alert("ERROR AL REGISTRAR USUARIO");
  </script>';
}
else{
  echo '<script>
  alert("USUARIO REGISTRADO CON EXITO");
  </script>';

}mysqli_close($mysqli);
}

?>