<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/modernizr.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/main.js"></script>
<script src="js/sweet-alert.min.js"></script>      
<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<script src="../plugins/jQuery/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="css/sweet-alert.css">
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
</body>
</html>
<?php


$user_id=null;
$sql1= "SELECT * from usuarios WHERE habilitado='1'";
$query = $mysqli->query($sql1);
?>

<?php if($query->num_rows>0):?>
  <th>No.</th>
  <th>Nombre</th>
  <th>Edad</th>
  <th>Email</th>
  <th>Dia</th>
  <th>Mes</th>
  <th>Año</th>
  <th>Fecha de Alta</th>
  <th>Fecha de Baja</th>
  <th>No. de Seguro</th>
  <th>Función</th>
<?php while ($r=$query->fetch_array()):?>
<tr>
  <td><?php echo $r["idusuario"]; ?></td>
  <td>

<?php
  echo "<a href='VerUsuario.php?&idusuario=".$r['idusuario']."'>";
?>

  <?php echo $r["nombre"]; ?> <?php echo $r["apellidom"]; ?>
  </td>

  <td><?php echo $r["edad"]; ?></td>
  <td><?php echo $r["correo"]; ?></td>
  <td><?php echo $r["dia"]; ?></td>
  <td><?php echo $r["mes"]; ?></td>
  <td><?php echo $r["ano"]; ?></td>
  <td><?php echo $r["fechaalta"]; ?></td>
  <td><?php echo $r["fechabaja"]; ?></td>
  <td><?php echo $r["noseguro"]; ?></td>
  <td style="width:150px;">
     <?php 

    echo "<li class='tooltips-general exit-system-button' style='list-style: none;' data-href='PHP/EliminarU.php?idusuario=" .$r['idusuario'] ."''><a class='btn btn-danger' style='width:100px;' href='../Eliminar/EliminarU.php?idusuario=" .$r['idusuario'] ."'><span class='glyphicon glyphicon-remove'></span> Desactivar</a></li><br>";  

echo "<a class='btn btn-primary' style='width:100px;' href='../Modificar/ModificarUsuario.php?idusuario=".$r['idusuario']."'> <span class='glyphicon glyphicon-pencil'></span> Editar</a> "; 
 ?>
  </td>
</tr>
<?php endwhile;?>

<?php else:?>
  <p class="alert alert-danger" style="opacity: .5">No hay comentarios aún hechos en la página</p>
<?php endif;?>
