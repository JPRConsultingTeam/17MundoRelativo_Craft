
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
  <title>VC</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/css/datepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="http.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<link rel="Shortcut Icon" type="image/x-icon" href="../Img/favicon.ico" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="../css/sweet-alert.css">
  <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
  <script>
    function cargar(div,desde){
      $(div).load(desde);
    }
  </script>
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
              <img src="../Img/Favicom.png" class="img-rounded" >
              </li>
              <li class="user-body">
           <?php     

              echo "<a href='#' style='font-family: Arial; text-align: center;'><span class='glyphicon glyphicon-user'></span> ".$_SESSION['nombre']."</a><br>";
            ?>
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="#" class=" exit-system-button btn btn-primary" data-href="../Eliminar/LogOut.php"><i><span style="color: white; font-family: Arial;">Cerrar Sesion</span></i></a>
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

 <div class="col-md-4" id="genero">
  <label style="font-family: Arial;">Genero:</label> <br>
  <label class="radio-inline"><input type="radio" name="genero" required>Masculino</label>
  <label class="radio-inline"><input type="radio" name="genero" required>Femenino</label>
  </div> 

<div class="col-md-4">
  <label style="font-family: Arial;">Teléfono:</label>
  <input type="tel" name="notelef" pattern="[0-9]{10}" class="form-control" required max="60" title="Utiliza un Numero de 9 Digitos"><br>
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
 <div class="col-md-12">
  <h3 style="color: #3c8dbc;">Fecha de Nacimiento</h3>
</div>
  
  <!-- Dia -->
<div class="col-md-4">
  <label style="font-family: Arial;">Dia</label>
   <select class="form-control" id="dia" name="dia" onChange="cambiar()">
      <?php 
        for($i=1; $i<32; $i++){
          echo "<option value='".$i."'>".$i."</option>\n";
        }
      ?>
   </select>
</div>

<div class="col-md-4">
  <label style="font-family: Arial;">Mes</label>
  <select id="mes" class="form-control" name="mes" onChange="cambiar()">
      <option value="1">Enero</option>
      <option value="2">Febrero</option>
      <option value="3">Marzo</option>
      <option value="4">Abril</option>
      <option value="5">Mayo</option>
      <option value="6">Junio</option>
      <option value="7">Julio</option>
      <option value="8">Agosto</option>
      <option value="9">Septiembre</option>
      <option value="10">Octubre</option>
      <option value="11">Noviembre</option>
      <option value="12">Diciembre</option>
   </select>
</div>
<div class="col-md-4">
  <label style="font-family: Arial;">Año</label>
   <select class="form-control" name="ano" id="year" onChange="cambiar()">
      <?php 
        for($i=1950; $i<2012; $i++){
          echo "<option value='".$i."'>".$i."</option>\n";
        }
      ?>
   </select><br>
</div>
<div class="col-md-4">
  <label style="font-family: Arial;">Edad:</label>
  <input type="text" id="edad" name="edad" class="form-control" readonly="readonly" />
  <br>
  </div>  

 
<div class="col-md-12">
  <h3 style="color: #3c8dbc;">Dirección</h3>
</div> 

<div class="col-md-4">
  <label style="font-family: Arial;">País</label>
  <select class="form-control" required name="pais">
   <option value="0">Seleccione un país</option>
  <option value="España">España</option>
  <option value="Mexico">México</option>
  <option value="Argentina">Argentina</option>
  <option value="Peru">Perú</option>
  <option value="Colombia">Colombia</option>
  </select><br>
  </div>


<div class="col-md-4">
<label style="font-family: Arial;">Estado</label>
<select type="text" name="estado" id="estados" class="form-control" required>
<option value="0">Seleccione un Estado</option></select><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Municipio</label>
<select type="text" name="municipio" id="municipio" class="form-control" required>
<option value="0">Seleccione un Municipio</option></select><br>
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
  <label style="font-family: Arial;">Modo De Checar:</label>
  <select class="form-control" required name="modchecar">
  <option value="virtual">Virtual</option>
  <option value="presencial">Presencial</option>
  </select><br>
  </div>





<div class="col-md-4">

  <?php  
              $sql1="SELECT idhora, dia FROM hora_trabajo"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;">Horario:</label></td>
                <td> <select name="idhora" class="form-control">
                <option value="0">Seleccione horario</option>
                <br>
                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idhora"]."'>".$lista["dia"]."</option>"; 
  
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

<div class="col-md-4">
<label style="font-family: Arial;">Habilitado</label>
<select class="form-control" require name="habilitado">
<option value="1">Activar</option>
</select><br>
</div>



<div class="col-md-12">
<button type="submit" class="btn btn-primary" name="btn-upload">Registrar</button>
 <br><br><br>
</div>

        </form>
        
        <div class="col-md-12">
<a href="../Crud/CrudUsuarios.php"><button class="btn btn-primary">Ver Usuarios</button></a>
</div>

<?php

include("../Funciones/regisUsuario.php");
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




<script src="../js/estados.js"></script>

<script type="text/javascript" language="javascript">
     function cambiar(){
       var year = document.getElementById('year').value;
       var year_serv = <?php echo date('Y')?>;
 
       var edad = year_serv-year-1;
 
       if(document.getElementById('mes').value==<?php echo date('m')?>){
         if(document.getElementById('dia').value<=<?php echo date('d')?>){
           edad += 1;
          }
       }else if(document.getElementById('mes').value<=<?php echo date('m')?>){
         edad += 1;
       }
 
       document.getElementById('edad').value = edad;
     }
   </script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
<script src="../js/modernizr.js"></script>
<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../js/main.js"></script>
<script src="../js/sweet-alert.min.js"></script>      
<script src="../plugins/jQuery/jquery-3.1.1.min.js"></script>

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


