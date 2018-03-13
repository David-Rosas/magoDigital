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

$imagenes = obtener_imagen($blog_config['imagen_por_pagina'], $conexion);
 if(!$imagenes){
 	header('Location: ../error.php');
 }

require '../views/galeria.view.php';

?>