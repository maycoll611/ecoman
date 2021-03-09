
<div class="container mt-3" style="">
	<div class="row">
		<div class="col-md-3 py-1">
			<div onClick="ver_foto('1')" class="row px-3 py-1 animated bounceInLeft slower">
				<img class="img-fluid"  src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
			<div class="row px-3 py-1 animated bounceInDown slow">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
		</div>
		
		<div class="col-md-3 py-1">
			<div class="row px-3 py-1 animated bounceInRight slower">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
			<div class="row px-3 py-1 animated bounceInLeft slow">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
		</div>
		<div class="col-md-6 py-1 px-3 animated bounceInRight slower">
			<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
		</div>
		<div class="col-md-6 py-1 px-3 animated bounceInLeft slow">
			<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
		</div>
		<div class="col-md-3 py-1">
			<div class="row px-3 py-1 animated bounceInUp slower">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
			<div class="row px-3 py-1 animated bounceInUp slow">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
		</div>
		
		<div class="col-md-3 py-1">
			<div class="row px-3 py-1 animated bounceInRight slower">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
			<div class="row px-3 py-1 animated bounceInRight slow">
				<img class="img-fluid" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>">
			</div>
		</div>
		
	</div>
</div>
<div class="modal fade" id="modal-imagen" tabindex="-1" aria-labelledby="myLargeModalLabel" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">hello world</div>
			<div class="modal-body">
				<div class="col-md-12 px-2">
					<!-- <img class="img-fluid" id="img_modal" src="<?php echo site_url('bootstrap/imagenes/plaza.jpg'); ?>"> -->
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function ver_foto(img){
$("#modal-imagen").modal('show');	
}

</script>


