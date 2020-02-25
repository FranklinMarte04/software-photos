 <!-- Date and time pickers -->

 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script>
  $(function() {
    $.datepicker.regional['en'] = {
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['en']);
    $( "#fecha" ).datepicker({ minDate: <?php echo min_date(); ?>, /* maxDate: "+12M +10D" */});
  });
  </script>
   <script>
  $(function() {

 $.datepicker.setDefaults($.datepicker.regional['en']);
     $("#fechaphoto").datepicker({ });
  });
  </script>


<!-- Modal Review -->
<div class="modal fade" id="reservar" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="titulo_paquete_en"></h4>
         <span id="tituloPrecio_en"></span>
       
      </div>
      <div class="modal-body">
         <p id="comp">Please complete the form below to continue with your reservation:</p>
        <div id="step1" class="mostrar">
        <form method="post"  action="<?php echo base_url(); ?>shopping_en/add_shopping">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="nombre" id="nombre" type="text" placeholder="Name" class="form-control" value="<?php echo $this->session->userdata('datocliente')["nombre"]; ?>" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="apellido" id="apellido" type="text" placeholder="Last Name" class="form-control" value="<?php echo $this->session->userdata('datocliente')["apellido"]; ?>">
              </div>
            </div>
          </div>
          <!-- End row -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input name="email" id="email" type="email" placeholder="E-mail" class="form-control" value="<?php echo $this->session->userdata('datocliente')["email"]; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input name="telefono" id="telefono" type="text" placeholder="Telephone Number" class="form-control" value="<?php echo $this->session->userdata('datocliente')["telefono"]; ?>">
              </div>
            </div>

          </div>

          <!-- End row -->
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                 <label><i class="icon-calendar-7"></i>Check in Date</label>
   
                 <input type="text" name="fecha" id="fecha" readonly class="date-pick form-control" value="<?php echo $this->session->userdata('datocliente')["fecha_reserva"]; ?>">
           
        
              </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
              <div class="form-group">
                <label>Children</label>
                <select class="form-control" name="nino" id="ninos">
                  <option select value="0">0</option>
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
          </div>
          <!-- End row -->
        
        <div class="row">
          
     <input name="nombre_paquete" id="paquete" type="hidden" class="form-control">
        <input name="precio" id="paqueteprecio" type="hidden" class="form-control">
        <input name="precio_nino" id="precio_nino" type="hidden" class="form-control">
        <input name="id" id="id_paquete" type="hidden" class="form-control">
       <div class="col-md-12">
  <input type="submit"  class="btn_full" id="btnreservar" value="Book" >
  <input type="button"  class="btn_full" id="btnsiguiente" value="Next">
  
    
  
        </div>
        


         </div>
</div>
<div id="step2" class="ocultar">
                <h3 style="color: #158A15;">Do you want to add one of our Tours to your package?</h3>
          
  <table class="table table-striped cart-list add_bottom_30">
            <thead>
            <tr>
                <th>
                   Combos
                </th>
                <th>
                    
                </th>
                <th>
                   
                </th>
                <th>
                   
                </th>
                <th>
                   </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td id="tdcrazyadventure">
                    <div class="thumb_cart">
                        <img src="<?php echo base_url(); ?>public/img/buggie.jpg" alt="">
                    </div>
                     <span class="item_cart">CRAZY BUGGIES TOUR + ADVENTURE PACKAGE = $168</span>
                     <p>3 Hours tours</p>
                </td>

                <td id="tdcrazyadventure1">
                    <div class="thumb_cart">
                        <img src="<?php echo base_url(); ?>public/img/buggie.jpg" alt="">
                    </div>
                     <span class="item_cart">CRAZY BUGGIES TOUR + ZIPLINE MEGA SPLASH = $158</span>
                     <p>3 Hours tours</p>
                </td>

                <td>
                    &nbsp;
                </td>
                <td>
                    &nbsp;
                </td>
                <td>
                    <strong>&nbsp;</strong>
                </td>
               <td id="tdcrazybuggiestour">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox"  name="crazybuggiestour" id="crazybuggiestour">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
                 <td id="tdcrazybuggiestour1">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="crazybuggiestour1" id="crazybuggiestour1" >
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <!--<tr id="trsuset">
                <td id="tdsunsetadventure">
                    <div class="thumb_cart">
                        <img src="<?php echo base_url(); ?>public/img/sunset.jpg" alt="">
                    </div>
                     <span class="item_cart">SUNSET VIP + ADVENTURE PACKAGE = $188</span>
                    <p>3 Hours tours</p>
                </td>

                <td id="tdsunsetadventure1">
                    <div class="thumb_cart">
                        <img src="<?php echo base_url(); ?>public/img/sunset.jpg" alt="">
                    </div>
                     <span class="item_cart">SUNSET VIP + ZIPLINE MEGA SPLASH = $178</span>
                    <p>3 Hours tours</p>
                </td>

                <td>
                    &nbsp;
                </td>
                <td>
                   &nbsp;
                </td>
                <td>
                    <strong>&nbsp;</strong>
                </td>
                <td id="tdsunsetvip">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="sunsetvip" id="sunsetvip">
                    <span>
                    <span>Not</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
                <td id="tdsunsetvip1">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="sunsetvip1" id="sunsetvip1">
                    <span>
                    <span>Not</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>-->

            <tr>
               
                <td >
                    <div class="thumb_cart">
                        <img src="<?php echo base_url(); ?>public/img/notour.jpg" alt="">
                    </div>
                     <span class="item_cart">Thanks, I do not want to add a tour </span>
                    
                </td>

                <td>
                    &nbsp;
                </td>
                <td>
                   &nbsp;
                </td>
                <td>
                    <strong>&nbsp;</strong>
                </td>
                <td id="tdnotourzipline">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="notourzipline" id="notourzipline">
                    <span>
                    <span>Not</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
                <td id="tdnotouradventure">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="notouradventure" id="notouradventure">
                    <span>
                    <span>Not</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
                
            </tr>
          
            </tbody>

            </table>
<input type="button" class="btn_full" id="btnatras" value="Back">
<input type="submit" class="btn_full" id="btnreservar" value="Book Now">


            </div>
</div>
        
       </form>  
      </div>
    </div>
  </div>
</div><!-- End modal review -->
<style type="text/css">
.ocultar{

  display: none;
}

.mostrar{

  display: block;
}
#btnatras{

    float: left;
    width: 49%;
    margin: 0% 1%;
}
#btnreservar{

    width: 49%;
}
</style>
  
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <p class="p_footer">© Bávaro Adventure Park, 2019. All rights reserved.</p>
                </div>
                <div class="col-md-5">
                  <p class="online">online payment</p>
                    <img class="img_footer" src="http://bavaroadventurepark.com/newweb/wp-content/uploads/2019/01/payment-2.png">
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
         
    </footer>

<!-- End footer -->
<div id="toTop"></div><!-- Back to top button -->
<div id="overlay"></div><!-- Mask on input focus -->   
<!-- Jquery -->
<script src="<?php echo base_url(); ?>public/js/scripts.js"></script>
<script src="<?php echo base_url(); ?>public/js/common_scripts_min.js"></script>
<script src="<?php echo base_url(); ?>public/js/functions.js"></script>



<script type="text/javascript">  
//Incrementer
$(function () {
    "use strict";
    $(".numbers-row").append('<div  class="inc button_inc">+</div><div class="dec button_inc">-</div>');
    $(".button_inc").on("click", function () {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });
});
 </script>
 
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="<?php echo base_url(); ?>public/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>public/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo base_url(); ?>public/js/revolution_func.js"></script>
 

<!--Review modal validation -->
<script src="<?php echo base_url(); ?>public/assets/validate.js"></script>
<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?php echo base_url(); ?>public/js/map_contact.js"></script>
<script src="<?php echo base_url(); ?>public/js/infobox.js"></script>

<script src="<?php echo base_url(); ?>public/js/jquery.zweatherfeed.js"></script> 
<script>
$('#weather').weatherfeed(['DRXX0022'], {
        language : 'en',
        forecast: true
    });
</script>




</body>

</html>