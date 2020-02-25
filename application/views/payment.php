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
           <h1>Completar su Reserva</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Su Compra</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="<?php echo base_url();?>carrito" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Detalles</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finalizar</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="confirmation.html" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                   
                    <li>  Inicio- Comprar Entradas</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
			<div class="form_title">
				<h3><strong>1</strong>Datos Personales</h3>
				
			</div>
			<div class="step">
				<div class="row">
         <form method="post" id="form1">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $this->session->userdata('datocliente')["nombre"]; ?>">
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Apellido</label>
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
							<label>Confirmar email</label>
							<input type="email" id="email1" name="email1" class="form-control" >
						</div>
					</div>
				</div>
                <div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>Tel&eacute;fono</label>
							<input type="text" id="telefono" name="telefono" class="form-control"  value="<?php echo $this->session->userdata('datocliente')["telefono"]; ?>">
						</div>
					</div>
				</div>
			</div><!--End step -->
            
			<!--End step -->
            
			<div class="form_title">
				<h3><strong>2</strong>Datos de Recogida</h3>
				<p>
					Nuestro parque ofrece transporte desde los diferentes hoteles de Bavaro / Punta Cana, por o cual necesitamos los siguientes datos para coordinar su recogida.
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
                            <label>Hotel</label>
                            <select class="form-control" name="hotel" id="hotel">
                                <option value="" selected >Seleccione su Hotel</option>
                                <ul class="chosen-results">
    <option disabled style="font-size:15px;background:#ccc;"value="" selected>Punta Cana</option>
    <option>AlSol del Mar</option>
    <option>AlSol Luxury Village</option>
    <option>AlSol Tiara Cap Cana</option>
    <option>Aquamarina</option>
    <option>Club Med</option>
    <option>Eden Roc</option>
    <option>Sanctuary Cap Cana</option>
    <option>Sheraton Four Points</option>
    <option>Tortuga Bay</option>
    <option>Westin Puntacana</option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected>Cabeza de Toro</option>
    <option>Be Live Grand Bavaro</option>
    <option>Be Live Grand Punta Cana</option>
    <option>Catalonia Bavaro</option>
    <option>Catalonia Royal Bavaro</option>
    <option>Dreams Palm Beach</option>
    <option>Natura Park</option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected class="group-result">Bavaro</option>
    <option>Bahia Principe Ambar</option>
    <option>Bahia Principe Bavaro</option>
    <option>Bahia Principe Esmeralda</option>
    <option>Bahia Principe Punta Cana</option>
    <option>Bahia Principe Turquesa</option>
    <option>Bavaro Hostel</option>
    <option>Barcelo Bavaro Beach</option>
    <option>Barcelo Bavaro Palace Deluxe</option>
    <option>Barcelo Dominican Beach</option>
    <option>Barcelo Punta Cana</option>
    <option>Bavaro Princess</option>
    <option>Caribe Club Princess</option>
    <option>Grand Palladium Bavaro</option>
    <option>Grand Palladium Palace</option>
    <option>Grand Palladium Punta Cana</option>
    <option>Hard Rock Hotel</option>
    <option>Iberostar Bavaro Suites</option>
    <option>Iberostar Dominicana</option>
    <option>Iberostar Grand Hotel Bavaro</option>
    <option>Iberostar Punta Cana</option>
    <option>IFA Villas Bavaro</option>
    <option>Majestic Colonial</option>
    <option>Majestic Elegance</option>
    <option>Melia Caribe Tropical</option>
    <option>Memories Splash</option>
    <option>Merengue Hotel</option>
    <option>MT Hotel</option>
    <option>NH Hotel</option>
    <option>NOW Garden</option>
    <option>NOW Larimar</option>
    <option>Ocean Blue &amp; Sand</option>
    <option>Occidental Grand</option>
    <option>Paradisus Palma Real</option>
    <option>Paradisus Punta Cana</option>
    <option>Presidential Suites</option>
    <option>Punta Cana Princess</option>
    <option>RIU Bambu</option>
    <option>RIU Naiboa</option>
    <option>RIU Palace Bavaro</option>
    <option>RIU Palace Punta Cana</option>
    <option>RIU Palace Macao</option>
    <option>RIU Republica</option>
    <option>Royal Suites Turquesa</option>
    <option>Royalton Punta Cana</option>
    <option>Secrets Royal Beach</option>
    <option>Stanza Mare</option>
    <option>Tropical Club Princess</option>
    <option>VIK Hotel Arena Blanca</option>
    <option>VIK Hotel Cayena Beach</option>
    <option>Vista Sol</option>
    <option>Whala Bavaro</option>
    <option>Paradisus Palma Real</option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected class="group-result">Uvero Alto</option>
    <option>Breathless</option>
    <option>Chic Punta Cana</option>
    <option>Colony Bay Resort</option>
    <option>Dreams Punta Cana</option>
    <option>Excellence</option>
    <option>Nickelodeon</option>
    <option>Sirenis Cocotal</option>
    <option>Sirenis Tropical Suites</option>
    <option>Sivory</option>
    <option>Zoetry Agua</option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected class="group-result">Bayahibe</option>
    <option>Bahia Principe La Romana - N/A </option>
    <option>Be Live Canoa - N/A </option>
    <option>Casa de Campo - N/A </option>
    <option>Catalonia Gran Dominicus - N/A </option>
    <option>Dreams La Romana - N/A </option>
    <option>Iberostar Hacienda Dominicus - N/A </option>
    <option>Viva Dominicus - N/A </option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected class="group-result">Juan Dolio</option>
    <option>Barcelo Capella - N/A </option>
    <option>Costa Caribe - N/A </option>
    <option>Barcelo Talanquera - N/A </option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected class="group-result">Boca Chica</option>
    <option>Be Live Hamaca - N/A </option>
    <option>Dominican Bay - N/A </option>
    <option>Don Juan Beach Resort - N/A </option>
    <option disabled style="font-size:15px;background:#ccc;"value="" selected class="group-result">Puerto Plata</option>
    <option>RIU Mambo - N/A </option>
    <option>RIU Merengue - N/A </option>
    <option>RIU Bachata - N/A </option>
    <option>Lifestyle Resorts - N/A </option>
    <option>Cofresi Palms - N/A </option>
    <option>Iberostar - N/A </option>
    <option>Be Live Grand Marien - N/A </option>
    <option>Blue Bay - N/A </option>
    <option>Barcelo Premium - N/A </option>
    <option>Casa Colonial - N/A </option>
    <option>Gran Ventana - N/A </option>
    <option>Grand Paradise - N/A </option>
    <option>Celuisma Tropical - N/A </option>
    <option>Blue Jack Tar - N/A </option>
    <option>Puerto Plata Village - N/A </option>
    <option>Casa Marina Reef - N/A </option>
    <option>Ocean Manor - N/A </option>
    <option>Hotel Velero - N/A </option>
    <option>Ocean Dream - N/A </option>
    <option>Hotel Milenium - N/A </option>
    <option>Viva Tangerine - N/A </option>
    <option>Natura Cabaña - N/A </option>
</ul>
                              </select>
                        </div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label># de Habitaci&oacute;n</label>
							<input type="text" id="habitacion" name="habitacion" class="form-control">
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
                <h3 class="inner">- Resumen -</h3>
                <table class="table table_summary">

                    <tbody>
                        <tr>
                            <td>Adultos</td>
                            <td  id="tdadulto" class="text-right">
                          <?php echo $cantidad_adulto; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Niños</td>
                            <td  id="tdnino" class="text-right">
                          <?php echo $cantidad_nino; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Todos los Impuestos Incluidos:
                            </td>
                            <td class="text-right">
                               <?php echo formato_moneda(00,'dolares'); ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Descuento:
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

                <input class="btn_full" onclick="submitForm('<?php echo base_url(); ?>shopping/save_cardnet')" type="submit" value="Pagar con Tarjeta">
                <input class="btn_full" onclick="submitForm('<?php echo base_url(); ?>shopping/save_shopping')" type="submit" value="Pagar con Paypal">

                <a class="btn_full_outline"  href="#"><i class="icon-right"></i> Continuar Comprando</a>
            </div>
</form>
        </aside>
        
	</div><!--End row -->
