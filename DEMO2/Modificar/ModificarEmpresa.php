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
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <link rel="stylesheet" href="..///code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="..//resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="../https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="Shortcut Icon" type="image/x-icon" href="../Img/favicon.ico" />

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
        <br>
        <li><a href="../Eliminar/LogOut.php"><i class="glyphicon glyphicon-remove-sign"></i> <span>Cerrar Sesión</span></a></li>
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
              <h2>Bienvenido <small>Modificar Empresa</small></h2>

              


      <h3 style="color: #3c8dbc;">Datos de Empresa</h3>
      


        

        <?php

        $idempresa=$_REQUEST['idempresa'];

        $sql="SELECT * FROM empresa WHERE idempresa='$idempresa'";
        $resultado=$mysqli->query($sql);
        $arreglo=$resultado->fetch_assoc();
          # code...
        
        ?>

      <form action="modifEmpresa.php?idempresa=<?php echo $arreglo['idempresa'];?>" method="post">

  <div class="col-md-4">
  <label style="font-family: Arial;">Nombre:</label>

  <?php
  echo "<input type='text' name='nombre' class='form-control' required value='".$arreglo['nombre']."'>"; 
  ?>
  </div>

 <div class="col-md-4">
  <label style="font-family: Arial;">Teléfono:</label>

  <?php
  echo "<input type='tel' name='telefono' pattern='[0-9]{10}' class='form-control' required value='".$arreglo['telefono']."'>";
  ?>
  <br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Correo:</label>
  <?php
  echo "<input type='email' name='correo' class='form-control' required value='".$arreglo['correo']."'>";
  ?>
  <br>
  </div>

  <div class="col-md-4">
<label style="font-family: Arial;">Pais</label>
<?php
 echo "<input type='text' class='form-control' name='pais' list='paises' required value='".$arreglo['pais']."'>";
 ?>
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
<?php
 echo"<input type='text' name='estado' class='form-control' required value='".$arreglo['estado']."'>";
 ?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Municipio</label>
<?php
 echo "<input type='text' name='municipio' class='form-control' required value='".$arreglo['municipio']."'>";
?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Calle</label>
<?php
echo "<input type='text' name='calle' class='form-control' required value='".$arreglo['calle']."'>";
?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">C.P</label>
<?php
 echo "<input type='text' name='cp' class='form-control' required value='".$arreglo['cp']."'>";
?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">RFC</label>
<?php
 echo "<input type='text' name='rfc' class='form-control' required value='".$arreglo['rfc']."'>";
?>
<br>
</div>





<div class="col-md-12">
 <button type="submit" class="btn btn-primary" name="btn-upload">Guardar</button>
 <br><br><br>
</div>

        </form>
        
        <div class="col-md-12">
<a href="../Crud/Empresas.php"><button class="btn btn-primary">Ver Empresas</button></a>
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