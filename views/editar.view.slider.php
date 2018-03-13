<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet"  href="css/estilos.css">
</head>
<body>
<?php require '../header.php'; ?>
<div id="container-body">

<div class="contenedor-noticias">

<div class="noticias-centro">
 <h2 id="noti-centro">Panel de Control</h2>
 <div class="linea"></div>

<div class="post-nuevo">
	<article class="articulo-nuevo">
		<h2 class="titulo">Editar Slider</h2>
		<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<input type="hidden" value="<?php echo $slider['id']; ?>" name="id">
			<input class="input-nuevo" type="text" name="extracto" value="<?php echo $slider['extracto']; ?>">
			<p></p>
			<input type="file" name="thumb">
			<input type="hidden" name="thumb_guardada" value="<?php echo $slider['thumb']; ?>">
			<input class="sesion-btn" type="submit" value="Modificar Imagen">
			
		</form>
		</article>
	</div>
	
		
	</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
	<div class="sesion-btn" ><a href="slider.php" >Sliders</a></div>
	</div>
</div>
</div>

<?php require '../footer.php'; ?>
</body>
</html>
