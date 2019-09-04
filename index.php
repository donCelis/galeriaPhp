<?php
	require_once 'funciones.php';

		$fotosXpagina = 8;

		//condiciones dentro de una variable
		// $variable = (condicion) ? ejecución : resultado;

		$paginaActual = (isset($_GET['pagina']) ? (int)$_GET['pagina'] :1);

$inicio = ($paginaActual > 1) ? $paginaActual * $fotosXpagina -$fotosXpagina : 0;

	$conexion = conexion('galeriaphp', 'root', 'root');

	if (!$conexion) {
		header('Location: error.php');
		die();
	}
//Preparar la consulta que nos a llamar los datos de la db
	$estado = $conexion->prepare(
			"SELECT SQL_CALC_FOUND_ROWS * FROM fotos ORDER BY id DESC LIMIT $inicio, $fotosXpagina"
		);

	//Ejecutar nuestra consulta
	$estado->execute();

	$fotos = $estado->fetchAll();

	if (!$fotos) {
		# code...
		header('Location: index.php');
	}
		
		//print_r($fotos[0]['rutaFoto']);

	//llamar el total de filas que tiene la base de datos
	//preparar nuestra consulta
	$estado = $conexion->prepare('SELECT FOUND_ROWS() as totalFilas');
	$estado->execute();

	$totalEnvios = $estado->fetch()['totalFilas'];

	//total paginas
	$totalPaginas =  ceil($totalEnvios / $fotosXpagina);

	/*echo $totalPaginas;

	print_r($fotos);

	print_r($totalEnvios);
	*/


	require_once 'vistas/index.view.php';
?>