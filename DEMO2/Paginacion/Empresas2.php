
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
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      <!-- Navbar Right Menu -->
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
            <div class="box-header with-border">
              <h3>Bienvenido <small>Empresas</small></h3>
            
  <a href="../Formularios/REmpresas.php"" class="btn btn-primary">Agregar una Empresa</a>
  <a href="Localizacion.php" class="btn btn-danger">Agregar una Localización</a>
  <br><br>
 
<table class='table'>
        <tr>
          <th>ID</th><th>Empresa</th><th>Direccion</th><th>R.F.C</th><th>Correo</th><th>Función</th>
        </tr>     
<?php
      $mysqli = new mysqli("localhost", "root", "", "reloj");    
      if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
          exit();
      }
      $consulta= "SELECT * FROM empresa LIMIT 5,5";
      if ($resultado = $mysqli->query($consulta)) 
      {
        while ($fila = $resultado->fetch_row()) 
        {         
          echo "<tr>";
          echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[7], $fila[6], $fila[5], $fila[4]</td><td>$fila[9]</td><td>$fila[3]</td>";  
          echo"<td>";           
            echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-edad='" .$fila[2] ."' data-direccion='" .$fila[3] ."'</a>";



            echo "<a class='btn btn-primary' href='../Modificar/ModificarEmpresa.php?idempresa=".$fila[0]."'>

            <span class='glyphicon glyphicon-pencil'></span>Editar</a> "; 


          echo "<a class='btn btn-danger' href='../Eliminar/EliminarE.php?idempresa=" .$fila[0] ."'>

          <span class='glyphicon glyphicon-remove'></span> Desactivar</a>"; 

          echo "</td>";
          echo "</tr>";
        }
        $resultado->close();
      }
      $mysqli->close();     
      
  

?>
</table>
<center>
<nav aria-label="Page navigation">
  <ul class="pagination">
    
    <li><a href="../Crud/Empresas.php" >1</a></li>
    <li class="active"><a href="Empresas2.php">2</a></li>
    <li><a href="../Paginacion/Empresas3.php">3</a></li>
    <li><a href="../Paginacion/Empresas4.php">4</a></li>

  </ul>
</nav>
</center>
  <!-- Modal -->
  
      </div>
          </div>
            </div>
                </div>
                  </div>

      
  <!-- Final Caja 1 -->

  <!-- Inicio Caja 2 -->

  

  <!-- Final Caja 2 -->

  <footer class="main-footer">
    <center><strong>Copyright &copy;<a href="#">JPRConsulting</a></strong></center>
  </footer>

        
  <div class="control-sidebar-bg"></div>

</div>


<!-- jQuery 3.1.1 -->
<script src="../plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
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