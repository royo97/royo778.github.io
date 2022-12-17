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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id" name="id" placeholder="id" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="Categoria" class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
					<select class="form-control" id="Categoria" name="Categoria">
							<option value="Lacteos">Lacteos</option>
							<option value="Granos">Granos</option>
							<option value="Carnes">Carnes</option>
							<option value="Mekatos">Mekatos</option>
							<option value="Gaseosas">Gaseosas</option>
							<option value="Cacherreri">Cacharreria</option>
							<option value="Verduras">Verduras</option>
							<option value="Otros">Otros</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="precio">
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