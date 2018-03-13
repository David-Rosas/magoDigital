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
	$id = limpiarDatos($_POST['id']);
        
	if($cd ==''){
		?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca una cedula.
			</div>' 
			</div>
	<?php	
        

	}else if($name ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca un nombre.
			</div>' 
			</div>
	<?php	    
        
    }else if($lastname ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca un apellido.
			</div>' 
			</div>
	<?php	    
        
    }else if($day_of_birth ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca fecha nacimiento.
			</div>' 
			</div>
	<?php	    
        
    }else if($address ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca una direccion.
			</div>' 
			</div>
	<?php	    
        
    }else if($email ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca un email.
			</div>' 
			</div>
	<?php	    
        
    }else if($phone ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introdusca un telefono.
			</div>' 
			</div>
	<?php	    
        
    }else{
	$statement = $conexion->prepare('UPDATE voluntario SET name = :name , lastname = :lastname, cd = :cd, gender = :gender, day_of_birth = :day_of_birth, address = :address, email = :email, phone = :phone, category = :category WHERE id = :id');

	$statement->execute(array(
		':name' => $name,
		':lastname' => $lastname,
		':cd' => $cd,
		':gender' => $gender,
		':day_of_birth' => $day_of_birth,
		':address' => $address,
		':email' => $email,
		':phone' => $phone,
        ':category' => $category,
        ':id' => $id
		
		)); 
      ?>
      <div id="container-body">
	<div class="alert alert-success">
  <strong>Exito!</strong> Voluntario actualizado con exito.
</div>' 
</div>
<?php
}
}else{
	$id_articulo = id_articulo($_GET['id']);

	if (empty($id_articulo)) {
		header('Location: '.$ruta. '/admin/volunteer.admin.php');
	}

	$post = obtener_volunteer_por_id($conexion, $id_articulo);
	if(!$post){
		header('Location: '.$ruta. '/admin/volunteer.admin.php');
	}
	$post = $post[0];
}

	?>
	


	
<?php
include ("../views/editar.view.volunteer.php");


include("../footer.php");
?>
