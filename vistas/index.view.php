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
		<i class="manosIcon fa fa-hand-o-right"></i>
		<h1 class="titulo">Galería PHP</h1>
		<a href="subir.php" class="subirBtn hvr-border-fade">
			<i class="fa fa-cog"></i>
		</a>
	</header>
	<section class="fotos">
		<div class="contenedor">
			<?php foreach ($fotos as $foto): ?>
				<!-- Ejecución del codigo -->
				<div class="imgP">
					<a href="foto.php?id=<?php echo $foto['id']; ?>" class=efectoGris>
						<img src="imgs/<?php echo $foto['rutaFoto']; ?>">
					</a>
				</div>
			<?php endforeach; ?>
			<!-- <div class="imgP">
				<a href="#" class="efectoGris">
					<img src="fotosBase/1s.jpg" alt="Foto">
				</a>
			</div>
			<div class="imgP">
				<a href="#" class="efectoGris">
					<img src="fotosBase/1s.jpg" alt="Foto">
				</a>
			</div>
			<div class="imgP">
				<a href="#" class="efectoGris">
					<img src="fotosBase/1s.jpg" alt="Foto">
				</a>
			</div>
			<div class="imgP">
				<a href="#" class="efectoGris">
					<img src="fotosBase/1s.jpg" alt="Foto">
				</a>
			</div> -->
			<div class="paginacion">
				<?php if($paginaActual > 1): ?>
					<!--Código-->
					<a class="hvr-border-fade izquierda" href="index.php?pagina=<?php echo $paginaActual - 1; ?>">
						<i class="fa fa-chevron-left"></i>
					</a>
				<?php endif; ?>
				<?php if($totalPaginas != $paginaActual): ?>
					<!--Código-->
					<a class="hvr-border-fade derecha" href="index.php?pagina=<?php echo $paginaActual + 1; ?>">
						<i class="fa fa-chevron-right"></i>
					</a>
				<?php endif; ?>
				<!-- <a href="#" class="hvr-border-fade izquierda">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a href="#" class="hvr-border-fade derecha">
					<i class="fa fa-chevron-right"></i>
				</a> -->
			</div>
		</div>
	</section>
	<footer>
		<p class="derechos">Galería PHP - 1023325</p>
	</footer>
</body>
</html>