    <!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Bavaro,adventure,park,atracciones,zipline,punta cana." />
    <meta name="description" content=" parque en bavaro, parque en punta cana, atracciones, aventura, que hacer en bavaro, punta cana, republica dominicana">
    <meta name="author" content="Innovatech VS">
    <title>CD Personal- Bavaro Adventure Park</title>
    
    <!-- Favicons-->
    <?php echo $header; ?>
        
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
    <?php echo $menuprincipal; ?><!-- End Header -->
    
    
<section class="parallax-window" data-parallax="scroll" data-image-src="<?Php echo base_url(); ?>public/img/portada.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        	<h1>CD PERSONAL!</h1>
        	<p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">CD & DVD</a></li>
                    <li>CD PERSONAL</li>
                    </ul>
        </div>
</div><!-- End Position -->

<div class="margin_60 container">
		
		
		<table id="tablepaypal" width="1100x" border="1">
<tr>
<th>Descripción</th>
<th>Precio</th>
<th>Link</th>
</tr>
<tr>
<td>1  ATTRACTION       5     Persons   </td>
<td>Us$ 125</td>
<td><FORM ACTION="https://www.paypal.com/cgi-bin/webscr" METHOD="POST">
<INPUT TYPE="hidden" NAME="cmd" VALUE="_xclick">
<INPUT TYPE="hidden" NAME="business" VALUE="hehotelpromotion@gmail.com">

<INPUT TYPE="hidden" NAME="item_name" VALUE="1  ATTRACTION       5     Persons   ">
<INPUT TYPE="hidden" NAME="item_number" VALUE="0001">
<INPUT TYPE="hidden" NAME="amount" VALUE="125.00">
<INPUT TYPE="hidden" NAME="currency_code" VALUE="USD">
<INPUT TYPE="image" NAME="submit" BORDER="0" SRC="http://www.paypal.com/es_XC/i/btn/btn_buynow_LG.gif" ALT="PayPal. La forma rápida y segura de pagar en Internet.">
<img alt="" border="" width="1" height="1" src="https://www.paypal.com/es_XC/i/scr/pixel.gif">
</FORM></td>
</tr>
<tr>

</table>
		<div class="content">
        
			<section id="section-1">
			


            
            
            
            
            
            


			</section><!-- End section 1 -->
            
			<!-- End section 2 -->
            
			<!-- End section 3 -->
            
			<!-- End section 4 -->
            
		</div><!-- End content -->
	</div><!-- End tabs -->
</div><!-- end container -->

<?php echo $reservas ?><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

 <!-- Specific scripts -->
<script src="js/tabs.js"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
<script>
	$('.wishlist_close_admin').on('click', function(c){
		$(this).parent().parent().parent().fadeOut('slow', function(c){
		});
	});	
</script>

  </body>
</html>