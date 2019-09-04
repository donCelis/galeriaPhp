<?php
	require_once 'funciones.php';

	//vamos a crear una variable que establezca la conexion a la base de datos anidada con la función y en ella vamos a asignar los parametros. Si no hay conexion entonces retorne false

	$conexion = conexion('galeriaphp', 'root', 'root');
	//var_dump($conexion);


	if (!$conexion) {
		header('Location: error.php');
		die();
	}

//Vamos a comprobar si el usuario envios los datos y si esos datos son los requeridos, que los campos no esten vacios y que lo que suba si sea una img 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' and !empty($_FILES)) {
		# code...
		$revisarImg = @getimagesize($_FILES['foto']['tmp_name']);

		//revisar que sea una img y no x tipo de archivo
		if ($revisarImg !== false) {

			//donde vamos a guardar las fotos
			$rutaCarpeta = 'imgs/';

			$rutaImagen = $_FILES['foto']['name'];

			$cambioNombre = rand()."_".$rutaImagen;

			$archivoSubido = $rutaCarpeta . $cambioNombre;

			//echo $archivoSubido;
			//funcion para almacenar las imgs en una carpeta
			move_uploaded_file($_FILES['foto']['tmp_name'], $archivoSubido);

			//Preparar las consultas hacia la base de datos
			$estado = $conexion->prepare('INSERT INTO fotos (tituloFoto, rutaFoto, descripcion) VALUES (:tituloFoto, :rutaFoto, :descripcion)');

			//Ejecutar la consulta preparada
			$estado->execute(array(
					':tituloFoto'=> $_POST['titulo'],
					':rutaFoto'=> $cambioNombre,
					':descripcion'=> $_POST['texto']
				));
				//
			header('Location: index.php');

			}else{
				$error= 'El archivo no es una imagen ó el archivo es muy pesado';
			}
}
	

	
	require_once 'vistas/subir.view.php';
?>