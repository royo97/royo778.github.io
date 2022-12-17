<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM productos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			







			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?php echo $row['id']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Categoria" class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
					<select class="form-control" id="Categoria" name="Categoria">

					<option value="SOLTERO" <?php if($row['estado_civil']=='SOLTERO') echo 'selected'; ?>>SOLTERO</option>
							<option value="CASADO" <?php if($row['estado_civil']=='CASADO') echo 'selected'; ?>>CASADO</option>
							<option value="OTRO" <?php if($row['estado_civil']=='OTRO') echo 'selected'; ?>>OTRO</option>


							<option value="Lacteos" <?php if($row['Categoria']=='Lacteos') echo 'selected'; ?>  >Lacteos</option>
							<option value="Granos" <?php if($row['Categoria']=='Granos') echo 'selected'; ?>  >Granos</option>
							<option value="Carnes" <?php if($row['Categoria']=='Carnes') echo 'selected'; ?> >Carnes</option>
							<option value="Mekatos" <?php if($row['Categoria']=='Mekatos') echo 'selected'; ?> >Mekatos</option>
							<option value="Gaseosas" <?php if($row['Categoria']=='Gaseosas') echo 'selected'; ?> >Gaseosas</option>
							<option value="Cacharreria" <?php if($row['Categoria']=='Cacharreria') echo 'selected'; ?> >Cacharreria</option>
							<option value="Verduras" <?php if($row['Categoria']=='Verduras') echo 'selected'; ?> >Verduras</option>
							<option value="Otros"  <?php if($row['Categoria']=='Otros') echo 'selected'; ?> >Otros</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="precio" value="<?php echo $row['precio']; ?>" required>
					</div>
				</div>
				

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>


		</div>
	</body>
</html>