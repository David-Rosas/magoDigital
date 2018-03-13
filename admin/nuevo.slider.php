<?php session_start();
include 'config.php';
require '../functions.php';
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: ../error.php');

}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$extracto = $_POST['extracto'];
	$thumb = $_FILES['thumb']['tmp_name'];

	$archivo_subido = '../' . $blog_config['carpeta_slider'] . $_FILES['thumb']['name'];

	move_uploaded_file($thumb, $archivo_subido);

	$statement = $conexion->prepare('INSERT INTO slider (id, extracto, thumb) VALUES (null, :extracto, :thumb)');

	$statement->execute(array(
		':extracto' => $extracto,
		':thumb' => $_FILES['thumb']['name']
		)); 

	header('Location: '. $ruta . '/admin/slider.php');
}

require '../views/nuevo.slider.view.php';

?>