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
<h2>Voluntarios</h2><br>
<div class="session-imagenesGaleria">
<?php

		if(count($volunteers)>0){
			// si hay usuarios
			?>
<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
            <th>Apellido</th> 
            <th>Cédula</th>    
			<th>Email</th>
			<th>Telefono</th>
            <th>Categoría</th>  
			
			</thead>
<?php foreach($volunteers as $volunteer): 
?>
      <tr>
				<td><?php echo $volunteer['name']?></td>
				<td><?php echo $volunteer['lastname']?></td>
				<td><?php echo $volunteer['cd']?></td>
                <td><?php echo $volunteer['email']?></td>
                <td><?php echo $volunteer['phone']?></td>
                <td><?php echo $volunteer['category']?></td>
				<td style="width:380px;">
				<a href="editar.volunteer.php?id=<?php echo $volunteer['id']; ?>" class="btn btn-warning btn-xs">Editar</a>
				<a onclick="return confirmDel();" href="borrar.volunteer.php?id=<?php echo $volunteer['id']; ?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
  <?php endforeach; ?>
   </table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay voluntario</p>";
		}


		?>
 
 
</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
	<div class="sesion-btn" ><a href="nuevo.volunteer.admin.php" >Nuevo Voluntario </a></div>
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
  var agree=confirm("¿Realmente desea eliminar al voluntario? ");
  if (agree) return true ;
  return false;
}
    
</script>
</body>
</html>
