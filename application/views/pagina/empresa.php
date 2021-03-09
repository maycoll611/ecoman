
<div class="container mt-2" >
	
	<div class="row my-4">
		<div class="col-md-6 p-4  text-center animated bounceInLeft slow" style="background-color: rgba(16,125,172,.8);">
			<img class="sombra-mision mb-4" src="<?php echo site_url('bootstrap/imagenes/mision.png'); ?>">
			<span class="text-white text-justify m-4">
				<h3 class="text-center">
					<strong>MISION:</strong>
				</h3>
				<h4>
					 Somos una empresa que brinda productos y servicios diferenciados competitivos y calidad con el fin de satisfacer a nuestros clientes
				</h4>
			</span>
		</div>
		<div class="col-md-6 p-4 text-center animated bounceInRight slower"  style="background-color: rgba(191,155,48,.9);" >
			<img class="sombra-mision mb-4" src="<?php echo site_url('bootstrap/imagenes/vision.png'); ?>">
			<span class="text-white text-justify m-4">
				<h3 class="text-center">
					<strong>VISION:</strong>
				</h3> 
					<h4> Ser la empresa líder y respetado en el mercado manteniendo los productos y servicios diferenciados competitivos y calidad
				</h4>
			</span>
		</div>
	</div>
	<div class="row my-4">
		<div class="col-md-12 px-0 animated bounceInUp slow">
			<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/empresa.png'); ?>">
		</div>
	</div>
</div>

<script type="text/javascript">

$('.carousel').carousel({
  interval: 4000
});

$(document).on('scroll',function(){
 var valor = $(document).scrollTop();
 if( valor>=150 || valor<=350){
 	$('.contenido2').removeClass('hide1');
 		$('.contenido2').fadeIn('slow');
 	
 }else{
 	
 }
});
</script>


