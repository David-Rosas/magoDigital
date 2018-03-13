<style>
    body{
        padding-top: 6px;
         
    }
    #fondo-navegacion{
        height: 37px !important;
    }
</style>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet"  href="css/estilos.css">
<link rel="stylesheet"  href="../medico/assets/css/material-dashboard.css">
<link rel="stylesheet"  href="../medico/assets/css/bootstrap.min.css">

<div class="contenedor-noticias">

<div class="noticias-centro">
 <h2 id="noti-centro">Panel de Control</h2>
 <div class="linea"></div>

<div id="container-body">
<div class="row">
	<div class="col-md-9">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Respuesta</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

  
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" value="<?php echo $post['email']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Asunto*</label>
    <div class="col-md-6">
      <input type="text" name="asunt" required class="form-control" id="name" placeholder="Asunto">
    </div>
  </div> 
            
    <div class="form-group">
    <label for="text" class="col-lg-2 control-label">Comentario*</label>
    <div class="col-md-6">
      <input type="text" name="coment" class="form-control" placeholder="Escribir aqui">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-danger">Responder</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
</div>
 
</div>
	<div id="ladoDerecho-index-single">
	<div class="cerrarSesion-btn"><a href="cerrar.php" >Cerrar Sesión</a></div>
	<div class="sesion-btn" ><a href="index.php" >Inicio</a></div>
	<div class="sesion-btn" ><a href="contact.admin.php" >Comentarios</a></div>
	</div>
</div>