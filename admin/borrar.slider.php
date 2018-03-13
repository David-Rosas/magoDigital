<?php session_start();
include 'config.php';
require '../functions.php';
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: ../error.php');

}

$id =limpiarDatos($_GET['id']);

if(!id){

	header('Location: ' . $ruta . '/admin/slider.php');
}

$statement = $conexion->prepare('DELETE FROM slider WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . $ruta . '/admin/slider.php');
?>