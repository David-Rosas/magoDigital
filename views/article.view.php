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

<?php foreach($posts as $post):?>

	<div class="post">
	<article>
		<h2 class="titulo"><?php echo $post['id'].'.-'.$post['titulo'];?></h2>
		<p class="fecha"><?php echo fecha($post['fecha'])?></p>
		<a href="">
			<img src="<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>" alt="">
		</a>
		<p class="extracto"><?php echo $post['extracto']?></p>
		<a class="sesion-btn" href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
		<a class="sesion-btn" href="../single.php?id=<?php echo $post['id']; ?>">Ver</a>
		<a class="sesion-btn" onclick="return confirmDel();" href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
	</article>
	</div>
	<?php endforeach; ?>
		
	</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
    <div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
	<div class="sesion-btn" ><a href="nuevo.php" >Nuevo Artículo</a></div>
	</div>
</div>
</div>
<div class="contenedor-paginacion">
<?php require("../paginacion.admin.php");?>
</div>

<?php require '../footer.php'; ?>

<script type="text/javascript">
function confirmDel()
{
  var agree=confirm("¿Realmente desea eliminar el articulo? ");
  if (agree) return true ;
  return false;
}
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../javascript/materialize.min.js"></script>
</body>
</html>
