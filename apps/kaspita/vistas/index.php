<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<style>
		
	</style>
	
	<script src="/web/libs/jquery-1.8.3.js" type="text/javascript"></script>
	<script>
		seleccionar=function(target){
			target=$(target);
			
			var incW=14;
			 var w=target.width();
			 var h=target.height();
			 var selector=$('.paginaActiva');
			 selector.css('background','white');
			 selector.css('width',w);
			 selector.css('height',h+incW);
			
			
			var offset=target.offset();					
			offset.top=offset.top-(incW/2);
			selector.offset(offset);
		}
		$(function(){
			var screen=window.screen;
			var sw= screen.availWidth;
			
			var imgW=0;
			if (sw > 1000){
				imgW=1000;
			}else{
				imgW=sw - 40;
			}
			
			$('.slider_1').width(imgW);
			$('.pagina').css('margin-left',(imgW/2) *-1);
			$('.slider_1 img').width(imgW);
			
			
			
		 // create an image object
		 objImage = new Image();
			 
		 // set what happens once the image has loaded 
		 objImage.onLoad=function(){
			alert('load');
			console.log("this"); console.log(this);
			$('.slidesContainer').height( this.height() );
		 };
			 
		 // preload the image file
		 objImage.src='/web/apps/kaspita/imagenes/slide_grande_1.png';

			
		
			
			var slides = $('.slider .slidesContainer > .slide');
			
			$('.slider .slidesContainer').css('width',imgW * slides.length);
			var items=$('.paginador a');
			
			$.each(items, function(index, value) {
			  $(value).click(function(){
				var offset=index*imgW * -1;
				idx=index;
				$('.slider .slidesContainer').css('margin-left',offset);				
			  });
			  
			});
			
			var numItems=5;
			var ancho=imgW;
			var idx=1;
			
			sliderShow=function(){
				setTimeout(function(){
					var offset=idx*ancho * -1;
					
					$('.slider .slidesContainer').css('margin-left',offset);						
					var target=$('.paginador .a-wrap');
					seleccionar(target[idx]);
					idx++;
					
					if (idx>=numItems) idx=0;
					sliderShow();
				}, 3000);
			}
			sliderShow();
			
			var target=$('.paginador .a-wrap');
			seleccionar(target[0]);
					
			var paginador=$('.paginador');
			var w,h;
			w=paginador.width();
			h=paginador.height();
			var fondoPaginador = $('.fondo-paginador');
			fondoPaginador.css('width',w);
			fondoPaginador.css('height',h);
			
			$('.paginador a').mouseout(function(e){
			
				 var selector=$('.selectorPagina');
				 selector.css('background','transparent');
			});
			$('.paginador .a-wrap').mouseenter(function(e){										
				 var target=$(e.target);
				 var idt=target.attr('cont');
				 target = $('.paginador div[idw="'+idt+'"]');
				 
				 var incW=14;
				 var w=target.width();
				 var h=target.height();
				 var selector=$('.selectorPagina');
				 selector.css('background','white');
				 selector.css('width',w);
				 selector.css('height',h+incW);
				
				
				var offset=target.offset();					
				offset.top=offset.top-(incW/2);
				selector.offset(offset);										
			});
			
			$('.paginador .a-wrap').click(function(e){
				 var target=$(e.target);
				
				  var idt=target.attr('cont');
				  target = $('.paginador div[idw="'+idt+'"]');
				 seleccionar(target);
				 
			});
		});
			
		
	</script>
	<link href="/web/apps/<?php echo $_PETICION->modulo; ?>/css/estilos.css" rel="stylesheet" type="text/css" />
	
	
</head>
<body >
	<div class="pagina">
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
		<div class="header">
		
				<div class='menubase'></div>
				<div class="menu_principal">
					
					
					<div class="items_wraper">
						<div class="menu_item activo"><a href="#">inicio</a></div>
						<div class="menu_item"><a href="#">nosotros</a></div>
						<div class="menu_item"><a href="#">portafolio</a></div>
						<div class="menu_item"><a href="#">servicios</a></div>
						<div class="menu_item"><a href="#">contacto</a></div>
					</div>
					
						
				</div>
				
		</div>
		




		<div class="sliderContainer">
			<a href="#siguiente" class="next" title="Siguiente"></a>
			<a href="#anterior" class="prev" title="Anterior"></a>

			<div class="slider slider_1">
				<div class="slidesContainer">
					<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.png" alt="Coche 01" /></div>
					<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.png" alt="Coche 01" /></div>
					<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.png" alt="Coche 01" /></div>
					<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.png" alt="Coche 01" /></div>
					<div class="slide"><img src="/web/apps/kaspita/imagenes/slide_grande_1.png" alt="Coche 01" /></div>
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
		
		<div id="disqus_thread"></div>		
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	
	<div>
</body>
</html>