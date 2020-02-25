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
  function submitForm(action) {
    var form = document.getElementById('form1');
    form.action = action;
    form.submit();
  }
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


    
   <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Complete your Reservation</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your Booking</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="<?php echo base_url();?>carrito" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finish</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                   
                    <li>  Home- Buy Tickets</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
			<div class="form_title">
				<h3><strong>1</strong>Personal Information</h3>
				
			</div>
			<div class="step">
				<div class="row">
         <form method="post" id="form1">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $this->session->userdata('datocliente')["nombre"]; ?>">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" class="form-control" id="apellido" name="apellido"  value="<?php echo $this->session->userdata('datocliente')["apellido"]; ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email" name="email"  class="form-control"  value="<?php echo $this->session->userdata('datocliente')["email"]; ?>">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Confirm email</label>
							<input type="email" id="email1" name="email1" class="form-control" >
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Telephone</label>
							<input type="text" id="telefono" name="telefono" class="form-control"  value="<?php echo $this->session->userdata('datocliente')["telefono"]; ?>">
						</div>
					</div>
				</div>
			</div><!--End step -->
            
			<!--End step -->
            
			<div class="form_title">
				<h3><strong>2</strong>Otros Datos</h3>
				<p>
					Fecha de Visita: <?php echo $this->session->userdata('datocliente')["fecha_visita"]; ?>
				</p>
			</div>
			<div class="step">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
					<div class="form-group">
                            <label>Referencia</label>
                            <input type="text" name="referencia" id="referencia" value="<?php echo $this->session->userdata('datocliente')["referencia"]; ?>" class="form-control">
                        </div>	
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Comentario</label>
                            <textarea name="nota" id="nota" value="<?php echo $this->session->userdata('datocliente')["nota"]; ?>" class="form-control" style="height:100px"><?php echo $this->session->userdata('datocliente')["nota"]; ?></textarea>
							
						</div>
					</div>
				</div>
				<!--End row -->
			</div><!--End step -->

         
		</div>
        

   <?php
 $cantidad_adulto=0;
 $cantidad_nino=0;
        $i=0; foreach ($this->cart->contents() as $items){

        $i++;
               $cantidad_adulto=$cantidad_adulto + $items['adultos']; 
               $cantidad_nino=$cantidad_nino + $items['ninos']; 
        } 
         ?>
			 

	 <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">- Summary -</h3>
                <table class="table table_summary">

                    <tbody>
                        <tr>
                            <td>Paquete</td>
                            <td  id="tdadulto" class="text-right">
                          <?php echo $items['nombre_producto']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td</td>
                            <td  id="tdnino" class="text-right">
                          
                            </td>
                        </tr>
                        <tr>
                            <td>
                                All Taxes Included:
                            </td>
                            <td class="text-right">
                               <?php echo formato_moneda(00,'dolares'); ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Disccount:
                            </td>
                            <td id="tddescuento" class="text-right">
                                  <?php echo formato_moneda($this->cart->descuento(),'dolares'); ?>
                            </td>
                        </tr>
                           <tr>
                            <td>
                               Subtotal:
                            </td >
                            <td id="tdsubtotalgeneral" class="text-right">
                                      <?php echo formato_moneda($this->cart->subtotal(),'dolares'); ?>
                            </td>
                        </tr>


                        <tr class="total">
                            <td>
                                Total
                            </td>
                            <td id="tdtotal"  class="text-right">
                              <?php echo formato_moneda($this->cart->total(),'dolares'); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                
                <input name="fecha_visita" id="fecha_visita" value="<?php echo $this->session->userdata('datocliente')["fecha_visita"]; ?>" type="hidden" class="form-control">

                <input class="btn_full" onclick="submitForm('<?php echo base_url(); ?>shopping_en/save_cardnet_fotos')" type="submit" value="Pay with Credit Card">
                <input class="btn_full" onclick="submitForm('<?php echo base_url(); ?>shopping_en/save_shopping_fotos')" type="submit" value="Pay with Paypal">

                <a class="btn_full_outline"  href="#"><i class="icon-right"></i> Continue Shopping</a>
            </div>
</form>
        </aside>
        
	</div><!--End row -->
