<!DOCTYPE html>
<html>
<head>
<style>
body{
        padding-top: 6px;
         
    }
    #fondo-navegacion{
        height: 37px !important;
    }
</style>
   
	<title></title>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet"  href="../medico/assets/css/material-dashboard.css">
<link rel="stylesheet"  href="../medico/assets/css/bootstrap.min.css">
</head>
<body>
<?php require '../header.php'; ?>
<div id="container-body">

<div class="contenedor-noticias">

<div class="noticias-centro">
 <h2 id="noti-centro">Panel de Control</h2>
 <div class="linea"></div>
<div id="ladoAbajo-index">
<h2>Contactos</h2><br>
<div class="session-imagenesGaleria">
<?php

		if(count($suscrits)>0){
			// si hay usuarios
			?>
<table class="table table-bordered table-hover">
			<thead>
			<th>Email</th>
			</thead>
<?php foreach($suscrits as $suscrit): 
?>
      <tr>
				<td><?php echo $suscrit['email']?></td>
                <td style="width:380px;">
                <a href="resp.suscrit.php?id=<?php echo $suscrit['id']; ?>" class="btn btn-warning btn-xs">Informar</a>
				<a onclick="return confirmDel();" href="borrar.suscrit.php?id=<?php echo $suscrit['id']; ?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
  <?php endforeach; ?>
   </table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay comentarios</p>";
		}


		?>
 
 
</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
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
  var agree=confirm("¿Realmente desea eliminar el suscriptor? ");
  if (agree) return true ;
  return false;
}
    
</script>
</body>
</html>
