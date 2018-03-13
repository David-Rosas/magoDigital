<?php
function conexion($bd_config){
	try{
	$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'],$bd_config['pass']);
		return $conexion;
	}catch(PDOException $e ){
		return false;
		}	
}
function limpiarDatos($datos){
$datos = trim($datos);
$datos = stripslashes($datos);
$datos = htmlspecialchars($datos);
return $datos;
}
function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}
function obtener_post($post_por_pagina, $conexion){
 $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
 if(pagina_actual() == 1){
 	$inicio = 0;
 }
 if(pagina_actual() == 2){
 	$inicio = 18;
 }
 if(pagina_actual() == 3){
 	$inicio = 36;
 }
  if(pagina_actual() == 4){
 	$inicio = 54;
 }
 if(pagina_actual() == 5){
 	$inicio = 72;
 }
 $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $inicio, $post_por_pagina");
 $sentencia->execute();
 return $sentencia->fetchAll();
}

function obtener_post2($post_por_pagina, $conexion){
 $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 1;
 if(pagina_actual() == 1){
 	$inicio = 6;
 }
 if(pagina_actual() == 2){
 	$inicio = 24;
 }
 if(pagina_actual() == 3){
 	$inicio = 42;
 }
  if(pagina_actual() == 4){
 	$inicio = 60;
 }
if(pagina_actual() == 5){
 	$inicio = 78;
 }
 
 $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $inicio, $post_por_pagina");
 $sentencia->execute();
 return $sentencia->fetchAll();
}

function obtener_post3($post_por_pagina, $conexion){
 $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 1;
if(pagina_actual() == 1){
 	$inicio = 12;
 }
 if(pagina_actual() == 2){
 	$inicio = 30;
 }
 if(pagina_actual() == 3){
 	$inicio = 48;
 }
  if(pagina_actual() == 4){
 	$inicio = 66;
 }
 if(pagina_actual() == 5){
 	$inicio = 84;
 }
 $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $inicio, $post_por_pagina");
 $sentencia->execute();
 return $sentencia->fetchAll();
}

function obtener_post4($post_por_pagina, $conexion){
 $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
 $randon = rand(0, 17);
  $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $randon, 6");
 $sentencia->execute();
 return $sentencia->fetchAll();
}

function obtener_post5($post_por_pagina, $conexion){
 $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
 $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY id DESC LIMIT $inicio, 1");
 $sentencia->execute();
 return $sentencia->fetchAll();
}

function obtener_imagen($imagen_por_pagina, $conexion){
 $inicio = (pagina_actual() > 1) ? pagina_actual() * $imagen_por_pagina - $imagen_por_pagina : 0;	
 $image = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM imagen ORDER BY id DESC LIMIT $inicio, $imagen_por_pagina");
 $image->execute();
 return $image->fetchAll();

}

function obtener_sliders($slider_por_pagina, $conexion){
 	
 $slider = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM slider ORDER BY id DESC LIMIT $slider_por_pagina");
 $slider->execute();
 return $slider->fetchAll();

}

function obtener_volunteers($volunteer_por_pagina, $conexion){
 	
 $volunteer = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM voluntario ORDER BY id DESC LIMIT $volunteer_por_pagina");
 $volunteer->execute();
 return $volunteer->fetchAll();

}

function obtener_contact($contact_por_pagina, $conexion){
 	
 $contact = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM contacto ORDER BY id DESC LIMIT $contact_por_pagina");
 $contact->execute();
 return $contact->fetchAll();

}

function obtener_suscrits($suscrits_por_pagina, $conexion){
 	
 $suscrit = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM suscribete ORDER BY id DESC LIMIT $suscrits_por_pagina");
 $suscrit->execute();
 return $suscrit->fetchAll();

}


function id_articulo($id){
	return (int)limpiarDatos($id);
}

function obtener_post_por_id($conexion, $id){
 $resultado = $conexion->query("SELECT * FROM articulos WHERE id= $id LIMIT 1");
 $resultado = $resultado->fetchAll();
 return ($resultado) ? $resultado : false;	
}
function obtener_imagen_por_id($conexion, $id){
 $resultado = $conexion->query("SELECT * FROM imagen WHERE id= $id LIMIT 1");
 $resultado = $resultado->fetchAll();
 return ($resultado) ? $resultado : false;	
}
function obtener_volunteer_por_id($conexion, $id){
 $resultado = $conexion->query("SELECT * FROM voluntario WHERE id= $id LIMIT 1");
 $resultado = $resultado->fetchAll();
 return ($resultado) ? $resultado : false;	
}

function obtener_contact_por_id($conexion, $id){
 $resultado = $conexion->query("SELECT * FROM contacto WHERE id= $id LIMIT 1");
 $resultado = $resultado->fetchAll();
 return ($resultado) ? $resultado : false;	
}

function obtener_suscrit_por_id($conexion, $id){
 $resultado = $conexion->query("SELECT * FROM suscribete WHERE id= $id LIMIT 1");
 $resultado = $resultado->fetchAll();
 return ($resultado) ? $resultado : false;	
}

function obtener_slider_por_id($conexion, $id){
 $resultado = $conexion->query("SELECT * FROM slider WHERE id= $id LIMIT 1");
 $resultado = $resultado->fetchAll();
 return ($resultado) ? $resultado : false;	
}


function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('y', $timestamp);
	$fecha = "$dia de ".$meses[$mes] . " del 20$year";
	return $fecha;
}
function numero_paginas($post_por_pagina, $conexion){
$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
$total_post->execute();
$total_post = $total_post->fetch()['total'];

$numero_paginas = ceil($total_post / $post_por_pagina);
return $numero_paginas;
}

function numero_paginas2($post_por_pagina, $conexion){
$total_post = $conexion->prepare('SELECT * FROM articulos');
$total_post->execute();
$count = $total_post->rowCount();	
$numero_paginas = ceil($count / $post_por_pagina);
return $numero_paginas;
}

function comprobarSession(){
	if(!isset($_SESSION['admin'])){
		header('Location: http://localhost/proyectoUniversidad/login.php');
	}
}

function sololetras($cadena){
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
for ($i=0; $i<strlen($cadena); $i++){
if (strpos($permitidos, substr($cadena,$i,1))===false){
//no es válido;
return false;
}
} 
//si estoy aqui es que todos los caracteres son validos
return true; 
}

function email($email){
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  return false;
    //no es valido
}else{
    return true;
 //si es valido   
}
}
?>