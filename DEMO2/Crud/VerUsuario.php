
<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:Index.php");
}
?>

<?php 
include("../Funciones/Conexion.php");?>
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
      <!-- Foto Llamdo Desde La Base De Datos -->

      <!-- Fin -->
<!-- Nombre Validado -->
       
<!-- Nombre Validado -->
      </div>
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


<br>      
<?php
   
        $mysqli=inicio();

  $id= $_GET['idusuario'];

$sql = ("SELECT * FROM usuarios where idusuario='".$id."'");
                 $query = $mysqli->query($sql);
    if($arreglo=mysqli_fetch_array($query)){    
 ?>


 <form action="registroUsuarios.php" method="post">

  <div class="col-md-4">
  <label style="font-family: Arial;">Nombre(s):</label>
  <?php
  echo "<input type='text' name='nombre' class='form-control' readonly='readonly' required value='".$arreglo['nombre']."'>"; 
  ?><br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Apellido Paterno:</label>
  <?php
   echo "<input type='text' name='apellidop' readonly='readonly' class='form-control' required value='".$arreglo['apellidop']."'>";
  ?><br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Apellido Materno:</label>
  <?php
  echo "<input type='text' readonly='readonly' name='apellidom' class='form-control' required value='".$arreglo['apellidom']."'>";
  ?><br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Genero:</label> <br>
  <label class="radio-inline"><input type="radio" name="genero" required="">Masculino</label>
  <label class="radio-inline"><input type="radio" name="genero" required="">Femenino</label>
  </div> 

<div class="col-md-4">
  <label style="font-family: Arial;">Teléfono:</label>
  <?php
  echo "<input type='tel' name='notelef' readonly='readonly' pattern='[0-9]{10}' class='form-control' required  value='".$arreglo['notelef']."'>";
  ?>
  <br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Correo:</label>
  <?php
  echo "<input type='email' name='correo' readonly='readonly' class='form-control' required value='".$arreglo['correo']."'>";
  ?>
  <br>
  </div>

  <div class="col-md-4">
  <label style="font-family: Arial;">Contraseña:</label>
  <?php
  echo "<input type='password' readonly='readonly' name='contrasena' class='form-control' required value='".$arreglo['contrasena']."'>";
  ?>
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
   <?php
  echo "<input type='number' name='edad' readonly='readonly' class='form-control' required value='".$arreglo['edad']."'>";
  ?>
  </div>  

<div class="col-md-4">
<label style="font-family: Arial;">Pais</label>
<?php
 echo "<input type='text' class='form-control' readonly='readonly' name='pais' list='paises' required value='".$arreglo['pais']."'>";
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
 echo "<input type='text' name='municipio' readonly='readonly' class='form-control' required value='".$arreglo['municipio']."'>";
?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Calle</label>
<?php
echo "<input type='text' name='calle' readonly='readonly' class='form-control' required value='".$arreglo['calle']."'>";
?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">C.P</label>
<?php
 echo "<input type='text' name='cp' readonly='readonly' class='form-control' required value='".$arreglo['cp']."'>";
?>
<br>
</div>


<div class="col-md-12">
  <h3 style="color: #3c8dbc;">Datos Laborales</h3>
 </div> 

<div class="col-md-4">

   <?php  
              $sql1="SELECT idempresa, nombre FROM empresa"; 
              $query = $mysqli->query($sql1);?> 
               <label style="font-family: Arial;"> Empresa:</label>
               <select name="idempresa" class="form-control" disabled>
                <option value="0" >Seleccione empresa</option>
                <br>

                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idempresa"]."'>".$lista["nombre"]."</option>";                  
            ?>


  </select> <br>
      </div>

<div class="col-md-4">
<label style="font-family: Arial;">Fecha de Alta:</label>
<?php
echo "<input type='date' name='fechaalta' disabled class='form-control' required value='".$arreglo['fechaalta']."' >";
?><br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Fecha de Baja:</label>
<?php
 echo "<input type='date' name='fechabaja' disabled class='form-control' value='".$arreglo['fechabaja']."'>";
 ?><br>
</div>
<div class="col-md-4">

<?php  
              $sql1="SELECT idgrupo, nombre FROM grupo"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;"> Grupo:</label></td>
                <td> <select name="idgrupo" class="form-control" disabled>
                <option value="0">Seleccione grupo</option>
                <br>
                  <?php 
                 while($lista=mysqli_fetch_array($query)) 
                    echo "<option  value='".$lista["idgrupo"]."'>".$lista["nombre"]."</option>"; 
  
            ?>
           </td>
      </select>
  </div>
<br>
<div class="col-md-4" >
<label style="font-family: Arial;" >Numero de Seguro:</label>
<?php
 echo "<input type='text'  name='noseguro' class='form-control' disabled required  value='".$arreglo['noseguro']."'>";
?>
<br>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Modo De Checar</label>
  <select class="form-control" disabled name="modchecar">
  <option value="?"></option>
  <option value="1">Normal</option>
  <option value="2">Presencial</option>
  </select><br>
</div>
<div class="col-md-4">
  <?php  
              $sql1="SELECT idhora, tipoturno FROM hora_trabajo"; 
              $query = $mysqli->query($sql1);?> 
                <td> <label style="font-family: Arial;"> Horario:</label></td>
                <td> <select name="idhora" class="form-control" disabled>
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
<?php
 echo "<input type='text' name='puesto' disabled class='form-control' required value='".$arreglo['puesto']."'>";
?>
<br>
</div>

<div class="col-md-12">
  <h3 style="color: #3c8dbc;">Contactos de Emergencia</h3>
  </div>

  <div class="col-md-4">
<label style="font-family: Arial;">Contacto 1:</label>
<?php
 echo "<input type='text' name='contac1' disabled pattern='[0-9]{10}' class='form-control' required value='".$arreglo['contac1']."'>";
?>
</div>

<div class="col-md-4">
<label style="font-family: Arial;">Contacto 2:</label>
<?php
echo "<input type='tel' pattern='[0-9]{10}' disabled name='contac2' class='form-control' required  value='".$arreglo['contac2']."' >";
 }
?><br>
</div>

<div class="col-md-12">
  <a class='btn btn-primary' style='width:100px;' href='../Crud/CrudUsuarios.php'> <span class="fa fa-reply"></span> Regresar</a>
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