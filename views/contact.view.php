<style>
    body{
        padding-top: 6px;
         
    }
    #fondo-navegacion{
        height: 37px !important;
    }
</style>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet"  href="medico/assets/css/material-dashboard.css">
<link rel="stylesheet"  href="medico/assets/css/bootstrap.min.css">
<div id="container-body">
<div class="row">
	<div class="col-md-12">
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Contacto</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-md-6">
      <input type="text" name="lastname"  class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone1" placeholder="Teléfono">
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
      <button type="submit" class="btn btn-danger">Enviar</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
</div>