<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Confirmar pago, parque, compra" />
    <meta name="description" content="Confirmar pago de compra en bavaro adventure park">
    <meta name="author" content="innovatech VS">
    <title>Bavaro Adventure Park</title>
    
   <?php echo $header; ?>
        
</head>
<body onload="nobackbutton();">

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

    
    <section id="hero_2" style="
    background: #4d536d url(<?Php echo base_url(); ?>public/img/header_bg1.jpg) no-repeat center center;
">
	<div class="intro_title animated fadeInDown">
           <h1>Confirmación de Compra</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Su Carrito</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Sus Detalles</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Terminado!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Compra</a></li>
                    <li>Confirmación</li>
                    </ul>
        </div>
    </div><!-- End position -->
    
    <div class="container margin_60">
	<div class="row">
		<div class="col-md-8">
        
			<div class="form_title">
				<h3><strong><i class="icon-ok"></i></strong>Muchas Gracias/ Thank you...</h3>
                <p>Gracias Por su Compra/ Thank you for your purchase</p>
				
			</div>
			<div class="step">
				<p style="
    text-align: center;
    font-size: 20px;
">Su pago fue Realizado de manera exitosa. Usted recibirá un correo con el comprobante de pago. Para mayor informacion pude contactarnos a <a href="mailto:info@bavaroadventurepark.com">info@bavaroadventurepark.com</a>

      </p>

      <p style="
    text-align: center;
    font-size: 20px;
">Your payment was made successfully. You will receive an email with more details of your payment. For more information, please contact us to <a href="mailto:info@bavaroadventurepark.com">info@bavaroadventurepark.com</a>

      </p>
			</div><!--End step -->
          <!--  
			<div class="form_title">
				<h3><strong><i class="icon-tag-1"></i></strong>Resumen de la reserva</h3>
				<p>
					Resumen
				</p>
			</div>
			<div class="step">
				<table class="table confirm">
				<thead>
				<tr>
					<th colspan="2">
						
                        Combo
					</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						<strong>Cantidad</strong>
					</td>
					<td>
						2x
					</td>
				</tr>
				<tr>
					<td>
						<strong>Fecha</strong>
					</td>
					<td>
						25 Febrero 2016
					</td>
				</tr>
				<tr>
					<td>
						<strong>Para</strong>
					</td>
					<td>
						Don Pedro
					</td>
				</tr>
				<tr>
					<td>
						<strong>Tipo de Pago</strong>
					</td>
					<td>
						Targeta de Credito
					</td>
				</tr>
				</tbody>
				</table>
				<table class="table confirm">
				<thead>
				<tr>
					<th colspan="2">
						Atracciones 
					</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						<strong>Cantidad</strong>
					</td>
					<td>
						2x
					</td>
				</tr>
				<tr>
					<td>
						<strong>Fecha</strong>
					</td>
					<td>
						27 Febrero 2015
					</td>
				</tr>
				<tr>
					<td>
						<strong>Para</strong>
					</td>
					<td>
						Don Pedro
					</td>
				</tr>
				<tr>
					<td>
						<strong>Tipo de Pago</strong>
					</td>
					<td>
						Targeta de Credito
					</td>
				</tr>
				</tbody>
				</table>
			</div>
		-->
			<!--End step -->
		</div><!--End col-md-8 -->
        
		<aside class="col-md-4">
         <!--Mapa>
        <p class="hidden-sm hidden-xs">
            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Ver Mapa</a>
        </p>
    <End mapac-->
      
        <div class="box_style_4">
            <i class="icon_set_1_icon-90"></i>
            <h4><span>Reserve por </span>Teléfono</h4>
            <a href="tel://004542344599" class="phone">+1 809 933 3040</a>
            <small>Lunes a Domingo 9:00 a.m. - 6:00 p.m.</small>
        </div>
        
        </aside>

        <script type="text/javascript">
function nobackbutton(){
	
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button"

       window.onhashchange=function(){window.location.hash="no-back-button";}
       
    //chrome
 
}

</script>

    </div><!--End row -->
</div><!--End container -->

