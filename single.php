<?php include ("admin/config.php"); ?>
<?php include ("functions.php"); ?>
	
<?php
$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if(!$conexion){
	header('Location: error.php');
}
if(empty($id_articulo)){
	header('Location: index.php');
}
$posts = obtener_post4($blog_config['post_por_pagina'], $conexion);
 if(!$posts){
 	header('Location: error.php');
 }

$post = obtener_post_por_id($conexion, $id_articulo);
if (!$post){
	header('Location: index.php');
}
$post = $post[0];


?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">

<title><?php echo $post['titulo']?></title>
 <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://mangodigital.de/single.php?id=<?php echo $post['id'];?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $post['titulo'];?>" />
  <meta property="og:description"   content="<?php echo htmlspecialchars($post['extracto']);?> "/>
  <meta property="og:image"         content="http://mangodigital.de/imagenes/<?php echo $post['thumb']?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="canonical" href="http://mangodigital.de/single.php?id=<?php echo $post['id'];?>" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83226111-2', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript"></script>
</head>
<body>
<div class="container">
<?php include_once("analyticstracking.php") ?>

<?php include ("header.php"); ?>

<?php include("views/single.view.php");?>
<!-- final de pagina-->
<?php include("footer.php"); ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="javascript/materialize.min.js"></script>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $(".button-collapse").sideNav();
                      });
</script>
</body>
</html>

