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
      <h4 class="title">Nuevo Voluntario</h4>
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
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname"  class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cedula*</label>
    <div class="col-md-6">
      <input type="text" name="cd"  class="form-control" id="lastname" placeholder="12345678">
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
      <input type="date" name="day_of_birth" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="address" class="form-control"  id="address1" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone" class="form-control" id="phone1" placeholder="Telefono">
    </div>
  </div>
 <div class="form-group">
    <label for="sel1" class="col-lg-2 control-label">Seleccione categoria de voluntario:</label>
      <div class="col-md-6">
      <select class="form-control" name="category">
        <option value="Socorro">Socorro</option>
        <option value="Emergencia">Salud</option>
        <option value="Educación">Juventud</option>
        <option value="Capacitación comunitaria">Busquedad</option>
         </select>
     </div>
    </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-danger">Agregarme como Voluntario</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
</div>