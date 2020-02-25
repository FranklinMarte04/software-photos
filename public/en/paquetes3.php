<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>Bavaro Adventure Park</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="../css/base.css" rel="stylesheet">
    
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.min.js"></script>
      <script src="../js/respond.min.js"></script>
    <![endif]-->
        
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
    <?php include("includes/header.php"); ?><!-- End Header -->
    
    
<section class="parallax-window" data-parallax="scroll" data-image-src="../img/header_bg1.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Comprar Entradas</h1>
        <p>Adquiera su Paquete o Combo para disfrutar de nuestras atracciones</p>
        </div>
    </div>
</section><!-- End Section -->
    
<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Inicio</a></li>
                    <li>Comprar Entradas</li>
                    
                    </ul>
        </div>
    </div><!-- End Position -->

<div class="container margin_60">
	<div class="main_title">
		<h2><span>Nuestros </span>Paquetes</h2>
		<p>
			Puede personalizar las atracciones que desee realizar en nuestro parque, dentro de los siguientes paquetes:
		</p>
	</div>
	<hr>
    
     
            <div class="row text-center plans">
            
                <div class="plan col-md-3">
                    <h2 class="plan-title">Adventure</h2>
                    <p class="plan-price">$109<span>/00</span></p>
                    <ul class="plan-features">
                        <li><strong>5 Atracciones</strong> incluidas</li>
                    </ul>
                    <hr>
<?php include("includes/paquete_adventure.php"); ?>
            <hr>



                    <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1">Reservar</a></p>
                </div> <!-- End col-md-4 -->
                
                <div class="plan col-md-3">
                    <h2 class="plan-title">Zipline Mega Splash</h2>
                    <p class="plan-price">$99<span>/00</span></p>
                    <ul class="plan-features">
                    	<li><strong>3 Atracciones</strong> incluidas</li>
                    </ul>

                    <hr>
                     <?php include("includes/paquete_splash.php"); ?>
                    <hr>



                    <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1 green">Reservar</a></p>
                </div><!-- End col-md-4 -->
                
                <div class="plan plan-tall col-md-3">
                    <h2 class="plan-title">Adventure Plus</h2>
                    <p class="plan-price">$139<span>/00</span></p>
                    <ul class="plan-features">
                    	<li><strong>7 Atracciones</strong> incluidas</li>
                    </ul>

                    <hr>
                    <?php include("includes/paquete_adventure_plus.php"); ?>
                    <hr>


                    <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1">Reservar</a></p>
                </div><!-- End col-md-4 -->

                <div class="plan col-md-3">
                    <h2 class="plan-title">Adventure VIP</h2>
                    <p class="plan-price">$169<span>/00</span></p>
                    <ul class="plan-features">
                        <li><strong>Todo las</strong> Atracciones</li>
                    </ul>

                    <hr>
                   <?php include("includes/paquete_adventure_vip_paquetes.php"); ?>
                    <hr>


                    <p class=" col-md-8 col-md-offset-2 text-center"><a href="payment.html" class=" btn_1">Reservar</a></p>
                </div>
                
            </div>

            <!-- End row plans-->
            
            <hr>
            
            <div class="row">
                <div class="col-md-12">
                    <h3>Combine Su Paquete ADVENTURE o MEGA SPLASH con Uno de nuestros tours:</h3>
                </div>
            </div><!-- end row -->
            
            <div class="row" id="pricing_2">
                    <div class="col-md-3 col-sm-6">
                
                    <div class="pricing-table black ">
                        <div class="pricing-table-header">
                            <span class="heading">Zipline Mega Splash + Buggies</span>
                            <span class="price-value"><span>158</span><span class="mo">$</span></span>
                        </div>
                        <div class="pricing-table-space "></div>
                        <div class="pricing-table-features">
                            <p><strong>Niños (6-12)</strong> 50% Descuento</p>
                            <p><strong> 3 atracciones del Parque</strong> + Buggies</p>
                           
                            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/azul_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Zipline Mega Splash</h4>
                             
                              1 Actividad <br>
                              5 Lineas <br>
                              Himalayan Bridge <br>
                              Splash Cable <br>
                              1 Piscina natural <br>
                              1 Eco Tour <br>

                                        
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina Natural<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>  
                            
                            
                            
                        </div>
                        
                        <div class="pricing-table-sign-up">
                            <a href="payment.html" class="btn_1">Reservar!</a>
                        </div>
    
                    </div><!-- End pricing-table-->
                </div><!-- End col-md-3 -->
                
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table green">
                        <div class="pricing-table-header">
                            <span class="heading">Paquete Adventure + Buggies </span>
                            <span class="price-value"><span>168</span><span class="mo">$</span></span>
                        </div>
                        <div class="pricing-table-space "></div>
                        <div class="pricing-table-features">
                           <p><strong>Niños (6-12)</strong> 50% Descuento</p>
                           <p><strong> 5 atracciones del Parque</strong> + Buggies</p>
                           

<div class="hotel_title">
              
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Amarillo</h4>
                             
                               Bungee Trampoline <br>
                               BMX Pump Track <br>
                               Mountainbike <br>
                                        
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/naranja_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Naranja</h4>
                                     Flight Simulator<br>
                                     Zipline<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/rojo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Rojo</h4>
                                      
                                            Zipline Pro<br>
                                            Paintball<br>
                                            Segway<br>
                                            Dino World<br>
                                            Zipline Splash<br>
                                </div>
                              </div>
                           </li>                            
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina Natural<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                            </ul><!-- End wish list-->
            </div>
                           
                            
                        </div>
                        
                        <div class="pricing-table-sign-up">
                            <a href="payment.html" class="btn_1">Reservar!</a>
                        </div>
                        
                    </div><!-- End pricing-table-->
                </div><!-- End col-md-3 -->
                
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table black ">
                      
                        <div class="pricing-table-header">
                            <span class="heading">Zipline Mega Splash +<br> Sunset Vip</span>
                            <span class="price-value"><span>178</span>$<span class="mo"></span></span>
       
                        </div>
                        <div class="pricing-table-space"></div>
                        <div class="pricing-table-features">
                           <p><strong>Niños (6-12)</strong> 50% Descuento</p>
                            <p><strong> 3 atracciones del Parque</strong> + SunSet Vip</p>
                          
                            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/azul_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Zipline Mega Splash</h4>
                             
                              1 Actividad <br>
                              5 Lineas <br>
                              Himalayan Bridge <br>
                              Splash Cable <br>
                              1 Piscina natural <br>
                              1 Eco Tour <br>

                                        
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina Natural<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>  
                           
                            
                        </div>
                        
                        <div class="pricing-table-sign-up">
                            <a href="payment.html" class="btn_1">Reservar!</a>
                        </div>
                        
                    </div><!-- End pricing-table-->
                </div><!-- End col-md-3 -->
                
                <div class="col-md-3 col-sm-6">
                    <div class="pricing-table green">
                        <div class="pricing-table-header">
                            <span class="heading">Paquete Adventure +<br> Sunset VIP</span>
                            <span class="price-value"><span>188</span><span class="mo">$</span></span>
                        </div>
                        <div class="pricing-table-space "></div>
                        <div class="pricing-table-features">
                            <p><strong>Niños (6-12)</strong> 50% Descuento</p>
                            <p><strong> 5 atracciones del Parque</strong> + Sunset VIP</p>
                           
<div class="hotel_title">
              
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Amarillo</h4>
                             
                               Bungee Trampoline <br>
                               BMX Pump Track <br>
                               Mountainbike <br>
                                        
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/naranja_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Naranja</h4>
                                     Flight Simulator<br>
                                     Zipline<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/rojo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Rojo</h4>
                                      
                                            Zipline Pro<br>
                                            Paintball<br>
                                            Segway<br>
                                            Dino World<br>
                                            Zipline Splash<br>
                                </div>
                              </div>
                           </li>                            
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="../img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina Natural<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                            </ul><!-- End wish list-->
            </div>
                            
                            
                        </div>
                        
                        <div class="pricing-table-sign-up">
                            <a href="payment.html" class="btn_1">Reservar!</a>
                        </div>
                        
                    </div><!-- End pricing-table-->
                </div><!-- End col-md-3 -->
                    

            </div><!-- end row -->
            
            <hr>
            
            <div class="row">
                <div class="col-md-12">
                    <h3>Infromaci&oacute;n Importante:</h3>
                </div>
            </div><!-- end row -->
            
            <div class="row">
            
                <div class="col-md-4">
                    <div class="question_box">
                        <h3>Ni&ntilde;os de 6 a 12 a&ntilde;os: 50% descuento</h3>
                        <p>
                            Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="question_box">
                        <h3>Cancelaci&oacute;n de Reservas:</h3>
                        <p>
                            Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="question_box">
                        <h3>Pro moderatius philosophia ad, ad mea mupercipitur?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                        </p>
                    </div>
                </div>
                
            </div><!-- end row -->
	
    
</div><!-- End container -->

<?php include("includes/footer.php"); ?><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
<script src="../js/functions.js"></script>

  </body>
</html>