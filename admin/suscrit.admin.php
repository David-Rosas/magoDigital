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

$suscrits = obtener_suscrits($blog_config['suscrits_por_pagina'], $conexion);
 if(!$suscrits){
 	header('Location: ../error.php');
 }

require '../views/suscrit.admin.view.php';

?>