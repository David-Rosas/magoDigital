<!DOCTYPE html>
<html lang="es">
<head>
<title>Cruz Roja Barcelona</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
<?php include ("/opt/lampp/htdocs/proyectoUniversidad/admin/config.php"); ?>
<div class="contenedor-noticias-view">

<div class="noticias-centro">
<h2><?php echo $titulo;?></h2>
   <h2 id="noti-centro">Noticias</h2>
<div class="linea"></div>
<?php foreach($resultados as $post ): ?>
<div class="post">
	<article>
		<h3 class="titulo"><a href="single.php?id=<?php echo $post['id']?>"><?php echo $post['titulo']?></a></h3>
		<p class="fecha"><?php echo fecha($post['fecha'])?></p>
		<a href="single.php?id=<?php echo $post['id']?>">
			<img src="<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>" alt="">
		</a>
		<p class="extracto"><?php echo $post['extracto']?></p>
		<a href="single.php?id=<?php echo $post['id']?>" class="continuar">Leer mas</a>
		</article>
	</div>
	<?php endforeach; ?>
		
	</div>
	
<div id="ladoDerecho-index">
<a href="#"><img src="imagenes/banner1.jpg"></a>

</div>

</div>
<div class="contenedor-paginacion">
<?php require("/opt/lampp/htdocs/proyectoUniversidad/paginacion.php");?>
</div>

</html>