<?php
	//Este bloque es creado para resaltar el menu de la pagina activa	
	 global $_PETICION;
	$menus=array();
	$menus[]=array(
		'idMenu'=>'inicio',
		'estado'=>'',
		'text'=>'inicio',
		'url'=>'/inicio'
	);
	$menus[]=array(
		'idMenu'=>'nosotros',
		'estado'=>'',
		'text'=>'nosotros',
		'url'=>'nosotros'
	);
	$menus[]=array(
		'idMenu'=>'portafolio',
		'estado'=>'',
		'text'=>'portafolio',
		'url'=>'/portafolio'
	);
	$menus[]=array(
		'idMenu'=>'servicios',
		'estado'=>'',
		'text'=>'servicios',
		'url'=>'/servicios'
	);		
?>

<div class="menu_principal">					
	<div class="items_wraper">
		<!--div class="menu_item activo"><a href="#">inicio</a></div>
		<div class="menu_item"><a href="#">nosotros</a></div>
		<div class="menu_item"><a href="#">portafolio</a></div>
		<div class="menu_item"><a href="#">servicios</a></div-->
		


	
	
		<?php
		$estado='activo';
		$claseBase='menu_item';
		$raiz= empty($_PETICION->modulo)? '/' : '/'.$_PETICION->modulo.'/';	
		for($i=0; $i<sizeof($menus); $i++ ){
			if ( $raiz.$_PETICION->controlador.'/'.$_PETICION->accion == $menus[$i]['url'] ){
				$menus[$i]['estado']=$estado;
			}
		}	
		for($i=0; $i<sizeof($menus); $i++){
			echo '<div '.$menus[$i]['idMenu'].' class="'.$claseBase.' '.$menus[$i]['estado'].'"><a href="'.$menus[$i]['url'].'">'.$menus[$i]['text'].'</a></div>';
		}
		?>
	</div>					
</div>