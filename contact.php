<?php include("header.php"); 
include 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: error.php');

}


	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = limpiarDatos($_POST['name']);
	$lastname = limpiarDatos($_POST['lastname']);
	$email = limpiarDatos($_POST['email']);
	$phone = limpiarDatos($_POST['phone']);
	$coment = $_POST['coment'];
		
	if($name ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca un nombre.
			</div>' 
			</div>
	<?php	    
        
    }else if (sololetras($name) == false){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca solo letras en el campo nombre.
			</div>' 
			</div>
	<?php	    
        
    }else if($lastname ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca un apellido.
			</div>' 
			</div>
	<?php	    
        
    }else if (sololetras($lastname) == false){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca solo letras en el campo apellido.
			</div>' 
			</div>
	<?php	    
        
    }else if($email ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca un email.
			</div>' 
			</div>
	<?php	    
        
    }else if(email($email)==false){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca un formato coreccto de  email <strong>David@mail.com</strong> 
			</div>' 
			</div>
	<?php	    
        
    }else if($phone ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca un teléfono.
			</div>' 
			</div>
	<?php	    
        
    }else if(!is_numeric($phone)){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca solo números en el campo teléfono.
			</div>' 
			</div>
	<?php	    
        
    }else if($coment ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca un Comentario.
			</div>' 
			</div>
	<?php	    
        
    }else{
	$statement = $conexion->prepare('INSERT INTO contacto (id, name, lastname, email, phone, coment) VALUES (null, :name, :lastname, :email, :phone, :coment)');

	$statement->execute(array(
		':name' => $name,
		':lastname' => $lastname,
		':email' => $email,
		':phone' => $phone,
        ':coment' => $coment
		
		)); 
      ?>
      <div id="container-body">
	<div class="alert alert-success">
  <strong>Exito!</strong> Mensaje enviado con exito, pronto responderemos a su email.
</div>' 
</div>
<?php
}
}

	?>
	


	
<?php
include ("views/contact.view.php");


include("footer.php");
?>
