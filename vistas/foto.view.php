<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Iconos fuente -->
	<script src="https://use.fontawesome.com/988a356177.js"></script>
	<!-- Hover Css -->
	<link rel="stylesheet" href="css/hover-min.css">
	<!-- Mi estilos -->
	<link rel="stylesheet" href="css/estilos.css">
	<title>Galería PHP</title>
</head>
<body>
	<header>
		<i class="fotoIcon fa fa-picture-o"></i>
		<h1 class="tituloFoto">Nombre:
			<?php 
				if (!empty($foto['tituloFoto'])) {
					echo $foto['tituloFoto'];
				} else {
					echo $foto['rutaFoto'];
				}
			?>
		</h1>
	</header>
	<section class="contenedor">
		<div class="foto">
			<img src="imgs/<?php echo $foto ['rutaFoto']; ?>" alt="Foto">
			<p class="texto"><?php echo $foto['descripcion']; ?></p>
			<a href="index.php" class="regresar hvr-border-fade">
				<i class="fa fa-home"></i>
			</a>
		</div>
	</section>
	<footer>
		<p class="derechos">Galería PHP - 1023325</p>
	</footer>
</body>
</html>