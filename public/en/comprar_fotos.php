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
    <title>Bavaro Aventure Park</title>
    
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
     <?php include("includes/header.php"); ?>
     <!-- End Header -->
    
    <section class="parallax-window" data-parallax="scroll" data-image-src="../img/portada.jpg" data-natural-width="1400" data-natural-height="470">
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
				<h3><strong><i class="icon-pencil"></i></strong>Solicite sus fotos o Video</h3>
				<p>
					Si estuvo recientemente en el parque y desea adquirir las fotos o videos de su visita, favor de llenar el siguiente formulario:
				</p>
			</div>
			<div class="step">
            
				<div id="message-contact"></div>
				<form method="post" action="assets/contact.php" id="contactform">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Nombre Completo:</label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Nombre y Apellido">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Fecha visita al Parque:</label>
								<input type="date" class="form-control" id="fecha_visita" name="lastname_contact" placeholder="Fecha Visita al parque">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Telefono</label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Telefono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>No. Referencia:</label>
								<input type="email" id="Referencia" name="email_contact" class="form-control" placeholder="No. Referencia">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>No. Pax:</label>
								<input type="text" id="Pax" name="phone_contact" class="form-control" placeholder="Cantidad de Visitantes al Parque">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Mesaje:</label>
								<textarea rows="5" id="message_contact" name="message_contact" class="form-control" placeholder="Deje se su Mensaje Porfabor" style="height:200px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Foto Selfie</label>
							<input type="file" id="verify_contact" class=" form-control add_bottom_30" placeholder="Subir Foto para Identificarle...">
							
						</div>

						<div class="col-md-6">
							<label>Human verification</label>
							<input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Eres humano? 3 + 1 =">
							
						</div>

<input type="submit" value="Submit" class="btn_1" id="submit-contact">
						</div>
				</form>
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
					<li><a href="mailto:phototeam@bavaroaventurepark.com">phototeam@bavaroaventurepark.com</a></li>
					<li><a href="mailto:info@bavaroaventurepark.com">info@bavaroaventurepark.com</a></li>
				
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
<?php include("includes/footer.php"); ?><!-- End footer -->
<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
<script src="../js/functions.js"></script>

 <!-- Specific scripts -->
<script src="assets/validate.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="../js/map_contact.js"></script>
<script src="../js/infobox.js"></script>


  </body>
</html>