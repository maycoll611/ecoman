
<div class="col-md" id="">
	<!-- nvbar de la pagina -->
	<div class="row nav sticky-top">
		<div class="col-md-3 sticky-top px-3 py-0">
			<img class="stiky-top position-absolute animated bounceInLeft slow d-none d-lg-inline" src="<?php echo site_url('bootstrap/imagenes/logo4.png') ?>">
		</div>
		<!-- <div class="col-md-2 text-center py-2">
			<div class="col-md-12 text-center">
				<h2 class="m-0">ECOMAN</h2>
			</div>
			<div class="col-md-12 text-center" >
				<span style="font-size: 8px; m-0">ECOLOGIA Y MANTENIMIENTO</span>
			</div>
		</div> -->

		<div class="col-md-9">
			<div class="row ">
				<div class="col-md-12">
					<div class="float-right text-md">
						<a href="#" class="d-none d-inline encabezado text-serif">Trabaja con nosotros</a>
						<span class="">|</span>
						<a href="#" class="d-none d-inline encabezado">transparencia</a>
						<span class="">|</span>
						<a href="#" class="d-none d-inline encabezado">Contactenos</a>
					</div>
				</div>
			</div>

			<div class="row ">
				<div class="col-md-10">
					<div class="row d-flex justify-content-between text-center">
						<div id="inicio" class="col text-md p-2 px-4 nav-item rounded-top animated bounceInDown  nav-item-active"  style="width: auto; clear: none;">
			 				<span class="fa fa-home"></span><label class="mb-0 d-none d-lg-inline"> Inicio</label>
						</div>
						<div id="empresa" class="col text-md p-2 px-4 nav-item rounded-top animated bounceInDown slow"  style="width: auto; clear: none;">
			 				<span class="fa fa-tools"></span><label class="mb-0 d-none d-lg-inline"> Empresa</label>
						</div>
						<div id="servicios" class="col text-md p-2 px-4 nav-item rounded-top animated bounceInDown slower"  style="width: auto; clear: none;">
			 				<span class="fa fa-wrench"></span><label class="mb-0 d-none d-lg-inline"> Servicios</label>
						</div>
						<div id="proyectos" class="col text-md p-2 px-4 nav-item rounded-top animated bounceInDown "  style="width: auto; clear: none;">
			 				<span class="fa fa-hammer"></span><label class="mb-0 d-none d-lg-inline"> Proyectos</label>
						</div>
						<div id="galeria" class="col text-md p-2 px-4 nav-item rounded-top animated bounceInDown slow" style="width: auto; clear: none;">
			 				<span class="fa fa-check"></span><label class="mb-0 d-none d-lg-inline"> Galeria</label>
						</div>
						<div id="contactos" class="col text-md p-2 px-4 nav-item rounded-top animated bounceInDown slower" style="width: auto; clear: none;">
			 				<span class="fa fa-address-book"></span><label class="mb-0 d-none d-lg-inline"> Contactos</label>
						</div>
					</div>
				</div>
					
				<div class="col-md-2 p-1 px-1 d-none d-md-inline">
					<div class="row justify-content-center ">
						<a href="" class="">
							<img class="d-md-inline social mx-1 animated rubberBand slower" height="30" src="<?php echo site_url('bootstrap/imagenes/fb.png') ?>">
						</a>
						<a href="https://api.whatsapp.com/send?phone=051933228639&text=Bienvenido...!" target="_blanck" class="">
							<img class="d-md-inline social mx-1 animated rubberBand slower" height="30" src="<?php echo site_url('bootstrap/imagenes/wp.png') ?>">
						</a>
						<a href="" class="">
							<img class="d-md-inline social mx-1 animated rubberBand slower" height="30" src="<?php echo site_url('bootstrap/imagenes/yt.png') ?>">
						</a>
						<a href="" class="">
							<img class="d-md-inline social mx-1 animated rubberBand slower" height="30" src="<?php echo site_url('bootstrap/imagenes/gmail.png') ?>">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cuerpo principal de la pagina -->
	<div class="row " id="contenido_principal">
		
	</div>		
</div>

<script type="text/javascript">

$("#contenido_principal").load('<?php echo site_url("principal/inicio"); ?>');


	$(".nav-item").on('click',function(){
		var valor = $(this).attr('id');
		$("#contenido_principal").load('<?php echo site_url("principal/'+valor+'"); ?>');
		$('.nav-item').removeClass('nav-item-active');
		$(this).addClass('nav-item-active');
	});

  $(".nav-item").on('click',function(){
  	
  });
</script>


