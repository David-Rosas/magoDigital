<?php session_start();
//archivo index del admin
include 'config.php';
require '../functions.php';
$conexion = conexion($bd_config);

comprobarSession();
//comprobar conexion
if(!$conexion){
	header('Location: ../error.php');
}

require '../views/admin_index.view.php';

?>