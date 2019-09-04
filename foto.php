<?php
	require_once 'funciones.php';

	$conexion = conexion('galeriaphp', 'root', 'root');

	if (!$conexion) {
		header('Location: error.php');
		die();
	}

	$id = isset($_GET['id']) ? (int)$_GET['id'] :false;

	if (!$id) {
		# code...
		header('Location: index.php');
	}

	$estado = $conexion->prepare('SELECT * FROM fotos WHERE id=:id');

	$estado->execute(array(':id'=> $id));

	$foto = $estado->fetch();

	//print_r($foto);


	if (!$foto) {
		header('Location: index.php');
	}

	require_once 'vistas/foto.view.php';
?>