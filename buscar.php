<?php
include ("header.php");
include ("functions.php"); 
include("admin/config.php");

$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: error.php');
	}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){

	$busqueda = limpiarDatos($_GET['busqueda']);

	$statement = $conexion->prepare('SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda');

$statement->execute(array(':busqueda' => "%$busqueda%"));

$resultados = $statement->fetchAll();

		if(empty($resultados)){
			$titulo = 'No se encontraron articulos con el resultado: '. $busqueda;
		}
		else{
			$titulo = 'Resultado de la busqueda: '. $busqueda;
		}

}else{
	header('Location: ' .$ruta. '/index.php');

}
include("views/buscar.view.php");
include("footer.php");
?>