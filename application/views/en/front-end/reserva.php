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
              <img src="<?php echo base_url(); ?>public/img/buggie_vip_combo_en.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Buggies<span class="price"><sup>$</sup>89</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                         
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>GREEN ATTRACTIONS</h4>
                                            Dominican Lunch  <br>
                                            Waterfall Pool  <br>
                                            Eco Tour <br>
                                         
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggie</h4>
                                     
                                             
                                             Road Buggy<br>
                                          
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
         <div id="buggiesmegasplash" rel="Buggies - Zipline " class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/ziplinemegasplash_buggie.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Buggies<span class="price"><sup>$</sup>139</span>
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
                             
                              6 Lines <br>
                              Himalayan Bridge landing on water <br>
                              Splash Cable <br>
                              

                                        
                                </div>
                              </div>
                           </li>
                      <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Dominican Lunch <br>
                                             Waterfall Pool <br>
                                            Eco Tour <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggies</h4>
                                     
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

 <?php if($buggiescaballo==true){ ?>
            <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
          <div id="buggieshorseback" rel="Buggies - Horseback Riding COMBO" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/buggie_caballos_en.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Buggies<span class="price"><sup>$</sup>139</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Horseback Riding</h4>
                             
                               Horseback Riding <br>
                                            
                                </div>
                              </div>
                           </li>
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Dominican Lunch <br>
                                             Waterfall Pool <br>
                                            Eco Tour<br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggies</h4>
                                     
                                            Road Buggy <br>
                                            Horseback Riding <br>
                                             
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>
<!--POLARIS-->

 <?php if($polariszipline==true){ ?>
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="combopolarismegasplash" rel="Polaris - Zipline " class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/polaris_zipline_en.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Polaris<span class="price"><sup>$</sup>159</span>
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
                             
                              6 Lines <br>
                              Himalayan Bridge landing on water <br>
                              Splash Cable <br>
                              

                                        
                                </div>
                              </div>
                           </li>
                      <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Dominican Lunch <br>
                                             Waterfall Pool <br>
                                            Eco Tour <br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_p.png"></i></span>
                                  <div class="tooltip-content"><h4>Polaris</h4>
                                     
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

 <?php if($polariscaballo==true){ ?>
            <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
          <div id="combopolariscaballos" rel="Buggies - Horseback Riding COMBO" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/polaris_caballos_en.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Polaris<span class="price"><sup>$</sup>159</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Horseback Riding</h4>
                             
                               Horseback Riding <br>
                                            
                                </div>
                              </div>
                           </li>
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Dominican Lunch <br>
                                             Waterfall Pool <br>
                                            Eco Tour<br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_p.png"></i></span>
                                  <div class="tooltip-content"><h4>Polaris</h4>
                                     
                                            Road Polaris <br>
                                            Horseback Riding <br>
                                             
                                          
                                </div>
                              </div>
                           </li>
                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>

      </div>
<?php } ?>


<!-- END POLARIS-->













 <?php if($megasunset==true){ ?>
<div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
            <div id="megasplashsunset" rel="Zipline Mega Splash - Sunset Vip COMBO" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/combo1.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Sunset<span class="price"><sup>$</sup>178</span>
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
                             
                              1 Activity <br>
                              5 Lines <br>
                              Himalayan Bridge <br>
                              Splash Cable <br>
                              1 Waterfall Pool  <br>
                              1 Eco Tour <br>

                                        
                                </div>
                              </div>
                           </li>
                      <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Waterfall Pool <br>
                                             Eco Tour<br>
                                            Playground<br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_s.png"></i></span>
                                  <div class="tooltip-content"><h4>SUNSET VIP</h4>
                                     
                                            Tour in VIP Yacht
                                          
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
         <div id="paqueteAdventureSunsetVip" rel="Adventure - Sunset Vip COMBO" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/combo2.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                5 Activities + Sunset<span class="price"><sup>$</sup>188</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Yellow Attractions</h4>
                             
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
                                  <div class="tooltip-content"><h4>Orange Attractions</h4>
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
                                  <div class="tooltip-content"><h4>Red Attractions</h4>
                                      
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
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Waterfall Pool <br>
                                             Eco Tour<br>
                                            Playground<br>
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_s.png"></i></span>
                                  <div class="tooltip-content"><h4>SUNSET VIP</h4>
                                     
                                            VIP Yacht
                                          
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
                3 Activities<span class="price"><sup>$</sup>59</span>
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
                             Enigmatic creatures which have been extinct for more than 65 million years.

                                        
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Waterfall Pool <br>
                                             Eco Tour<br>
                                            Playground<br>
                                          
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
        <div id="paqueteziplinemegasplash" rel="Zipline Mega Splash Package" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/paquetes/mini/splash_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities<span class="price"><sup>$</sup>89</span>
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
                             
                              1 Activity <br>
                              5 Lines <br>
                              Himalayan Bridge <br>
                              Splash Cable <br>
                              1 Waterfall Pool  <br>
                              1 Eco Tour <br>

                                        
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Atracciones de color Verde</h4>
                                     
                                             Waterfall Pool <br>
                                             Eco Tour<br>
                                            Playground<br>
                                          
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
                5 Activities<span class="price"><sup>$</sup>168</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Yellow Attractions</h4>
                             
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
                                  <div class="tooltip-content"><h4>Orange Attractions</h4>
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
                                  <div class="tooltip-content"><h4>Red Attractions</h4>
                                      
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
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Waterfall Pool <br>
                                             Eco Tour<br>
                                            Playground<br>
                                          
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggies</h4>
                                     
                                             Buggy Tour <br>
                                            
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



       <?php if($boogie_adventure_vip==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $adventurevip_order; ?>">
    
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
       <div id="pbavip" rel="Paquete BUGGIE + ADVENTURE VIP" class="hotel_container">
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
                            <span class="tooltip-item"><button class="btn_1 white" style="padding: 6px 72px;">Free Election</a></span>
                                  <div class="tooltip-content"><h4 align="center">Our Attractions</h4>
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
                                             WATERFALL POOL <br>
                                             Playground <br>     
                                      </div>
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
           <div id="paqueteAdventure" rel="Adventure Package" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
            <img src="<?php echo base_url(); ?>public/img/paquetes/mini/adventurePack_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                5 Activities<span class="price"><sup>$</sup>109</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/amarillo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>Yellow Attractions</h4>
                             
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
                                  <div class="tooltip-content"><h4>Orange Attractions</h4>
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
                                  <div class="tooltip-content"><h4>Red Attractions</h4>
                                      
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
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     
                                             Waterfall Pool <br>
                                             Eco Tour<br>
                                            Playground<br>
                                          
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


  <!--POLARIS VIP-->

       <?php if($polarisvip==true){ ?>
   <div class="listing-item" data-listing-price="<?php echo $adventure_order; ?>">
 
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
           <div id="paquetepolarisvip" rel="Polaris VIP" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
            <img src="<?php echo base_url(); ?>public/img/paquetes/mini/polaris_vip.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                3 Activities<span class="price"><sup>$</sup>119</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>Green Attractions</h4>
                                     Same as polaris only <br>
                                     Natural pool <br>
                                     Eco tour <br>
                                     Dominican Lunch <br>
                                </div>
                              </div>
                           </li> 
                             <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_p.png"></i></span>
                                  <div class="tooltip-content"><h4>Polaris VIP</h4>
                                     
                                            Polaris Tour <br>
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

  <!--POLARIS VIP-->
     <?php if($adventureplus==true){ ?>
      <div class="listing-item" data-listing-price="<?php echo $adventureplus_order; ?>">
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
        <div id="paqueteAdventurePlus" rel="Adventure Plus Package" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
                 <img src="<?php echo base_url(); ?>public/img/paquetes/mini/adventurePlusPack_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                7 Activities<span class="price"><sup>$</sup>139</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                <li style="display: block;border:0px;width:100%;border: 1px solid;border-color: #ccc;">
                            <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><button class="btn_1 white" style="padding: 6px 72px;">Free Election</a></span>
                                  <div class="tooltip-content"><h4 align="center">Our Attractions</h4>
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
                                             WATERFALL POOL <br>
                                             Playground <br>     
                                      </div>
                                </div>
                              </div>
                           </li>
          </ul>
                            </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>
</div>
      </div>
      <?php } ?>



 <?php if($boggie_vip==true){ ?>
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
         <div id="boggie_vip" rel="Buggie VIP + Waterfall Pool" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">
              <img src="<?php echo base_url(); ?>public/img/buggievip_piscina.png" width="800" height="533" class="img-responsive" alt="">
              <div class="ribbon top_rated"></div>
                            
              <div class="short_info hotel">
                3 Activities + Buggies<span class="price"><sup>$</sup>89</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              
              <!-- end rating -->
             <ul class="add_info" style="text-align: center;">
                         
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/verde_2.png"></i></span>
                                  <div class="tooltip-content"><h4>GREEN ATTRACTIONS</h4>
                                            Dominican Lunch  <br>
                                            Waterfall Pool  <br>
                                            Eco Tour <br>
                                         
                                          
                                </div>
                              </div>
                           </li>
                          <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/azul_b.png"></i></span>
                                  <div class="tooltip-content"><h4>Buggie</h4>
                                     
                                             
                                             Buggy Tour <br>
                                          
                                </div>
                              </div>
                           </li>

                             </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
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
                1 Ativity <span class="price"><sup>$</sup>59</span>
              </div>
              </a>
            </div>
            <div class="hotel_title">
              <h3><strong></strong></h3>
              
             <ul class="add_info" style="text-align: center;">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                              <span class="tooltip-item"><img src="<?php echo base_url(); ?>public/img/paquetes/mini/rojo_1.png"></i></span>
                                  <div class="tooltip-content"><h4>ATTRACTION</h4>
                             
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

         <?php if($adventurevip==true){ ?>
           <div class="listing-item" data-listing-price="<?php echo $adventurevip_order; ?>">
    
      <div class="row">
        
        <div class="col-md-12 col-sm-12 wow zoomIn animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
       <div id="paqueteAdventureVip" rel="Adventure VIP Package" class="hotel_container">
           <div class="img_container">
               <a  href="#"  data-toggle="modal" data-target="#reservar">        <img src="<?php echo base_url(); ?>public/img/paquetes/mini/adventurevipPack_es.png" width="800" height="533" class="img-responsive" alt="">
              <div class=""></div>
                            
              <div class="short_info hotel">
                Unlimmited<span class="price"><sup>$</sup>169</span>
              </div>
              </a>
            </div>
            <div class="hotel_title" Style="text-align:center;">
              <h3><strong></strong></h3>
              <!-- end rating -->
              
                            
                         <ul class="add_info" style="text-align: center;">
                <li style="display: block;border:0px;width:100%;border: 1px solid;border-color: #ccc;">
                            <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><button class="btn_1 white" style="padding: 6px 72px;">Free Election</a></span>
                                  <div class="tooltip-content"><h4 align="center">Our Attractions</h4>
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
                                             WATERFALL POOL <br>
                                             Playground <br>     
                                      </div>
                                </div>
                              </div>
                           </li>
          </ul>
                            </ul><!-- End wish list-->
            </div>
          </div><!-- End box tour -->
        </div>
</div>
      </div>
         <?php } ?>

			</div>
			
			
		</div>


