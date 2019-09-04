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
		<h1 class="tituloFoto">Publicar Foto</h1>
	</header>
	<section class="contenedor">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data" class="formulario">

			<label for="foto">Seleccionar foto</label>
			<input type="file" id="foto" name="foto">

			<label for="titulo">Título de la foto</label>
			<input class="iTitulo" type="text" id="titulo" name="titulo" placeholder="Nombre...">

			<label for="texto">Descripción</label>
			<textarea class="iTitulo" id="texto" name="texto" placeholder="Descripción..."></textarea>

				<?php if(isset($error)): ?>
				<p class="error">
					<?php echo $error; ?>
				</p>
			<?php endif ?>

			<input type="submit" value="Subir foto" class="submit hvr-border-fade">
		</form>
	</section>
	<footer>
		<p class="derechos">Galería PHP - 1023325</p>
	</footer>
</body>
</html>