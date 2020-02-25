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
    <title>Special Package- Bavaro Adventure Park</title>
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
  document.getElementById('paquete').value=valor["item_name"];
  
  document.getElementById('id_paquete').value=valor["item_number"];
  document.getElementById('paqueteprecio').value=valor["amount"];
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
      return false; }
        
    if ($("#fechaphoto").val() == "") {  
      $("#fechaphoto").focus().after('<span class="error">Ingrese una Fecha</span>');   
      return false; }

    if ($("#email").val() == "" || !emailreg.test($("#email").val())) {
      $("#email").focus().after('<span class="error">Ingrese un email correcto</span>');  
      return false; }  
        e.preventDefault();

document.frmcomprarphoto.submit();
     

        

      

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
        	<h1><?php echo  $titulo; ?></h1>
        	<p>100% Fun for All</p>
        </div>
    </div>
</section><!-- End section -->
<div id="position">
    	<div class="container">
         	<ul>
                    <li><a href="#">Home</a></li>                    
                    <li><?php echo  $titulo; ?></li>
                    </ul>
        </div>

</div><!-- End Position -->
<div class="margin_60 container">
		<table class="table table-bordered" id="tablepaypal" width="1100x" border="1">
<tr>
<th>Description</th>
<th>Price</th>
<th>Action</th>
</tr>
<?php foreach($resultadophoto as $fila){ ?>
<tr>
<td><?php echo $fila->item_name; ?></td>
<td>$ <?php echo $fila->amount; ?></td>
<td><a onclick="obtenerfoto(<?php echo $fila->item_number; ?>)" data-toggle="modal" data-target="#comprar_fotos"   class=" btn_1 green">Buy Now</a></td>
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
				<form method="post" name="frmcomprarphoto" action="<?php echo base_url(); ?>shopping_en/add_shopping_special_package">
					
          <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="nombre" id="nombre" type="text" placeholder="Enter your Name" class="form-control">
							</div>
						</div>
            
            <div class="col-md-6">
              <div class="form-group">
                <input name="apellido" id="apellido" type="text" placeholder="Apellido" class="form-control" value="<?php echo $this->session->userdata('datocliente')["apellido"]; ?>">
              </div>
            </div>
</div>
						
					<!-- End row -->
			<div class="row">

					<div class="col-md-6">
							<div class="form-group">
								<label>Date of Stay</label>
           <input name="fecha" id="fecha" readonly  class="form-control" type="text">
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
          <div class="col-md-4">
              <div class="form-group">
                <label>Telephone</label>
          <input name="telefono" id="telefono" type="text"  class="form-control">
            </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label>Adults</label>
                <select class="form-control" name="adulto" id="adultos">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                
                </select>
              </div>
            </div>

				<div class="col-md-4">
			<textarea name="nota" id="nota" class="form-control" style="height:100px" placeholder="Comments"></textarea>
					</div>
            </div>

                                        
                                        
                                        <input name="nino" id="ninos" value="0" type="hidden" class="form-control">
                                        <input name="nombre_paquete" id="paquete" type="hidden" class="form-control">
                                        <input name="precio" id="paqueteprecio" type="hidden" class="form-control">
                                        <input name="precio_nino" id="precio_nino" value="1" type="hidden" class="form-control">
                                        <input name="id" id="id_paquete" type="hidden" class="form-control">    
                                             
                                        <button type="submit" class="btn_1" id="btnprocesarcompra"> Process Order</button>  

				</form>

			</div>

		</div>

	</div>

</div><!-- End modal review -->





