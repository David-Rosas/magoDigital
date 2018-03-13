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

$contacts = obtener_contact($blog_config['contact_por_pagina'], $conexion);
 if(!$contacts){
 	header('Location: ../error.php');
 }

require '../views/contact.admin.view.php';

?>