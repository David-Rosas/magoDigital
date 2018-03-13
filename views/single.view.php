<div class="row">
<div class="col m12 m9 l9">
          <div class="card">
          <span class="card-title"><h2 class="titulo-single"><?php echo $post['titulo']?></h2></span>
          <p class="fecha"><?php echo fecha($post['fecha'])?></p>
            <div class="card-image">
              <img src="<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>" alt="<?php echo $post['titulo']?>">
              
            </div>
            <div style="text-align:justify" class="extracto-single">
              <?php echo nl2br($post['texto']);?>
            </div>
            
          </div>
          <div class="col m12 m12 l12" ><h4 class="compartir-single" style="text-align: center; color: orange">¡No olvides Compartir en tus redes sociales!</h4>
          <div style="text-align: center; "><img style="width: 100px; height:100px;" src="imagenes/boton-flotante.png">
			</div>
			</div>
			
			<div class="col m12 m12 l12"  style="text-align: center;">
			<div style="margin-bottom: 6px;" class="fb-share-button" data-href="http://mangodigital.de/single.php?id=<?php echo $post['id'];?>" data-layout="button_count" data-size="large" data-mobile-iframe="true">
          <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmangodigital.de%2Fsingle.php?id=<?php echo $post['id'];?>&amp;src=sdkpreparse">Compartir</a></div>
          <div >

  <a class="twitter-share-button"
  href="http://mangodigital.de/single.php?id=<?php echo $post['id'];?>"
  data-size="large"
  data-text="<?php echo $post['titulo']?>"
  data-url="http://mangodigital.de/single.php?id=<?php echo $post['id'];?>"
  data-hashtags="Venezuela, <?php echo date("d");?>Sep,"
  data-via="mangodigitalve"
  data-related="twitterapi,twitter">
Tweet 
</a></div><div ><g:plus action="share" height="50" annotation="bubble"></g:plus></div></div>
        
                  
  </div> 
	
<div class="col s12 m3 l3" >	
	<div class="fb-page" data-href="https://www.facebook.com/Mango-Digital-112352689469485/" data-tabs="timeline" data-width="400" data-height="460" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Mango-Digital-112352689469485/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Mango-Digital-112352689469485/">Mango Digital</a></blockquote></div>
	<script type="text/javascript">
var ad_idzone = "2737450",
	 ad_width = "250",
	 ad_height = "250";
</script>
<a href="https://twitter.com/MangoDigitalVE" class="twitter-follow-button" data-show-count="false">Follow @MangoDigital</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <a class="twitter-timeline" href="https://twitter.com/MangoDigitalVE" data-width="100%"
  data-height="550">Tweets by MangoDigitalVE</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>   
<script type="text/javascript">
var ad_idzone = "2737390",
	 ad_width = "250",
	 ad_height = "250";
</script>
</div>
</div>
<div class="row">
<div class="col s12 m9 l9">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-top"
     data-ad-layout-key="-8h+1u-dq+eb+ga"
     data-ad-client="ca-pub-4443101842516353"
     data-ad-slot="8369352684"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div class="col s12 m3 l3">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-top"
     data-ad-layout-key="-8h+1u-dq+eb+ga"
     data-ad-client="ca-pub-4443101842516353"
     data-ad-slot="5635378137"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


</div>
</div>
<div class="row">
<div class="col s12 m9 l9">

<div><h4>Comentarios</h4></div>
<div class="g-comments" style="width: 950%;" 
     data-href="http://mangodigital.de/single.php?id=<?php echo $post['id'];?>"
     data-first_party_property="BLOGGER"></div>
</div>
<div class="col s12 m3 l3">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-top"
     data-ad-layout-key="-8h+1u-dq+eb+ga"
     data-ad-client="ca-pub-4443101842516353"
     data-ad-slot="7939830042"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="image-top"
     data-ad-layout-key="-8h+1u-dq+eb+ga"
     data-ad-client="ca-pub-4443101842516353"
     data-ad-slot="1921216608"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div class="row">
<div class="col s12 m9 l9 ">
<h4 id="noti-centro">Noticias Relacionadas</h4>
<?php foreach($posts as $post ): ?>
   <div class="col s12 m12 l6">
          <div class="card small">
            <div class="card-image">
              <img src="<?php echo $ruta ?>/imagenes/<?php echo $post['thumb']?>" alt="<?php echo $post['titulo']?>">
              <span class="card-title"><?php echo $post['titulo']?></span>
            </div>
            <div class="card-content">
              <p><?php echo $post['extracto']?></p>
            </div>
            <div class="card-action">
              <a href="single.php?id=<?php echo $post['id']?>">leer Mas</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>
    
<div class="col s12 m3 l3">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout="text-only"
     data-ad-layout-key="-gw-g+32-2d-52"
     data-ad-client="ca-pub-4443101842516353"
     data-ad-slot="5832541453"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=502569090094334";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
      window.___gcfg = {
        lang: 'es-ES',
        parsetags: 'onload'
      };
    </script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://apis.google.com/js/plusone.js"></script>
