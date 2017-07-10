
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
  <link rel="stylesheet" href="bootstrap/css/Estilo.css">
  <link rel="icon" type="image/png" href="wea3.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="Shortcut Icon" type="image/x-icon" href="Img/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/sweet-alert.css">
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini"  onLoad="localize()">

<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="Usuario.php" class="logo">
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
              <img src="Img/Favicom.png" class="img-rounded" >
              </li>
             <li class="user-body">
           <?php     

              echo "<a href='#' style='font-family: Arial; text-align: center;'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['nombre']."</a><br>";
            ?>
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="#" class=" exit-system-button btn btn-primary" data-href="Eliminar/LogOut.php"><i><span style="color: white; font-family: Arial;">Cerrar Sesion</span></i></a>
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
  <aside class="main-sidebar" id="capa">
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          <br>
        <li><a href="#"><i class="fa fa-bell fa-1x"></i> <span>Notificaciones</span></a></li>
          <br>
        <li><a href="Asistencias.php"><i class="fa fa-edit"></i> <span>Asistencias</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="row">
        <div class="col-md-12">

      <br><br>
      <center>
    <div class="widget">
      <div class="fecha">
        <p id="diaSemana" class="diaSemana">Martes</p>
        <p id="dia" class="dia">27</p>
        <p>de </p>
        <p id="mes" class="mes">Octubre</p>
        <p>del </p>
        <p id="year" class="year">25</p>
      </div>

            <br>
  
      <div class="reloj">
        <p id="horas" class="horas">11</p>
        <p>:</p>
        <p id="minutos" class="minutos">48</p>
        <p>:</p>
        <div class="caja-segundos">
          <p id="ampm" class="ampm">AM</p>
          <p id="segundos" class="segundos">12</p>
        </div>
      </div>
    </div>
          </center><br>
 <center> 
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Entrada
<i class="material-icons"></i>
  </button>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal1">Salida
<i class="material-icons"></i>
  </button>
</div>
<br>
<br>
<div class="btn-group">
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal2">Comida
<i class="fa fa-cutlery" aria-hidden="true"></i>
  </button>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal3">Regreso Comida
<i class="fa fa-reply" aria-hidden="true"></i>
  </button>
</div>
<!-- Cordenadas -->

<!--  -->
</center>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chequeo De Entrada</h4>
      </div>
      <div class="modal-body">
        <!-- Aqui Van Los Datos -->
    <form action="Usuario/chequeo.php" method="post">

<frame>Correo Electronico:</frame><br><input type="email" class="form-control" readonly="readonly" name="email" value=<?php echo $_SESSION['correo'];?> required><br>

<frame>Usuario:</frame><br><input type="text" class="form-control" readonly="readonly" name="nombre" value=<?php echo $_SESSION['nombre'];?> required><br>

<input type="text" id="lti_lgi" class="form-control" readonly>

<p>Latitud: <span id="lti"></span></p>

<p>Longitud: <span id="lgi"></span></p>
 
    <br>
    <center>
    <input type="submit" value="Chequeo De Entrada" class="btn btn-primary">
    </center>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
      
      <!-- w-->

      <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chequeo De Salida</h4>
      </div>
      <div class="modal-body">
        <!-- Aqui Van Los Datos -->
    <form action="Usuario/chequeo2.php" method="post">

<frame>Correo Electronico:</frame><br><input type="email" class="form-control" readonly="readonly" name="email" value=<?php echo $_SESSION['correo'];?> required><br>

<frame>Usuario:</frame><br><input type="text" class="form-control" readonly="readonly" name="nombre" value=<?php echo $_SESSION['nombre'];?> required><br>

    <br>
    <center>
    <input type="submit" value="Chequeo De Salida" class="btn btn-primary">
    </center>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- 2 -->


      <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Salida A Comer</h4>
      </div>
      <div class="modal-body">
        <!-- Aqui Van Los Datos -->
    <form action="Usuario/chequeo2.php" method="post">

<frame>Correo Electronico:</frame><br><input type="email" class="form-control" readonly="readonly" name="email" value=<?php echo $_SESSION['correo'];?> required><br>

<frame>Usuario:</frame><br><input type="text" class="form-control" readonly="readonly" name="nombre" value=<?php echo $_SESSION['nombre'];?> required><br>

    <br>
    <center>
    <input type="submit" value="Chequeo De Salida" class="btn btn-primary">
    </center>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div> 

   <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Salida A Comer</h4>
      </div>
      <div class="modal-body">
        <!-- Aqui Van Los Datos -->
    <form action="Usuario/chequeo2.php" method="post">

<frame>Correo Electronico:</frame><br><input type="email" class="form-control" readonly="readonly" name="email" value=<?php echo $_SESSION['correo'];?> required><br>

<frame>Usuario:</frame><br><input type="text" class="form-control" readonly="readonly" name="nombre" value=<?php echo $_SESSION['nombre'];?> required><br>

    <br>
    <center>
    <input type="submit" value="Chequeo De Salida" class="btn btn-primary">
    </center>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

      </div>
        </div>
          </div>

  <footer class="main-footer">
    <center><strong>Copyright &copy;<a href="#">JPRConsulting</a></strong></center>
  </footer>

</div>

 <script> 
function localize() { 
if (navigator.geolocation) { 
navigator.geolocation.getCurrentPosition(mapa,error); 
} else { 
alert('Tu navegador no soporta geolocalizacion.'); 
} 
} 
function mapa(pos) { /************************ Aqui están las variables que te interesan***********************************/ 
var latitud = pos.coords.latitude; 
var longitud = pos.coords.longitude; 
var precision = pos.coords.accuracy; 
var contenedor = document.getElementById("map") 
document.getElementById("lti").innerHTML=latitud;
document.getElementById("lgi").innerHTML=longitud;  
document.getElementById("psc").innerHTML=precision;

$("#lti_lgi").val("Latitud: " + latitud + " Longitud: " + longitud);


var centro = new google.maps.LatLng(latitud,longitud); 
var propiedades = { zoom: 15, center: centro, mapTypeId: google.maps.MapTypeId.ROADMAP }; 
var map = new google.maps.Map(contenedor, propiedades); 
var marcador = new google.maps.Marker({ position: centro, map: map, title: "Tu posicion actual" }); 
} 
function error(errorCode) { 
if(errorCode.code == 1) 
alert("No has permitido buscar tu localizacion") 
else if (errorCode.code==2) 
alert("Posicion no disponible") 
else 
alert("Ha ocurrido un error") 
} 
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/main.js"></script>
<script src="js/sweet-alert.min.js"></script> 
     
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