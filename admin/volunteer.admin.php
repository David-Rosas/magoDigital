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

$volunteers = obtener_volunteers($blog_config['volunteer_por_pagina'], $conexion);
 if(!$volunteers){
 	header('Location: ../error.php');
 }

require '../views/volunteer.admin.view.php';

?>