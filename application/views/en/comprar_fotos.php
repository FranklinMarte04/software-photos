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

    <title>Buy Photo- Bavaro Adventure Park</title>

    <?php echo $header; ?>

    <script type="text/javascript">

   $(document).ready(function(){

   $("#btn_enviar").click(function(e){

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

            <h1>Buy your Photos and Videos</h1>

            

            </div>

        </div>

    </section><!-- End Section -->



    <div id="position">

    	<div class="container">

                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="">The Park</a></li>
                    <li>Buy Photos and Videos</li>
                    </ul>

        </div>

    </div><!-- End Position -->



<div class="container margin_60">

	<div class="row">

		<div class="col-md-8 col-sm-8">

			<div class="form_title">

				<h3><strong><i class="icon-pencil"></i></strong>Buy your Photos and Videos</h3>

				<p>If you were visitting our park recently and would like to have pictures and videos from your experiencie, pleaqse fill the following form:</p>

			</div>

			<div class="step">

            

				<div id="message-contact"></div>

				<form method="post"  id="contactform">

					<div class="row">

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Full Name:</label>

								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido">

							</div>

						</div>

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Date:</label>

								<input type="date" class="form-control" id="fecha" name="fecha">

							</div>

						</div>

					</div>

					<!-- End row -->

					<div class="row">

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Email</label>

								<input type="email" id="email" name="email" class="form-control" placeholder="Email">

							</div>

						</div>

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Telephone</label>

								<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono">

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Reference No.:</label>

								<input type="text" id="referencia" name="referencia" class="form-control" placeholder="No. Referencia">

							</div>

						</div>

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Pax No.:</label>

								<input type="text" id="pax" name="pax" class="form-control" placeholder="Cantidad de Visitantes al Parque">

							</div>

						</div>

						<div class="col-md-6 col-sm-6">

							<div class="form-group">

								<label>Activities:</label>

								<input type="text" id="actividades" name="actividades" class="form-control" placeholder="Actividades">

							</div>

						</div>

					</div>

					<div class="row">

						<div class="col-md-12">

							<div class="form-group">

								<label>Comments:</label>

								<textarea rows="5" id="mensaje" name="mensaje" class="form-control" placeholder="Deje se su Mensaje Por favor" style="height:200px;"></textarea>

							</div>

						</div>

					</div>

					<div class="row">

						

                                            <input type="button" value="Enviar" class="btn_1" id="btn_enviar">

						</div>

				</form>

			</div>

		</div><!-- End col-md-8 -->

        

		<div class="col-md-4 col-sm-4">

			<div class="box_style_1">

				<span class="tape"></span>

				<h4>Photo Team<span><i class="icon-pin pull-right"></i></span></h4>

				<p>

					Photoshop, Videos and Park Promotional articles

					</p>

				<hr>

				<h4>Contact Us<span><i class="icon-help pull-right"></i></span></h4>

				<p>If you wish to receive a personalized service, you can send us an email to:</p>

				<ul id="contact-info">

					<li><a href="mailto:phototeam@bavaroadventurepark.com">phototeam@bavaroadventurepark.com</a></li>

					<li><a href="mailto:info@bavaroadventurepark.com">info@bavaroadventurepark.com</a></li>

				

				</ul>

			</div>

			<div class="box_style_4">

				<i class="icon_set_1_icon-57"></i>

				<h4>Call us to<span>Book</span></h4>

				<a href="tel://004542344599" class="phone">+1 809 933 3040</a>

				<small>(Extensión 214)</small>

				<small>Monday to Sunday 9:00 a.m. - 18:00 p.m</small>

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

