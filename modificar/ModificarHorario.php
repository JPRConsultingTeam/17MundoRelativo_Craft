<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:Index.php");
}
?>

<?php 
include("../Conexion.php");?>

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
  <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <link rel="stylesheet" href="..///code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="..//resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="../https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } );
  </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="../Administrador.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="../logo-lg"><b>Virtual Clock</b></span>
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
        <br>
        <li><a href="../Notificaciones.php"><i class="fa fa-bell fa-1x"></i> <span>Notificaciones</span></a></li>
          <br>
        <li><a href="../CrudUsuarios.php"><i class="fa fa-edit"></i> <span>Usuarios</span></a></li>
          <br>
        <li><a href="../Empresas.php"><i class="glyphicon glyphicon-briefcase"></i> <span>Empresas</span></a></li>
          <br>
        <li><a href="../Reportes.php"><i class="fa fa-file-text"></i><span>Reportes</span></a></li>
        <br>
        <li><a href="../Grupos.php"><i class="fa fa-users"></i> <span>Grupos</span></a></li>
          <br>
        <li><a href="../Incidencias.php"><i class="fa fa-heartbeat"></i> <span>Incidencias</span></a></li>
        <br>
        <li><a href="../Horarios.php"><i class="fa fa-calendar"></i><span>Horarios</span></a></li>
        <br>
        <li><a href="../Ausencias.php"> <i class="fa fa-exclamation-triangle" ></i><span>Ausencias</span></a></li>
        <br>
        <li><a href="../PHP/LogOut.php"><i class="glyphicon glyphicon-remove-sign"></i> <span>Cerrar Sesión</span></a></li>
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
              <h2>Bienvenido <small>Modificar Horario</small></h2>

              


      <h3 style="color: #3c8dbc;">Datos de Horario</h3>

      <?php

        $idhora=$_REQUEST['idhora'];

        $sql="SELECT * FROM hora_trabajo WHERE idhora='$idhora'";
        $resultado=$mysqli->query($sql);
        $arreglo=$resultado->fetch_assoc();
          # code...
        
        ?>

      <form action="modifHorario.php?idhora=<?php echo $arreglo['idhora'];?>" method="post">

<div class="col-md-4">
<label style="font-family: Arial;">Dia:</label>

  <?php
  echo "<input type='date' class='form-control' name='dia' required value='".$arreglo['dia']."'>";

  ?>
 </div>

<div class="col-md-4">
<label style="font-family: Arial;">Tipo:</label>
  <?php
  echo "<input type='text' class='form-control' name='tipoturno' list='turno' required value='".$arreglo['tipoturno']."'>";
    ?>
  <datalist id="turno">
  <option value="Fijo">Fijo</option>
  <option value="Flexible">Flexible</option>
  </datalist>

</div>

<div class="col-md-4">
  <label style="font-family: Arial;">Hora de Entrada:</label>
  <?php
  echo"<input type='time' class='form-control' name='entrada' required value='".$arreglo['entrada']."'>";
?>
<br>
  </div>

<div class="col-md-4">
  <label style="font-family: Arial;">Hora de Comida:</label>
   <?php
  echo"<input type='time' class='form-control' name='descanso' required value='".$arreglo['descanso']."'>";
  ?>

  </div>

<div class="col-md-4">
  <label style="font-family: Arial;">Hora de Regreso de Comida:</label>
  <?php
  echo"<input type='time' class='form-control' name='regresoD' required value='".$arreglo['regresoD']."'>";
  ?>
 
  </div>

<div class="col-md-4">
  <label style="font-family: Arial;">Hora de Salida:</label>
  <?php
   echo"<input type='time' class='form-control' name='salida' required value='".$arreglo['salida']."'>";
  ?>
  
</div>




<div class="col-md-12">
 <button type="submit" class="btn btn-primary" name="btn-upload">Guardar</button>
 <br><br><br>
</div>

        </form>
        
        <div class="col-md-12">
<a href="../Horarios.php"><button class="btn btn-primary">Ver Horarios</button></a>
</div>

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
<script src="../jquery-3.2.1.min.js"></script>

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