<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no,
	initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/783c1a747e.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/estilos.css">
	<title>¿Dónde viene?</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">¿Donde viene?</a></p>
			</div>
			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>
				<nav class="menu">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="contacto.php">Contacto<i class="icono fa fa-envelope"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
