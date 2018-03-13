<?php


?>
<div class="usuario">
  <h2>Inicia Sessión</h2>
   <hr>
  <p class="negrita">Bienvenido al sistema de adminitracción web</p>
  <form class="enLinea" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    <label class="label-username" for="username">Usuario</label>
  <div class="form-linea">
    <div class="image-form"><img src="imagenes/usuario.png"></div>
    <input type="text" class="form-control" id="username" name="username" placeholder="jose...">
  </div>
<label class="label-username" for="password">Contraseña</label>
  <div class="form-linea">
    <div class="image-form"><img src="imagenes/password.png"></div>
    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
  </div>
    <button type="submit" class="btn" value="iniciar Sesion">Iniciar</button>
</form> 
<br>
<br>
<a href="/proyectoUniversidad/medico"><p> Administración de citas</p></a>
</div>


