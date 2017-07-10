<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RCV</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="Alertas/dist/sweetalert.css">



</head>

<body style="background-image:url(Img/Logo.png); background-repeat: no-repeat;  background-position: right top;" >

<nav class="navbar navbar-static-top" style="background: #3c8dbc;">
</nav>
       
          <div class="box-header">

           <div class="col-md-4 col-md-offset-4">
            <div class="col-md-12">
  <h1 style="color: #3c8dbc; text-align: center;">Iniciar Sesión</h1>
</div>
           <br><br><br><br><br><br>
            
          <div class="panel-heading">
           
        </div>
          <div class="panel-body">
            <form class="login-form" action="validar.php" method="post">
                    <fieldset>
                <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="usuario" type="email" class="form-control" name="usuario" value="" placeholder="Email" required>                                        
    </div><br>
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="success" type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
            </div><br>
    <input type="submit" name="ingresar" id="btn" value="Ingresar" class="btn btn-primary">
              
            </fieldset>
              </form>
          </div>
      </div>

    </div>
          </div>
       
     
  <!-- Fin Del Cuerpo -->

  <!-- Inicio Del Footer -->
<br><br><br><br><br><br><br><br><br><br>
  <footer >
    <center><strong>Copyright &copy;<a href="#">JPRConsulting</a></strong></center>
  </footer>

        
<!-- Fin Del Footer -->

<!-- Inicio De los Scripts -->


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

<!-- Aqui Va El Final de Los Scripts -->
</body>
</html>
