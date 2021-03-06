
<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:Index.php");
}
?>

<?php 
include("../Funciones/Conexion.php");
$mysqli=inicio();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RCV</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/datepicker.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="Shortcut Icon" type="image/x-icon" href="../Img/favicon.ico" />
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="../Administrador.php" class="logo">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 

              echo "<span class='glyphicon glyphicon-user'></span> ".$_SESSION['nombre']."";
            ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <br>
              <img src="../Img/Favicom.png">
              </li>
              <li class="user-body">
           <?php     

              echo "<a href='#' style='font-family: Arial; text-align: center;'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['nombre']."</a><br>";
            ?>
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="#" class=" exit-system-button btn btn-primary" data-href="PHP/LogOut.php"><i><span style="color: white; font-family: Arial;">Cerrar Sesion</span></i></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
            </ul>
          </li>
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
        <!-- Navegacion Administrador -->
        <ul class="sidebar-menu" data-widget="tree">
        <br>
        <li><a href="../Crud/Notificaciones.php"><i class="fa fa-bell fa-1x"></i> <span>Notificaciones</span></a></li>
          <br>
        <li><a href="../Crud/CrudUsuarios.php"><i class="fa fa-edit"></i> <span>Usuarios</span></a></li>
          <br>
        <li><a href="../Crud/Empresas.php"><i class="glyphicon glyphicon-briefcase"></i> <span>Empresas</span></a></li>
          <br>
        <li><a href="../Crud/Reportes.php"><i class="fa fa-file-text"></i><span>Reportes</span></a></li>
        <br>
        <li><a href="../Crud/Grupos.php"><i class="fa fa-users"></i> <span>Grupos</span></a></li>
          <br>
        <li><a href="../Crud/Incidencias.php"><i class="fa fa-heartbeat"></i> <span>Incidencias</span></a></li>
        <br>
        <li><a href="../Crud/Horarios.php"><i class="fa fa-calendar"></i><span>Horarios</span></a></li>
        <br>
        <li><a href="../Crud/Ausencias.php"> <i class="fa fa-exclamation-triangle" ></i><span>Ausencias</span></a></li>
      </ul>
      <!-- Fin Vavegación De Administrador -->
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Inicio  Caja 1-->
  <div class="content-wrapper">
  <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h2>Bienvenido <small>Registro de Incidencias</small></h2>

              
      <h3 style="color: #3c8dbc;">Datos De la Incidencia</h3>
      
<form action="RIncidencias.php" method="post" enctype="multipart/form-data">
<div class="col-md-4">

         <?php  

              $sql1="SELECT idusuario, nombre FROM usuarios"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;"> Empleado:</label></td>
                <td> <select name="idusuario" class="form-control">
                <option value="0">Seleccione Empleado</option>
                

                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idusuario"]."'>".$lista["nombre"]."</option>";                  
            ?>

</select>
</td>
</div>

<div class="col-md-4">
   <?php  
              $sql1="SELECT idtipo, nombre FROM alta_incidencias"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;"> Tipo Incidencia</label></td>
                <td> <select name="idtipo" class="form-control">
                <option value="0">Seleccione Incidencia</option>
                

                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idtipo"]."'>".$lista["nombre"]."</option>";                  
            ?>


</select>
</td>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Fecha de inicio:</label>
<input type="date" name="fechainicial" class="form-control" required ><br><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Fecha de Fin:</label>
<input type="date" name="fechafinal" class="form-control" required ><br><br>
</div>

<div class="col-md-12">
<label style="font-family:Arial;">Documento probatorio:</label><br><br>
<input type="file"  name="documento" size="30"><br>
</div>            

<div class="col-md-12">           
<button type="submit" class="btn btn-primary" style="width: 100px;" name="btn-upload">Registrar</button><br><br>
</div>

</form>
        
  <div class="col-md-12">
  <a href="../Crud/Incidencias.php"><button style="width: 100px;" class="btn btn-primary">Incidencias</button></a>
  </div>


<?php

include("../Funciones/RegisIncidencias.php");
?>

          </div>
              </div>
                  </div>

   <footer><
    <center><strong>Copyright &copy;<a href="#">JPRConsulting</a></strong></center>
  </footer>
                </div>
                  </div>
        
  <div class="control-sidebar-bg"></div>

</div>


<!-- jQuery 3.1.1 -->
<script src="jquery-3.2.1.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/css/bootstrap-datepicker.js"></script>

<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>