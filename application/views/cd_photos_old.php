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
        	<h1>CD ATTRACTION!</h1>
        	<p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">CD & DVD</a></li>
                    <li>CD ATTRACTION</li>
                    </ul>
        </div>
</div><!-- End Position -->

<div class="margin_60 container">
		
		
		<table id="tablepaypal" width="1100x" border="1">
<tr>
<th>Descripción</th>
<th>Precio</th>
<th>Comprar Ahora</th>
</tr>

<?php foreach($resultadophoto as $fila){ ?>
<tr>
<td><?php echo $fila->item_name; ?></td>
<td>$ <?php echo $fila->amount; ?></td>
<td><a onclick="obtenerfoto(<?php echo $fila->item_number; ?>)" data-toggle="modal" data-target="#comprar_fotos"   class=" btn_1 green">Comprar Foto</a></td>
</tr>
<?php } ?>

</table>
		<div class="content">
        
		
                    <!-- End section 1 -->
            
			<!-- End section 2 -->
            
			<!-- End section 3 -->
            
			<!-- End section 4 -->
            
		</div><!-- End content -->
	</div><!-- End tabs -->
</div><!-- end container -->
<FORM id="frmpaypalfoto" name="frmpaypalfoto" ACTION="https://www.paypal.com/cgi-bin/webscr" METHOD="POST">
<INPUT TYPE="hidden" NAME="cmd"VALUE="_xclick">
<INPUT TYPE="hidden"id="business" NAME="business">
<INPUT TYPE="hidden" id="item_name" NAME="item_name">
<INPUT TYPE="hidden" id="item_number" NAME="item_number">
<INPUT TYPE="hidden"id="amount" NAME="amount">
<INPUT TYPE="hidden" id="currency_code" NAME="currency_code">
</FORM>
<!-- Modal Review -->
<div class="modal fade" id="comprar_fotos" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
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
								<input name="nombre" id="nombre" type="text" placeholder="Ingrese Su Nombre" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="email" id="email" type="email" placeholder="Ingrese Su E-mail" class="form-control">
							</div>
						</div>
					</div>
					<!-- End row -->
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<label>Fecha Visitante</label>
                                                                <input name="fecha" id="fecha"  class="form-control" type="date">
							</div>
						</div>
                                            <div class="col-md-6">
							<div class="form-group">
								<label>No. de Referencia</label>
					<input name="referencia" id="referencia" type="text"  class="form-control">
					
							</div>
						</div>
					</div>
					<!-- End row -->
					
					<div class="form-group">
			<textarea name="nota" id="nota" class="form-control" style="height:100px" placeholder="Comentario"></textarea>
					</div>
                                        
                                        <input name="TotalMonto" id="TotalMonto" type="hidden"  class="form-control">
                                         <input name="Descripcion" id="Descripcion" type="hidden"  class="form-control">
                                        <input type="button" id="btnprocesarcompra" value="Procesar Compra" class="btn_1" id="submit-review">
                                        
				</form>
			</div>
		</div>
	</div>
</div><!-- End modal review -->


