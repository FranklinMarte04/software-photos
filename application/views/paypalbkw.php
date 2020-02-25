<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="punta cana, experencia, parque, bavaro, republica dominicana, estadia, emocion, hospitalidad, adrenalina, excursion, atraccion, zipline, simulador vuelos, zorbing, globo, mountainbike, trampoline, segway">
    <meta name="description" content="parque en bavaro, parque en punta cana, atracciones, aventura, que hacer en bavaro, punta cana, republica dominicana">
    <meta name="author" content="Innovatech VS">
    <title>Paypal - Bavaro Adventure Park</title>

   <?php echo $header; ?>
           <script type='text/javascript'>
        $(document).ready(function() {
 
          
        document.formTpv.submit();
      

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

    <section id="hero_2">
  <div class="intro_title animated fadeInDown">
           <h1>Place your order</h1>
            <div class="bs-wizard">
        
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="payment.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>  
                   
    </div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
      <div class="container">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- End position -->
    
    <div class="container margin_60">
  <div class="row">
    <div class="col-md-8">
        
      <div class="form_title">
        <h3><strong><i class="icon-ok"></i></strong>Conectado Con paypal....</h3>
        

      </div>
      <div class="step">
        <p>
       Espere un momento en Breve Sera Transferido al los servidores de paypal donde podra completar el pago...
             </p>
      </div><!--End step -->
   
    </div><!--End col-md-8 -->
        
    <aside class="col-md-4">
    <div class="box_style_1">
      <h3 class="inner">Gracias</h3>
      <p>
        Nihil inimicus ex nam, in ipsum dignissim duo. Tale principes interpretaris vim ei, has posidonium definitiones ut. Duis harum fuisset ut his, duo an dolor epicuri appareat.
      </p>
      
    </div>
    
    </aside>
        
  </div><!--End row -->
  <!--Envia la informacion a paypal-->

<form style="display:none;" name='formTpv' method='post' action='https://www.paypal.com/cgi-bin/webscr' style="border: 1px solid #CECECE;padding-left: 10px;">
          <input name="cmd" type="hidden" value="_cart"> 
          <input name="upload" type="hidden" value="1">
          <input name="business" type="hidden" value="hehotelpromotion@gmail.com">
              <input name="currency_code" type="hidden" value="USD">
              <input name="return" type="hidden" value="<?php echo base_url();?>view/confirmacion_pago">
          <input type='hidden' name='cancel_return' value='<?php echo base_url();?>shopping/'>
          <input name="notify_url" type="hidden" value="<?php echo base_url();?>paypalipn.php">
              <input name="rm" type="hidden" value="2">
 <?php
$i=1;
foreach ($this->cart->contents() as $items){
?>
<input name="item_number_<?php echo $i; ?>" type="hidden" value="<?php echo  implode(',',$items['options']); ?>">
<input name="item_name_<?php echo $i; ?>" type="hidden" value="<?php echo $items['nombre_producto']; ?>"> 
<input name="amount_<?php echo $i; ?>" type="hidden" value="<?php echo $items['subtotal']; ?>"> 
<input name="discount_amount_cart" type="hidden" value="<?php echo $this->cart->descuento();?>"/>
   <?php $i++; } ?>     

      </form>
</div><!--End container -->

   
</div><!--End container -->

