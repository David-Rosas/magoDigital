<?php session_start();
include ("admin/config.php"); 
include ("functions.php"); 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario = $_POST['username'];
	$password = limpiarDatos($_POST['password']);

	if($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']){
		$_SESSION['admin'] = $blog_admin['usuario'];
		header('Location: ' .$ruta. '/admin');

	}

}
?>
<!DOCTYPE html>

<head>
<title>Cruz Roja Barcelona</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/body.css">

</head>
<body>
<div id="container-body">

<?php include ("header.php"); ?>
<?php include("views/login.view.php"); ?>
<?php include("footer.php"); ?>
</div>
<script src="javascript/jquery.js"></script>


</body>

