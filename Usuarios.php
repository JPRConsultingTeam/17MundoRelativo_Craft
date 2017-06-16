
<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:Index.php");
}
?>

<?php 
include("Conexion.php");?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/datepicker.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="Administrador.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Virtual Clock</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#"  data-toggle="dropdown">
             <?php               
              echo "<li><a href='#'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['nombre']."</a></li>";
            ?>
            </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
      <!-- Foto Llamdo Desde La Base De Datos -->

      <!-- Fin -->
<!-- Nombre Validado -->
       
<!-- Nombre Validado -->
      </div>
       <ul class="sidebar-menu" data-widget="tree">
        <li><a href="Notificaciones.php"><i class="fa fa-bell fa-1x"></i> <span>Notificaciones</span></a></li>
          <br>
        <li><a href="CrudUsuarios.php"><i class="fa fa-edit"></i> <span>Usuarios</span></a></li>
          <br>
        <li><a href="Empresas.php"><i class="glyphicon glyphicon-briefcase"></i> <span>Empresas</span></a></li>
          <br>
        <li><a href="Reportes.php"><i class="fa fa-file-text"></i><span>Reportes</span></a></li>
        <br>
        <li><a href="Grupos.php"><i class="fa fa-users"></i> <span>Grupos</span></a></li>
          <br>
        <li><a href="Incidencias.php"><i class="fa fa-heartbeat"></i> <span>Incidencias</span></a></li>
        <br>
        <li><a href="Horarios.php"><i class="fa fa-calendar"></i><span>Horarios</span></a></li>
        <br>
        <li><a href="Ausencias.php"> <i class="fa fa-exclamation-triangle" ></i><span>Ausencias</span></a></li>
        <br>
        <li><a href="PHP/LogOut.php"><i class="glyphicon glyphicon-remove-sign"></i> <span>Cerrar Sesión</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Inicio  Caja 1-->
  <div class="content-wrapper">
  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h2>Bienvenido <small>Registro Usuarios</small></h2>


              
      <h3 style="color: #3c8dbc;">Datos Generales</h3>
      
        <form action="Usuarios.php" method="post">



  <div class="col-md-4">
  <label style="font-family: Arial;">Nombre(s):</label>
  <input type="text" name="nombre" 
class="form-control" required>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Apellido Paterno:</label>
  <input type="text" name="apellidop" class="form-control" required>
  </div>
  <div class="col-md-4">
  <label style="font-family: Arial;">Apellido Materno:</label>
  <input type="text" name="apellidom" class="form-control" required>
  <br>
  </div>
  <div class="col-md-4">
  <label style="font-family: Arial;">Edad:</label>
  <input type="number" name="edad" class="form-control" placeholder="0" pattern="[0-9]" min="0" max="30" required style="width: 30%;"><br>
  </div> 

  <div class="col-md-4" id="genero">
  <label style="font-family: Arial;">Genero:</label> <br>
  <label class="radio-inline"><input type="radio" name="genero" required>Masculino</label>
  <label class="radio-inline"><input type="radio" name="genero" required>Femenino</label>
  </div> 

<div class="col-md-4">
  <label style="font-family: Arial;">Teléfono:</label>
  <input type="tel" name="notelef" pattern="[0-9]{10}" class="form-control" required style="width: 30%;"><br>
  </div> 

  <div class="col-md-4">
  <label style="font-family: Arial;">Correo:</label>
  <input type="email" name="correo" class="form-control" required>
  <br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Contraseña:</label>
  <input type="password" name="contrasena" class="form-control" required>
  <br>
  </div>      
  
  
<div class="col-md-4">
<label style="font-family: Arial;"> Fecha Nacimiento:</label>
<input type="date" name="fechanacimiento" class="form-control" required >
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Pais</label>
<input type="text" class="form-control" name="pais" list="paises" required>
<datalist id="paises">
<option value="España" />
<option value="México" />
<option value="Argentina" />
<option value="Perú" />
<option value="Colombia" />
<option value="Otro país" /> 
</datalist>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Estado</label>
<input type="text" name="estado" class="form-control" required><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Municipio</label>
<input type="text" name="municipio" class="form-control" required><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Calle</label>
<input type="text" name="calle" class="form-control" required><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">C.P</label>
<input type="text" name="cp" class="form-control" required><br>
</div>


<div class="col-md-12">
  <h3 style="color: #3c8dbc;">Datos Laborales</h3>
</div>

<div class="col-md-4">
   <?php  
              $sql1="SELECT idempresa, nombre FROM empresa"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;"> Empresa:</label></td>
                <td> <select name="idempresa" class="form-control">
                <option value="0">Seleccione empresa</option>
                

                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idempresa"]."'>".$lista["nombre"]."</option>";                  
            ?>


</select>
</td>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Fecha de Alta:</label>
<input type="date" name="fechaalta" class="form-control" required ><br><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Fecha de Baja:</label>
<input type="date" name="fechabaja" class="form-control"><br><br>
</div>

<div class="col-md-4">

<?php  
              $sql1="SELECT idgrupo, nombre FROM grupo"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;"> Grupo:</label></td>
                <td> <select name="idgrupo" class="form-control">
                <option value="0">Seleccione grupo</option>
                <br>
                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idgrupo"]."'>".$lista["nombre"]."</option>"; 
  
            ?>
        </td>
    </select>
 </div>

<div class="col-md-4" >
<label style="font-family: Arial;" >Numero de Seguro:</label>
<input type="text"  name="noseguro" class="form-control" required><br>
</div>


<div class="col-md-4">
<label style="font-family: Arial;">Modo De Checar</label>
<input type="text" class="form-control" name="modchecar" list="checar" required>
 <datalist id="checar">
  <option value="?"></option>
  <option value="1">Normal</option>
  <option value="2">Presencial</option>
  </datalist><br>
</div>



<div class="col-md-4">

  <?php  
              $sql1="SELECT idhora, tipoturno FROM hora_trabajo"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;">Horario:</label></td>
                <td> <select name="idhora" class="form-control">
                <option value="0">Seleccione horario</option>
                <br>
                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idhora"]."'>".$lista["tipoturno"]."</option>"; 
  
            ?>
            </td>
       </select> 
    </div>

<div class="col-md-4">
<label style="font-family: Arial;">Puesto</label>
<input type="text" name="puesto" class="form-control" required><br>

</div>

<div class="col-md-12">
  <h3 style="color: #3c8dbc;">Contactos de Emergencia</h3>
  </div>

  <div class="col-md-4">
<label style="font-family: Arial;">Contacto 1:</label>
<input type="text" name="contac1" pattern="[0-9]{10}" class="form-control" required><br>
</div>
<div class="col-md-4">
<label style="font-family: Arial;">Contacto 2:</label>
<input type="tel" pattern="[0-9]{10}" name="contac2" class="form-control" required><br>
</div>

<div class="col-md-12">
<button type="submit" class="btn btn-primary" name="btn-upload">Registrar</button>
 <br><br><br>
</div>

        </form>
        
        <div class="col-md-12">
<a href="CrudUsuarios.php"><button class="btn btn-primary">Ver Usuarios</button></a>
</div>



<?php

if(isset($_POST['btn-upload']))
{
  include("Conexion.php");


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
  </script>';
}
else{
  echo '<script>
  alert("USUARIO REGISTRADO CON EXITO");
  </script>';

}mysqli_close($mysqli);
}

?>

<div class="col-md-12">
   <footer>
    <center><strong>Copyright &copy;<a href="#">JPRConsulting</a></strong></center>
  </footer>
  </div>

          </div>
          </div>
            </div>
                </div>
                  </div>
        
  <div class="control-sidebar-bg"></div>

</div>





<!-- jQuery 3.1.1 -->
<script src="jquery-3.2.1.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/css/bootstrap-datepicker.js"></script>

<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>


