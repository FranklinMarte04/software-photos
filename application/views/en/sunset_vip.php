<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="punta cana, experencia, parque, bavaro, republica dominicana, estadia, emocion, hospitalidad, adrenalina, excursion, atraccion, zipline, simulador vuelos, zorbing, globo, mountainbike, trampoline, segway">
    <meta name="description" content="parque en bavaro, parque en punta cana, atracciones, aventura, que hacer en bavaro, punta cana, republica dominicana">
    <meta name="author" content="Innovatech VS">
    <title>Bavaro Adventure Park</title>
   <?php echo $header; ?>
<script type="text/javascript">
function obtenerfoto(id){
$.ajax({
  url: '<?php echo base_url(); ?>shopping/buscar_paquete_foto',
  type: 'POST',
  dataType: 'json',
  data:'id='+id,
  success:function(msj){
jQuery.each(msj, function(index,valor) {
    $("#paquete_foto").html(valor["item_name"]);
  document.getElementById('item_name').value=valor["item_name"];
  document.getElementById('Descripcion').value=valor["item_name"];
  document.getElementById('item_number').value=valor["item_number"];
  document.getElementById('amount').value=valor["amount"];
  document.getElementById('TotalMonto').value=valor["amount"];
  document.getElementById('currency_code').value=valor["currency_code"];
  document.getElementById('business').value=valor["business"]; 
});

   }

  })

  }

  $(document).ready(function() {
    $("#btnprocesarcompra").click(function(e){
      var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
      $(".error").fadeOut().remove();
        if ($("#nombre").val() == "") {  
      $("#nombre").focus().after('<span class="error">Ingrese su nombre</span>');  
      return false;
        }
        /*
    if ($("#fecha").val() == "") {  
      $("#fecha").focus().after('<span class="error">Ingrese una Fecha</span>');   
      return false;  }

    if ($("#email").val() == "" || !emailreg.test($("#email").val())) {
      $("#email").focus().after('<span class="error">Ingrese un email correcto</span>');  
      return false;  
    }  
     if ($("#nota").val() == "") {  
      $("#nota").focus().after('<span class="error">Ingrese sus Comentarios</span>');  
      return false;  
    }  */
        e.preventDefault();
	$.ajax({
	url:'<?php echo base_url(); ?>'+'cliente/cliente_foto',
	type: 'POST',
	data: $('#frmcomprarphoto').serialize(),
        success:function(msj){
        if(msj == 'guardo'){
             document.frmpaypalfoto.submit();
	  }

	}

	});

    });

});
</script>
</head>
<body>
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
     <!-- Header================================================== -->
    <?php echo $menuprincipal; ?>
     <!-- End Header -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?Php echo base_url(); ?>public/img/portada.jpg" data-natural-width="1400" data-natural-height="470">    
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        	<h1>Sunset VIP Cruise</h1>
        	<p>Buy Photos</p>
        </div>
    </div>
</section><!-- End section -->
<div id="position">
    	<div class="container">
         	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Attractions</a></li>
                    <li>Sunset VIP Cruise</li>
                    </ul>
        </div>

</div><!-- End Position -->
<div class="margin_60 container">
		<table class="table table-bordered" id="tablepaypal" width="1100x" border="1">
<tbody><tr>
<th>Description</th>
<th>Price</th>
<th>Action</th>
</tr>
<tr>
<td>Sunset VIP Cruise</td>
<td>$ 79.00</td>
<td><a onclick="obtenerfoto(73)" data-toggle="modal" data-target="#comprar_fotos" class=" btn_1 green">Buy Now</a></td>
</tr>
</tbody></table>
		<div class="content">
    <!-- End section 1 -->
	<!-- End section 2 -->
			<!-- End section 3 -->
			<!-- End section 4 -->
		</div><!-- End content -->
	</div><!-- End tabs -->
</div><!-- end container -->
<form style="visibility: hidden;" id="frmpaypalfoto" name="frmpaypalfoto" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="hehotelpromotion@gmail.com">
<input type="hidden" name="lc" value="BM">
<input type="hidden" name="item_name" value="Sunset VIP Cruise">
<input type="hidden" id="precio" name="amount" value="79.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<!-- Modal Review -->
<div class="modal fade" id="comprar_fotos" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="top: 69px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="paquete_foto"></h4>
			</div>
			<div class="modal-body">
				<div id="message-review">
				</div>
				<form method="post"   id="frmcomprarphoto">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="nombre" id="nombre" type="text" placeholder="Enter your Name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="email" id="email" type="email" placeholder="Enter your E-Mail" class="form-control">
							</div>
						</div>
					</div>
					<!-- End row -->
			<div class="row">
					<div class="col-md-6">
							<div class="form-group">
								<label>Date of Stay</label>
           <input name="fechaphoto" id="fechaphoto" readonly  class="form-control" type="text">
							</div>
						</div>
           <div class="col-md-6">
							<div class="form-group">
								<label>Cantidad de Adultos</label>
					<input name="referencia" id="referencia" type="number"  class="form-control">
						</div>
						</div>
					</div>
				<div class="form-group">
			<textarea name="nota" id="nota" class="form-control" style="height:100px" placeholder="Comments"></textarea>
					</div>
               <input name="TotalMonto" id="TotalMonto" type="hidden"  class="form-control">
               <input name="Descripcion" id="Descripcion" type="hidden"  class="form-control">
               <input type="button" id="btnprocesarcompra" value="Process Order" class="btn_1" id="submit-review">
        	</form>

			</div>

		</div>

	</div>

</div><!-- End modal review -->
    <script type="text/javascript">
    $(document).ready(function(){
        var precio=79.00;
        var total;
        $("#referencia").change(function()
        {
            var adultos=$("#referencia").val();
            total=adultos * precio;
            // calculamos el total de todos los grupos
            $("#precio").val(total);
           });
    });
    </script>

<script type="text/javascript">
jQuery(document).ready(function($) {
  
});
</script>
<script type="text/javascript"></script>


