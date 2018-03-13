<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Cruz Roja Barcelona</title>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body>
  <div id="container-body">

<?php include ("header.php");?> 
<?php include("admin/config.php"); ?>
<?php include ("functions.php"); 
 $conexion = conexion($bd_config);
 if(!$conexion){
  header('Location: error.php');
  }
 
$imagenes = obtener_imagen(6, $conexion);
 ?> 
 
<?php include("views/galeria.view.php");?>
<!-- final de pagina-->
<?php include("footer.php"); ?>
</div>

</body>
</html>
