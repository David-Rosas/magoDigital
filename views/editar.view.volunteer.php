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
      <h4 class="title">Editar Voluntario</h4>
  </div>
  <div class="card-content table-responsive">

		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<input type="hidden" value="<?php echo $post['id']; ?>" name="id">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" value="<?php echo $post['name']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname"  class="form-control" id="lastname" value="<?php echo $post['lastname']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cedula*</label>
    <div class="col-md-6">
      <input type="text" name="cd"  class="form-control" id="lastname" value="<?php echo $post['cd']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> Hombre
</label>
<label class="checkbox-inline">
  <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> Mujer
</label>

    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-md-6">
      <input type="date" name="day_of_birth" class="form-control"  id="address1" value="<?php echo $post['day_of_birth']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="address1" value="<?php echo $post['address']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" value="<?php echo $post['email']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone1" value="<?php echo $post['phone']; ?>">
    </div>
  </div>
 <div class="form-group">
    <label for="sel1" class="col-lg-2 control-label">Seleccione categoria de voluntario:</label>
      <div class="col-md-6">
      <select class="form-control" name="category">
        <option value="Socorro">Socorro</option>
        <option value="Emergencia">Emergencia</option>
        <option value="Educación">Educación</option>
        <option value="Capacitación comunitaria">Capacitación comunitaria</option>
      </select>
     </div>
    </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-danger">Editar</button>
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
	<div class="sesion-btn" ><a href="volunteer.admin.php" >Voluntarios</a></div>
	</div>
</div>
    

    