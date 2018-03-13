<?php include("../header.php"); 
include 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if (!$conexion){
	header('Location: error.php');

}

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$asunt = limpiarDatos($_POST['asunt']);
	$email = limpiarDatos($_POST['email']);
	$coment = limpiarDatos($_POST['coment']);
	$emailA = "cruzroja@gmail.com";
		
	if($asunt ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca asunto.
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
        
    }else if($coment ==''){
    ?>
      <div id="container-body">
	<div class="alert alert-warning">
  		<strong>Error</strong> Introduzca un comentario.
			</div>' 
			</div>
	<?php	    
        
    }else{
	if(mail($emailA,$asunt,$coment,$email)){
        ?>
      <div id="container-body">
	<div class="alert alert-success">
  <strong>Exito!</strong> Email enviado con exito.
</div>
</div>
     <?php       
    }else{ 
      ?>
      <div id="container-body">
	<div class="alert alert-danger">
  <strong>!Error¡ Email no enviado.</strong>
</div>' 
</div>
<?php
}
}
}else{
	$id_articulo = id_articulo($_GET['id']);

	if (empty($id_articulo)) {
		header('Location: '.$ruta. '/admin/volunteer.admin.php');
	}

	$post = obtener_contact_por_id($conexion, $id_articulo);
	if(!$post){
		header('Location: '.$ruta. '/admin/volunteer.admin.php');
	}
	$post = $post[0];
}



include ("../views/respond.view.php");


include("../footer.php");
?>
