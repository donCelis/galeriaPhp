<?php 
	function conexion($db, $usuario, $contra){
		try{
			$conexionDb = new PDO('mysql:host=localhost;dbname='.$db, $usuario, $contra);

			//Nos devuelve la función con la conexión a la base de datos
			return $conexionDb;

		}catch (PDOException $e){
			return false;
		}
	}
 ?>