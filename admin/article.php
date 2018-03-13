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

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);

require '../views/article.view.php';

?>