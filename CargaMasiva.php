
<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:Index.php");
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Estilo.css" />
  
  <link rel="icon" type="image/png" href="wea3.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
   
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
          
        <!-- Navegacion Administrador -->
        <ul class="sidebar-menu" data-widget="tree">
        <br>
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
      <!-- Fin Vavegación De Administrador -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

     <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3>Bienvenido <small>Carga Masiva</small></h3>
              <p>Para la carga masiva de empleados es necesario <a onclick="window.location.href='xls/Reportes.xlsx'" class="ng-binding">descargar el formato</a> y rellenar los campos. Es importante que todos los campos marcados como obligatorios sean llenados sin excepción para evitar errores.</p>
<a href="CrudUsuarios.php"><button class="btn btn-danger">Regresar</button></a>
            </div>
              </div>
              <center><h3 style="color: #3c8dbc;">Selecciona el archivo a importar</h3>
          <hr style=" border: 1px dashed #3c8dbc; width: 70%;">
<form action="" method="post" enctype="multipart/form-data" name="form1">
<table width="90%" border="0">
  <tr>
    <td>
    <div class="col-md-6">
      <input type="file" name="archivo" id="archivo" class="form-control">
    </div>
    <div class="col-md-6">
      <h6>Desea Actualizar la Base De Datos</h6>
      <label class="radio-inline"><input type="radio" name="radio" value="s" checked> Si </label>
      <label class="radio-inline"><input type="radio" name="radio" value="n"> NO </label><br><br>
      </div>
      <center>
<input type="submit" name="button" class="btn btn-primary" id="button" value="Actualizar Base de Datos"></center>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php 
include "Conexion.php";
 ?>
<?php
  if(isset($_POST['radio'])){
    //subir la imagen del articulo
    $nameEXCEL = $_FILES['archivo']['name'];
    $tmpEXCEL = $_FILES['archivo']['tmp_name'];
    $extEXCEL = pathinfo($nameEXCEL);
    $urlnueva = "xls/Empleados.xlsx";      
    if(is_uploaded_file($tmpEXCEL)){
      copy($tmpEXCEL,$urlnueva);  
      echo '<div align="center"><strong>Datos Actualizados con Exito</strong></div>';
    }
    
  }
?>
<table class="table table-bordered table-hover">
  <thead>
      <tr>
          <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Correo</th>
      <th>Telefono</th>
      <th>Ocupación</th>
            <th>Estado</th>
        </tr>
  </thead>
    <tbody>
    <?php

    if(isset($_POST['radio'])){
      require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
      
      $objPHPExcel = PHPExcel_IOFactory::load('xls/empleados.xls');
      $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true,true,true,true);
      foreach ($objHoja as $iIndice=>$objCelda) {
  
            echo '
              <tr>
                <td>'.$objCelda['A'].'</td>
                <td>'.$objCelda['B'].'</td>
                <td>'.$objCelda['C'].'</td>
                <td>'.$objCelda['D'].'</td>
                <td>'.$objCelda['E'].'</td>
                <td>'.$objCelda['F'].'</td>
                <td>'.$objCelda['G'].'</td>
              </tr>
            ';
        $id=$objCelda['A'];     $nombre=$objCelda['B'];
        $direccion=$objCelda['C'];  $correo=$objCelda['D'];
        $telefono=$objCelda['E']; $ocupacion=$objCelda['F'];
        $estado=$objCelda['G']; 
                  
        if($_POST['radio']=='s'){
            $sql="INSERT INTO empleados 
          (id, nombre, direccion, correo, telefono, ocupacion, estado) 
            VALUES ('$id','$nombre','$direccion','$correo','$telefono','$ocupacion','$estado')";
            mysqli_query($mysqli,$sql);
        }
          }
      }
  ?>
    
    </tbody>
</table>
              </center>
                </div>
                  </div>


            <!-- Fin Caja 2 -->

 
</div>


  <footer class="main-footer">
    <center><strong>Copyright &copy;<a href="#">JPRConsulting</a></strong></center>
  </footer>

        
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
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