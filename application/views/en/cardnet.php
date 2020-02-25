<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->

<!--[if IE 9]><html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->

 <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />

    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">

    <meta name="author" content="Ansonika">

    <title>Bavaro Adventure Park</title>



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

        <h3><strong><i class="icon-ok"></i></strong>Connecting to Payment....</h3>

        



      </div>

      <div class="step">

        <p>

       Wait a moment while you will be transferred to the payment servers where you can complete the payment...

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



<form style="display:none;" name='formTpv' method='post' action='https://ecommerce.cardnet.com.do/authorize' style="border: 1px solid #CECECE;padding-left: 10px;">

<p><label>Tipo Transaccion: </label><input name="TransactionType" value="0200" ></p>
<p><label>Codigo Moneda: </label><input name="CurrencyCode" value="214" ></p>
<p><label>AcquiringInstitutionCode: </label><input name="AcquiringInstitutionCode" value="349" ></p>
<p><input name="MerchantType" value="4722" ></p>
<p><input name="MerchantNumber" value="349080293" ></p>
<p><input name="MerchantTerminal" value="10310146" ></p>
<p><label>URL Exito</label><input name="ReturnUrl" value="http://www.bavaroadventurepark.com/v1/cardnetipn.php" ></p>
<p><label>URL Fracaso</label><input name="CancelUrl" value="http://www.innovatechvstest.com/bavaroadventurepark/cardtest/error.php" ></p>
<p><label>Idioma</label><input name="PageLanguaje" value="ENG" ></p>
<p><input name="OrdenId" value="686" ></p>
<p><input name="TransactionId" value="<?php echo getcodigocliente($this->session->userdata('datocliente')["email"]); ?>" ></p>
<p><label>Monto</label><input name="Amount" value="<?php getmontopesos($this->cart->total()); ?>" ></p>
<p><input name="Tax" value="000000000000" ></p>
<p><label>Nombre Comercio</label><input name="MerchantName" value="BAVARO ADVENTURE PARK -PUNTA-CANA--PUJRD" ></p>
<p><input name="KeyEncriptionKey" value="1fc500b127d04b532f759d183944b057" ></p>
<p><input name="Ipclient" value="X.X.X.X" ></p>
<p><input name='loteid' Value='001' ></p>
<p><input name='seqid' Value='001' ></p>
</form>

</div><!--End container -->



   

</div><!--End container -->



