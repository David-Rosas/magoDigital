<?php session_start();
include 'config.php';
require '../functions.php';
comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: ../error.php');

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$extracto = $_POST['extracto'];
	$id = limpiarDatos($_POST['id']);
	$thumb_guardada = limpiarDatos($_POST['thumb_guardada']);
	$thumb = $_FILES['thumb'];

	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada;

	}else{

	$archivo_subido = '../' . $blog_config['carpeta_slider'] . $_FILES['thumb']['name'];
	move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
	$thumb = $_FILES['thumb']['name'];
	}

$statement = $conexion->prepare('UPDATE slider SET extracto = :extracto, thumb = :thumb WHERE id = :id'
	);

$statement->execute(array(
	':extracto' => $extracto,
	':thumb' => $thumb,
	':id' => $id
	));

header('Location: '. $ruta . '/admin/slider.php');

}else{
	$id_articulo = id_articulo($_GET['id']);

	if (empty($id_articulo)) {
		header('Location: '.$ruta. '/admin/slider.php');
	}

	$slider = obtener_slider_por_id($conexion, $id_articulo);
	if(!$slider){
		header('Location: '.$ruta. '/admin/slider.php');
	}
	$slider = $slider[0];
}
require '../views/editar.view.slider.php';

?>