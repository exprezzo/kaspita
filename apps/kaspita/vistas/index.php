<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<style>
		.activo{
			color:white;
		}
	</style>
	
	<script src="/web/libs/jquery-1.8.3.js" type="text/javascript"></script>
	
	<script src="/web/libs/jquery-1.8.3.js" type="text/javascript"></script>
	<?php $this->cargarJs('/js/main.js'); ?>
	
	<script>
		
			
		
	</script>
	<link href="/web/apps/<?php echo $_PETICION->modulo; ?>/css/estilos.css" rel="stylesheet" type="text/css" />
	
	
</head>
<body >
	<div class="pagina" >
		<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'kaspitastudios'; // required: replace example with your forum shortname

		var disqus_url='http://kaspita.exprezzo.tk/paginas/index';
		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
		<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=539603776063850";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-like" data-send="false" data-width="450" data-show-faces="false" data-font="arial"></div>
		<div style="border:#b8b8b8 1px solid;margin-top:10px;">
			<div class="header" style="margin-top:0 !important;">
			
					<div class='menubase'></div>
					<?php $this->mostrar('/menu_principal'); ?>
					
					
			</div>
		



		
		
			<div class="sliderContainer">
				<a href="#siguiente" class="next" title="Siguiente"></a>
				<a href="#anterior" class="prev" title="Anterior"></a>

				<div class="slider slider_1">
					<div class="slidesContainer">
						<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.jpg" alt="Coche 01" /></div>
						<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.jpg" alt="Coche 01" /></div>
						<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.jpg" alt="Coche 01" /></div>
						<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.jpg" alt="Coche 01" /></div>
						<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.jpg" alt="Coche 01" /></div>
					</div>
					<div class="fondo-paginador"></div>
					<div class="selectorPagina"></div>
					<div class="paginaActiva"></div>
					<div class="paginador">
						<div class="a-wrap" idw="idw1"><a cont="idw1" href="#">1</a></div>
						<div class="a-wrap" idw="idw2"><a cont="idw2" href="#">2</a></div>
						<div class="a-wrap" idw="idw3"><a cont="idw3" href="#">3</a></div>
						<div class="a-wrap" idw="idw4"><a cont="idw4" href="#">4</a></div>
						<div class="a-wrap" idw="idw5"><a cont="idw5" href="#">5</a></div>				
					</div>
					
				</div>
			</div> 
			<div class="explica" style="display:inline-block;margin-top:15px;margin-bottom:10px;">
				<div style="display:inline-block;margin-right:40px;vertical-align:top">
					<h3 style="display:inline;">&iquest;Quienes somos?</h3><br/>
					<span style="margin-top: 8px;display:inline-block;">Un equipo de amantes al diseño con <br/>una manera especial de hacer las cosas...</span>
				</div>
				<div style="display:inline-block;margin-right:40px;vertical-align:top">
					<h3 style="display:inline;">Nuestro trabajo</h3><br/>
					<span style="margin-top: 8px;display:inline-block;">Amamos lo que hacemos, y por ello<br /> tenemos excelentes resultados....</span>
				</div>
				<div style="display:inline-block;margin-right:40px;vertical-align:top">
					<h3 style="display:inline;">Nuestra Ubicaci&oacute;n</h3><br/>
					<span style="margin-top: 8px;display:inline-block;">En alguna parte de mazatlán, <br /> Sinaloa, Mexico...</span>
				</div>			
			</div>		
			<div style="display:block;margin-bottom:10px;"></div>
			<div style="background:#ffffff;padding-top:14px;padding-right:10px;">
				<div class="telefonos" style="background-image:url('<?php echo $this->getRutaBase(); ?>imagenes/telefonos.png'); width:60%;height:600px;float:left;" ></div>
				<div id="disqus_thread" style="width:30%;float:right;"></div>		
				<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
				<div style="clear:both;"></div>
			</div>
		</div>
	<div>
</body>
</html>