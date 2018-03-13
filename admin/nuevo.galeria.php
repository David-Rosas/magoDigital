<?php session_start();
include 'config.php';
require '../functions.php';
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: ../error.php');

}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$extracto = limpiarDatos($_POST['extracto']);
	$thumb = $_FILES['thumb']['tmp_name'];

	$archivo_subido = '../' . $blog_config['carpeta_galeria'] . $_FILES['thumb']['name'];

	move_uploaded_file($thumb, $archivo_subido);

	$statement = $conexion->prepare('INSERT INTO imagen (id, extracto, thumb) VALUES (null, :extracto, :thumb)');

	$statement->execute(array(
		':extracto' => $extracto,
		':thumb' => $_FILES['thumb']['name']
		)); 

	header('Location: '. $ruta . '/admin/galeria.php');
}

require '../views/nuevo.galeria.view.php';

?>