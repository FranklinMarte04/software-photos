	<!--- Ordernar div segundo variable php con jquery -->
<!-- Realizado por Willerenver terrero el 11/01/2016 a 8:04 pm -->
<script type="text/javascript">
 //Realizado por Willerenver terrero el 11/01/2016 a 8:04 pm 
$(document).ready(function() {
  var divList = $(".listing-item");
divList.sort(function(a, b){ return $(a).data("listing-price")-$(b).data("listing-price")});

$("#list").html(divList);
});

</script>

  <!-- fin  -->

  <div class="box_style_1 expose">
<h3 class="inner">- <?php echo $tituloreservas; ?> -</h3>
 <?php if($boogie_vip==true){ ?>
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="boggie_vip" rel="Buggie VIP Tour" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/buggie_vip_combo.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Actividades + Buggies<span class="price"><sup>$</sup>89</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                         
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                            Almuerzo Dominicano <br>
                                            Piscina con cascada <br>
                                            Eco Tour <br>
                                         
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggie</h4>
                                     
                                             
                                             Todoterreno<br>
                                          
                                </div>
                              </div>
                           </li>

                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>




 <?php if($buggiesmegas==true){ ?>
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="buggiesmegasplash" rel="Combo Buggies - Zipline " class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/ziplinemegasplash_buggie.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Actividades + Buggies<span class="price"><sup>$</sup>139</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/azul_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Zipline Mega Splash</h4>
                             
                              6 Lineas <br>
                              Puente colgante aterrizando en agua <br>
                              Cable Splash <br>
                              
                                        
                                </div>
                              </div>
                           </li>
                      <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                            Almuerzo Dominicano <br>
                                            Piscina con cascada <br>
                                            Eco Tour <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggie</h4>
                                     
                                             Buggy Tour <br>
                                              Zipline Mega Splash <br>
                                          
                                </div>
                              </div>
                           </li>

                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>

<!--POLARIS VIP-->

  <?php if($polarisvip==true){ ?>
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="paquetepolarisvip" rel="Combo Polaris - Zipline " class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/polaris_vip.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Actividades <span class="price"><sup>$</sup>119</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                            
                                            Lo mismo que Polaris <br>
                                            Piscina con cascada <br>
                                            Eco Tour <br>
                                            Almuerzo Dominicano <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Polaris</h4>
                                     
                                             polaris Tour <br>
                                             
                                          
                                </div>
                              </div>
                           </li>

                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>

<!--END POLARIS VIP-->

 <?php if($buggiescaballo==true){ ?>
            <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
          <div id="buggieshorseback" rel="COMBO Buggies - Paseo Caballo" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/buggie_caballos.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                 3 Actividades + Buggies<span class="price"><sup>$</sup>139</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Caballo</h4>
                             
                               Recorrido en Caballo<br>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                            Almuerzo Dominicano <br>
                                            Piscina con cascada <br>
                                            Eco Tour <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggie</h4>
                                     
                                             Buggy Tour <br>
                                             Paseo a Caballo <br>
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>







<?php if($polariscaballo==true){ ?>
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="combopolariscaballos" rel="COMBO Paseo Caballo - Polaris" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/polaris_caballos.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Actividades + Polaris<span class="price"><sup>$</sup>159</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/azul_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Zipline Mega Splash</h4>
                             
                              6 Lineas <br>
                              Puente colgante aterrizando en agua <br>
                              Cable Splash <br>
                              
                                        
                                </div>
                              </div>
                           </li>
                      <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                            Almuerzo Dominicano <br>
                                            Piscina con cascada <br>
                                            Eco Tour <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_p.png"></i></span>
                                  <div class="tooltip-content"><h4>Polaris</h4>
                                     
                                             polaris Tour <br>
                                              Zipline Mega Splash <br>
                                          
                                </div>
                              </div>
                           </li>

                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>

 <?php if($polarismegasplash==true){ ?>
            <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
          <div id="combopolarismegasplash" rel="COMBO Zimpline Mega Splas - Polaris" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/ziplinemegasplash_polaris.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                 3 Actividades + Polaris<span class="price"><sup>$</sup>159</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Caballo</h4>
                             
                               Recorrido en Caballo<br>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                            Almuerzo Dominicano <br>
                                            Piscina con cascada <br>
                                            Eco Tour <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_p.png"></i></span>
                                  <div class="tooltip-content"><h4>Polaris</h4>
                                     
                                             polaris Tour <br>
                                             Paseo a Caballo <br>
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>



 <?php if($megasunset==true){ ?>
<div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
            <div id="megasplashsunset" rel="COMBO Zipline Mega Splash - Sunset Vip" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/combo1.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Actividades + Sunset<span class="price"><sup>$</sup>178</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/azul_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Zipline Mega Splash</h4>
                             
                              1 Actividad <br>
                              5 Lineas <br>
                              Himalayan Bridge <br>
                              Splash Cable <br>
                              1 Piscina con Cascada <br>
                              1 Eco Tour <br>

                                        
                                </div>
                              </div>
                           </li>
                      <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_s.png"></i></span>
                                  <div class="tooltip-content"><h4>SUNSET VIP</h4>
                                     
                                            Tour en un Barco VIP
                                          
                                </div>
                              </div>
                           </li>

                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
      <?php } ?>
 <?php if($sunsetvip==true){ ?>
            <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="paqueteAdventureSunsetVip" rel="COMBO Adventure - Sunset Vip" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/combo2.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                5 Actividades + Sunset<span class="price"><sup>$</sup>188</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Amarillo</h4>
                             
                               Bungee Trampoline <br>
                               BMX Pump Track <br>
                               Mountainbike <br>
                                 Flight Simulator<br>
                                   
                                        
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/naranja_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Naranja</h4>
                                     Zipline Regular<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
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
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_s.png"></i></span>
                                  <div class="tooltip-content"><h4>SUNSET VIP</h4>
                                     
                                            Tour en un Barco VIP
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>

<?php } ?>

<div id="list">

 










 <?php if($dinoworld==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $dinoworld_order; ?>">
  <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <div id="paqueteDinoWorld" rel="Dinosaur World" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/dino.png" width="800" height="533" class="img-responsive" alt="">
              <div class="short_info hotel">
                3 Actividades<span class="price"><sup>$</sup>59</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>DINOSAUR WORLD</h4>
                             Ven a disfrutar en vivo, de estas enigmáticas criaturas extintas hace mas de 65 millones de años.

                                        
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div> 
         </div> 

   <?php } ?>


 <?php if($megasplash==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $megasplash_order; ?>">
 
      <div class="row">
       
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <div id="paqueteziplinemegasplash" rel="Paquete Zipline Mega Splash" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/splash_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Actividades<span class="price"><sup>$</sup>89</span>
              </div>
              </a>
            </div>
            <div  class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Zipline Mega Splash</h4>
                             
                              1 Actividad <br>
                              5 Lineas <br>
                              Himalayan Bridge <br>
                              Splash Cable <br>
                              1 Piscina con Cascada <br>
                              1 Eco Tour <br>

                                        
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>
    </div>
      </div>
			<?php } ?>









     <?php if($adventurebuggies==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $adventure_order; ?>">
 
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
           <div id="pqb" rel="CRAZY BUGGIES TOUR + ADVENTURE" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
            <img src="<?php echo base_url(); ?>public/img/paquetes/mini/combo3.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                5 Actividades<span class="price"><sup>$</sup>168</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Amarillo</h4>
                             
                               Bungee Trampoline <br>
                               BMX Pump Track <br>
                               Mountainbike <br>
                               Flight Simulator<br>
                                   
                                        
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/naranja_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Naranja</h4>
                                     Zipline<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
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
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                            </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>
  </div>
      </div>
  <?php } ?>

     <?php if($paintballpackage==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $adventure_order; ?>">
 
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
           <div id="paintball" rel="Paintball Package" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
            <img src="<?php echo base_url(); ?>public/img/paquetes/mini/paintball_package.jpg" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                1 Actividad<span class="price"><sup>$</sup>59</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atraccione</h4>
                             
                               Paintball Package <br>
                                        
                                </div>
                              </div>
                           </li>
                            </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>
  </div>
      </div>
  <?php } ?>















       <?php if($adventure==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $adventure_order; ?>">
 
			<div class="row">
				
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
           <div id="paqueteAdventure" rel="Paquete Adventure" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
            <img src="<?php echo base_url(); ?>public/img/paquetes/mini/adventurePack_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                5 Actividades<span class="price"><sup>$</sup>109</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Amarillo</h4>
                             
                               Bungee Trampoline <br>
                               BMX Pump Track <br>
                               Mountainbike <br>
                               Flight Simulator<br>
                                   
                                        
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/naranja_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Naranja</h4>
                                     Zipline<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
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
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Piscina con Cascada<br>
                                             Eco Tour<br>
                                            Area de Juegos<br>
                                          
                                </div>
                              </div>
                           </li>
                            </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>
  </div>
			</div>
  <?php } ?>
     <?php if($adventureplus==true){ ?>
      <div class="listing-item" data-listing-price="<?php echo $adventureplus_order; ?>">
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <div id="paqueteAdventurePlus" rel="Paquete Adventure Plus" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
                 <img src="<?php echo base_url(); ?>public/img/paquetes/mini/adventurePlusPack_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                7 Actividades<span class="price"><sup>$</sup>139</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
              <ul class="add_info" style="text-align: center;">
                <li style="display: block;border:0px;width:100%;border: 1px solid;border-color: #ccc;">
                            <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><button class="btn_1 white" style="padding: 6px 72px;">Libre Eleccion</a></span>
                                  <div class="tooltip-content"><h4 align="center">Nuestras Atracciones</h4>
                                      <div class="col-md-6">
                                        Bungee Trampoline <br>
                                       Flight Simulator<br>
                                     Zipline Regular<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                     Eco Tour <br>
                                     Mountainbike <br>
                                      </div>
                                      <div class="col-md-6">
                                        BMX Pump Track
                                        Zipline Pro<br>
                                            Paintball<br>
                                            Segway<br>
                                            Dino World<br>
                                            Zipline Splash<br>
                                             Piscina con Cascada <br>
                                             Area de Juegos <br>   
                                      </div>
                                </div>
                              </div>
                           </li>
          </ul>
            </div>
          </div><!-- End box tour -->
        </div>
</div>
      </div>
      <?php } ?>


      <?php if($boogie_adventure_vip==true){ ?>
      <div class="listing-item" data-listing-price="<?php echo $boogie_adventure_vip_order; ?>">
    
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
       <div id="pbavip" rel="Paquete BUGGIE ADVENTURE VIP" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">        <img src="<?php echo base_url(); ?>public/img/paquetes/mini/buggie_adventure_vip.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                BUGGIE + ADVENTURE VIP <span class="price"><sup>$</sup>228</span>
              </div>
              </a>
            </div>
            <div class="hotel_title" Style="text-align:center;">
              <h3><strong></strong></h3>
              <!-- end rating -->
              
                            
                         <ul class="add_info" style="text-align: center;">
                <li style="display: block;border:0px;width:100%;border: 1px solid;border-color: #ccc;">
                            <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><button class="btn_1 white" style="padding: 6px 72px;">Libre Eleccion</a></span>
                                  <div class="tooltip-content"><h4 align="center">Nuestras Atracciones</h4>
                                      <div class="col-md-6">
                                        Bungee Trampoline <br>
                                       Flight Simulator<br>
                                     Zipline Regular<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                     Eco Tour <br>
                                     Mountainbike <br>
                                      </div>
                                      <div class="col-md-6">
                                        BMX Pump Track
                                        Zipline Pro<br>
                                            Paintball<br>
                                            Segway<br>
                                            Dino World<br>
                                            Zipline Splash<br>
                                             Piscina con Cascada <br>
                                             Area de Juegos <br>   
                                      </div>
                                </div>
                              </div>
                           </li>
          </ul>
            </div>
          </div><!-- End box tour -->
        </div>
</div>
      </div>
      <?php } ?>
         <?php if($adventurevip==true){ ?>
           <div class="listing-item" data-listing-price="<?php echo $adventurevip_order; ?>">
    
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
       <div id="paqueteAdventureVip" rel="Paquete Adventure VIP" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">        <img src="<?php echo base_url(); ?>public/img/paquetes/mini/adventurevipPack_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                Paquete Ilimitado<span class="price"><sup>$</sup>169</span>
              </div>
              </a>
            </div>
            <div class="hotel_title" Style="text-align:center;">
              <h3><strong></strong></h3>
              <!-- end rating -->
              
                            
                         <ul class="add_info" style="text-align: center;">
                <li style="display: block;border:0px;width:100%;border: 1px solid;border-color: #ccc;">
                            <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><button class="btn_1 white" style="padding: 6px 72px;">Libre Eleccion</a></span>
                                  <div class="tooltip-content"><h4 align="center">Nuestras Atracciones</h4>
                                      <div class="col-md-6">
                                        Bungee Trampoline <br>
                                       Flight Simulator<br>
                                     Zipline Regular<br>
                                     Zorbing<br>
                                     Climbing Garden<br>
                                     Horse Back Riding<br>
                                     Eco Tour <br>
                                     Mountainbike <br>
                                      </div>
                                      <div class="col-md-6">
                                        BMX Pump Track
                                        Zipline Pro<br>
                                            Paintball<br>
                                            Segway<br>
                                            Dino World<br>
                                            Zipline Splash<br>
                                             Piscina con Cascada <br>
                                             Area de Juegos <br>   
                                      </div>
                                </div>
                              </div>
                           </li>
          </ul>
            </div>
          </div><!-- End box tour -->
        </div>
</div>
      </div>
         <?php } ?>

			</div>
			
			
		</div>


