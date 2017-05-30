<?php include("php/class.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scrip.js"></script>
</head>
<body >
	<div class="text-center title">
		<h1 class="label label-primary" style="background-color: #34495E">Examen Primer Parcial</h1>
	</div>
	<hr class="feature-divider">

	<div class="text-center">

		<!--boton para disparar el modal de nuevo contacto-->
		<button type="button" class="btn  btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Nuevo libro </button>

		<a href="index.php"  class="btn btn-primary btn-lg">Atras</a>

		
	</div>

	

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Nuevo Libro</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" method="post" id="registro">
						<div class="form-group">
							<label class="control-label col-sm-2" for="titulo">Titulo</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el titulo del libro" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="autor">Autor</label>
							<div class="col-sm-10"> 
								<input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="editorial">Editorial</label>
							<div class="col-sm-10"> 
								<input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tema">Tema</label>
							<div class="col-sm-10"> 
								<div class="selecttema">
									<select id="tema" class="form-control" name="tema"></select>
								</div>
							</div>
						</div>
						<div class="form-group"> 
							<div class="col-sm-offset-4 col-sm-6">
								<button type="submit" class="btn btn-success btn-block" id="registrar">Registrar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				</div>
			</div>

		</div>
	</div>

	6

	
	<br>
	

	<table class="table table-bordered table-responsive table-hover table-condensed">
		<thead>
			<tr>
				<th class="text-center">Id</th>
				<th class="text-center">Título</th>
				<th class="text-center">Autor</th>
				<th class="text-center">Editorial</th>
				<th class="text-center">Tema</th>
				<th class="text-center">Editar</th>
				<th class="text-center">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php $leo=new leo();
			$datos=$leo->listar();
			while ($row=$datos->fetch_array()) { ?>

			<tr>
				<td class="text-center"><?php echo $row['id']; ?></td>
				<td class="text-center"><?php echo $row['titulo']; ?></td>
				<td class="text-center"><?php echo $row['autor']; ?></td>
				<td class="text-center"><?php echo $row['editorial']; ?></td>
				<td class="text-center"><?php if ($row['id_tema']==1) {
					echo "Novela";
				}elseif ($row['id_tema']==2) {
					echo "Poesía";
				}elseif ($row['id_tema']==3) {
					echo "Ciencia Ficción";
				}elseif ($row['id_tema']==4) {
					echo "Infantil";
				} ?></td>
				<td class="text-center"><a href="modifica.php<?php echo "?id=".$row['id'];?>" class="btn btn-warning">Modificar</a></td>
				<td class="text-center"><a class="elimina" id="<?php echo $row['id'];?> "><button class="btn btn-danger">Eliminar</button></a></td>
			</tr>

			<?php } ?>
		</tbody>		
	</table>


</body>
</html>