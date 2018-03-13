<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>MangoDigital.de - Noticias de Venezuela sobre política y economía SIN CENSURA.</title>
<meta name="keywords" content="mangodigital, mangodigital.de, venezuela, noticias, maduro, chavismo, politica, resitencia, crisis economica, oposicion"/>
<meta name="description" content="Mango Digital te ofrece el mejor resumen de noticias sobre política y economía  SIN CENSURA."/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="https://mangodigital.de"/>
<meta property="og:locale" content="es_ES"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Mangodigital.de - Noticias sobre política y economía SIN CENSURA."/>
<meta property="og:description" content="Mango Digital te ofrece el mejor resumen de noticias sobre política y economía SIN CENSURA."/>
<meta property="og:url" content="https://Mangodigital.de/"/>
<meta property="og:site_name" content="Mangodigital.de"/>
<link rel="stylesheet"  href="css/body.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83226111-2', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MQ8B6K9');</script>
<!-- End Google Tag Manager -->
 
<script src="javascript/jquery.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4443101842516353",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
<div class="container">
<?php include_once("analyticstracking.php") ?>
	

<?php include ("header.php");?> 
<?php include("admin/config.php"); ?>
<?php include ("functions.php"); 
 $conexion = conexion($bd_config);
        if(!$conexion){
 	header('Location: error.php');
        }
 $posts = obtener_post($blog_config['post_por_pagina'], $conexion);
 if(!$posts){
 	header('Location: error.php');
 }

$posts2 = obtener_post2($blog_config['post_por_pagina'], $conexion);
 if(!$posts2){
 	header('Location: error.php');
 }
$posts3 = obtener_post3($blog_config['post_por_pagina'], $conexion);
 if(!$posts3){
 	header('Location: error.php');
 }
 $posts5 = obtener_post5($blog_config['post_por_pagina'], $conexion);
 if(!$posts5){
 	header('Location: error.php');
 }
?>


<?php
$sliders = obtener_sliders($blog_config['slider_por_pagina'], $conexion);
 if(!$sliders){
 	header('Location: error.php');
 }
 ?>	
<!-- Noticias recientes-->
	
<?php include("views/index.view.php");?>
<!-- final de pagina-->
<?php include("footer.php"); ?>
</div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ8B6K9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php foreach($posts5 as $post): ?>
<?php endforeach; ?>	
<script type="text/javascript">
	Notification.requestPermission();

function spawnNotification(theBody,theIcon,theTitle) {
  var options = {
      body: theBody,
      icon: theIcon
  }
  var n = new Notification(theTitle,options);
  setTimeout(n.close.bind(n), 10000); 
}
spawnNotification("<?php echo $post['extracto']?>", "<img src='<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>'>", "<?php echo $post['titulo']?>");

</script>
<script type="text/javascript">
$(document).ready(function(){
   $('.slider').slider();
    $(".button-collapse").sideNav();
                      });
  
</script>   
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=502569090094334";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="javascript/materialize.min.js"></script>
</body>

</html>
