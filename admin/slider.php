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

$sliders = obtener_sliders($blog_config['slider_por_pagina'], $conexion);
 if(!$sliders){
 	header('Location: ../error.php');
 }

require '../views/slider.view.php';

?>