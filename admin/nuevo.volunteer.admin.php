<?php include("../header.php"); 
include 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: error.php');

}


	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = limpiarDatos($_POST['name']);
	$lastname = limpiarDatos($_POST['lastname']);
	$cd = limpiarDatos($_POST['cd']);
	$gender = $_POST['gender'];
	$day_of_birth = $_POST['day_of_birth'];
	$address = limpiarDatos($_POST['address']);
	$email = limpiarDatos($_POST['email']);
	$phone = limpiarDatos($_POST['phone']);
	$category = $_POST['category'];
		
	if($cd ==''){
		?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca una cédula.
			</div>' 
			</div>
	<?php	
        

	}else if(!is_numeric($cd)){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca en la cédula solo números.
			</div>' 
			</div>
	<?php	    
        
    }else if($name ==''){
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
        
    }else if($day_of_birth ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca fecha nacimiento.
			</div>' 
			</div>
	<?php	    
        
    }else if($address ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca una dirección.
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
        
    }else{
	$statement = $conexion->prepare('SELECT * FROM voluntario WHERE cd LIKE :cd');
		$statement->execute(array(':cd' => $cd));
		
		$resultados = $statement->fetchAll();

		if($resultados){
			?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Cedula ya registrada, contactese con el adminitrador en el siguiente link: <h4><strong><a href="contact.php">Contacto</a></strong></h4>
			</div>' 
			</div>
	<?php	
		}else{
	$statement = $conexion->prepare('INSERT INTO voluntario (id, name, lastname, cd, gender, day_of_birth, address, email, phone, category) VALUES (null, :name, :lastname, :cd, :gender, :day_of_birth, :address, :email, :phone, :category)');

	$statement->execute(array(
		':name' => $name,
		':lastname' => $lastname,
		':cd' => $cd,
		':gender' => $gender,
		':day_of_birth' => $day_of_birth,
		':address' => $address,
		':email' => $email,
		':phone' => $phone,
        ':category' => $category
		
		)); 
      ?>
      <div id="container-body">
	<div class="alert alert-success">
  <strong>Exito!</strong> Registrado con exito.
</div>' 
</div>
<?php
}
}
}
	?>
	


	
<?php
include ("../views/nuevo.volunteer.view.php");


include("../footer.php");
?>
