<!DOCTYPE html>

<!--[if IE 8]><html class="ie ie8"> <![endif]-->

<!--[if IE 9]><html class="ie ie9"> <![endif]-->

<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="Bavaro Adventure Park - Comprar Fotos,videos,paquetes..." />

    <meta name="description" content="Bavaro Adventure Park - Comprar Fotos">

    <meta name="author" content="Innovatech VS">

    <title>Bavaro Adventure Park</title>

    <?php echo $header; ?>

    <script type="text/javascript">

   $(document).ready(function(){

   	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
   	
   $("#btn_enviar").click(function(e){

   	$(".error").fadeOut().remove();
		
        if ($("#nombre").val() == "") {  
			$("#nombre").focus().after('<span class="error">Ingrese su nombre</span>');  
			return false;  }

		if ($("#fecha").val() == "") {  
			$("#fecha").focus().after('<span class="error">Ingrese una Fecha</span>');   
			return false;  }

		if ($("#email").val() == "" || !emailreg.test($("#email").val())) {
			$("#email").focus().after('<span class="error">Ingrese un email correcto</span>');  
			return false;  
		}  

		

		  if ($("#actividades").val() == "") {  
			$("#actividades").focus().after('<span class="error">Ingrese las Actividades Realizadas</span>');  
			return false;  
		}    
		

		 if ($("#mensaje").val() == "") {  
			$("#mensaje").focus().after('<span class="error">Ingrese sus Comentarios</span>');  
			return false;  
		}   	


    e.preventDefault();

    $.ajax({

          url:'<?php echo base_url(); ?>'+'cliente/comprar_fotos',

	  type: 'POST',

	  data: $('#contactform').serialize(),

          success:function(msj){

           if(msj == 'enviado'){

	    jQuery.fn.reset = function(){

	    $(this).each(function(){this.reset();});
	                                       };
	    $("#contactform").reset();

	    $("#confirmacion_correo").modal('show');

	     }}

		});

			});
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

    

    <section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>public/img/portada.jpg" data-natural-width="1400" data-natural-height="470">

        <div class="parallax-content-1">

            <div class="animated fadeInDown">

            <h1>Comprar FOtos y Videos</h1>

            

            </div>

        </div>

    </section><!-- End Section -->



    <div id="position">

    	<div class="container">

                	<ul>

                    <li><a href="#">Inicio</a></li>

                    <li>Comprar Fotos y Videos</li>

                    </ul>

        </div>

    </div><!-- End Position -->



<div class="container margin_60">

	<div class="row">

		<div class="col-md-8 col-sm-8">

			<div class="form_title">

		<h3><strong><i class="icon-info"></i></strong>Confirmacion de Solictud de Fotos</h3>

			

			</div>

			<div class="step">

            <div class="row">
<p><h4>Su Solicitud de Fotos y Videos ha sido enviada satisfactoriamente. Nuestro personal le contactará dentro de las proximas 24 horas. En caso de no recibir respuesta, escribirnos a <p><h4><a href="mailto:phototeam@bavaroadventurepark.com">phototeam@bavaroadventurepark.com</a></h4></p>
					

			</div>
				</div>

		</div><!-- End col-md-8 -->

        

		<div class="col-md-4 col-sm-4">

			<div class="box_style_1">

				<span class="tape"></span>

				<h4>Photo Team<span><i class="icon-pin pull-right"></i></span></h4>

				<p>

					Tienda de fotos,videos y Articulos Promocionales del Parque

					</p>

				<hr>

				<h4>Contáctenos<span><i class="icon-help pull-right"></i></span></h4>

				<p>Si desea recibir una atención personalizada puede enviarnos un correo electronicó a:</p>

				<ul id="contact-info">

					<li><a href="mailto:phototeam@bavaroadventurepark.com">phototeam@bavaroadventurepark.com</a></li>

					<li><a href="mailto:info@bavaroadventurepark.com">info@bavaroadventurepark.com</a></li>

				

				</ul>

			</div>

			<div class="box_style_4">

				<i class="icon_set_1_icon-57"></i>

				<h4>Contactenos  vía <span>Telefónica</span></h4>

				<a href="tel://004542344599" class="phone">+1 809 933 3040</a>

				<small>(Extensión 214)</small>

				<small>Lunes a Domingo 9:00 a.m. - 6:00 p.m.</small>

			</div>

		</div><!-- End col-md-4 -->

	</div><!-- End row -->

</div><!-- End container -->



<!-- Modal Review -->

<div class="modal fade" id="confirmacion_correo" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title">Confirmacion</h4>

   

       

      </div>

      <div class="modal-body">

         <p>Gracias por enviar su solicitud de fotos o Videos. Nuestro personal le contactará dentro de las próximas 24 horas laborables.</p>

    



</div>

      </div>

    </div>

  </div>

</div><!-- End modal review -->

