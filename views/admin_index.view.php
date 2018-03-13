<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet"  href="css/estilos.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
<?php require '../header.php'; ?>
<div id="container-body">

<div class="contenedor-noticias">

<div class="noticias-centro">
 <h2 id="noti-centro">Panel de Control</h2>
 <div class="linea"></div>
	<img id="imagen-admin" src="imagenes/administrador-web.jpg">
	</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="article.php" >Artículos</a></div>
	<div class="sesion-btn" ><a href="galeria.php" >Galerías</a></div>
	<div class="sesion-btn" ><a href="slider.php" >Slider</a></div>
    <div class="sesion-btn" ><a href="volunteer.admin.php" >Voluntarios</a></div>
    <div class="sesion-btn" ><a href="contact.admin.php" >Contactos</a></div>
    <div class="sesion-btn" ><a href="suscrit.admin.php" >Suscritos</a></div>
	</div>
</div>
</div>

<?php require '../footer.php'; ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../javascript/materialize.min.js"></script>
</body>
</html>
