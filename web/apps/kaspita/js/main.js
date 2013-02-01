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
	// ajustar a pantalla			
	var we = $('.explica').width();						
	var sw = $(window).width();
	if (sw>we){
		$('.explica').css('position','relative');
		$('.explica').css('left','50%');
		$('.explica').width(we);
		$('.explica').css('margin-left' ,(we/2) * -1);
	}
	var imgW=0;
	if (sw > 1000){
		imgW=1000;
	}else{
		imgW=sw - 40;
	}			
	$('.slider_1').width(imgW);
	$('.pagina').css('margin-left',(imgW/2) *-1);
	$('.slider_1 img').width(imgW);
	
	// preload
	objImage = new Image();
	 
	 // set what happens once the image has loaded 
	 objImage.onLoad=function(){
		alert('load');		
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
	
	$('.slider img').css('display','inline-block');
});