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
<div id="ladoAbajo-index">
<h2>Galeria slider</h2><br>
<div class="session-imagenesGaleria">

<?php foreach($sliders as $slider): 
?>
      <div class="session-contenedor">
        <a href="#" target="_blank">
          <img class="imagenes-galeria" src="<?php echo $ruta ?>/slider/<?php echo $slider['thumb']?>" alt="lights">
          <div class="caption">
            <p class="extracto-imagen"><?php echo $slider['extracto']?></p>
          </div>
        </a>
        <a class="sesion-btn" href="editar.slider.php?id=<?php echo $slider['id']; ?>">Editar</a>
		<a class="sesion-btn" onclick="return confirmDel();" href="borrar.slider.php?id=<?php echo $slider['id']; ?>">Borrar</a>
      </div>
  <?php endforeach; ?>
 </div>
  </div>
</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
	<div class="sesion-btn" ><a href="nuevo.slider.php" >Nuevo slider </a></div>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../javascript/materialize.min.js"></script>
</body>
</html>
