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
<div id="ladoAbajo-index">
<h2>Galeria de fotos</h2><br>
<div class="session-imagenesGaleria">

<?php foreach($imagenes as $imagen): 
?>
      <div class="session-contenedor">
        <a href="#" target="_blank">
          <img class="imagenes-galeria" src="<?php echo $ruta ?>/galeria/<?php echo $imagen['thumb']?>" alt="lights">
          <div class="caption">
            <p class="extracto-imagen"><?php echo $imagen['extracto']?></p>
          </div>
        </a>
        <a class="sesion-btn" href="editar.galeria.php?id=<?php echo $imagen['id']; ?>">Editar</a>
		<a onclick="return confirmDel();" class="sesion-btn" href="borrar.imagen.php?id=<?php echo $imagen['id']; ?>">Borrar</a>
      </div>
  <?php endforeach; ?>
 </div>
  </div>
</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
	<div class="sesion-btn" ><a href="nuevo.galeria.php" >Nueva Imagen </a></div>
	</div>
</div>
<div class="contenedor-paginacion">
<?php require("../paginacion.imag.php");?>
</div>
</div>


<?php require '../footer.php'; ?>
<script type="text/javascript">
function confirmDel()
{
  var agree=confirm("¿Realmente desea eliminar la imagen? ");
  if (agree) return true ;
  return false;
}
    
</script>
</body>
</html>
