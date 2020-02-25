<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Informacion,destino,mapa,localizacion" />
    <meta name="description" content="Informacion de mapa Bavaro Adventure Park">
    <meta name="author" content="Innovatech VS">
    <title>Mapa del paque - Bavaro Adventure Park</title>
    
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
    <?php echo $menuprincipal; ?>
    <!-- End Header -->
    
    
 	<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url(); ?>public/img/mpa_portada.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
            
    </section><!-- End section -->

  <div id="position">
      <div class="container">
                  <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">El Parque</a></li>
                    <li>Mapa</li>
                    </ul>
        </div>
    </div><!-- End position -->

<div class="container margin_60">
    <div class="row">
     
     <div class="col-md-8">
      <div class="box_style_1"><div class="row magnific-gallery add_bottom_60 ">
            <a href="<?php echo base_url(); ?>public/img/mapa.jpg" title="Mapa del Parque"><img src="<?php echo base_url(); ?>public/img/mapa.jpg" alt="" class="img-responsive styled"></a>
        </div>
        </div></div><!-- end box_style_1 -->
                     
     <!-- End col-md-8--> 
     
     <aside class="col-md-3 add_bottom_30">

        <div class="widget">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
            </span>
          </div><!-- /input-group -->
        </div><!-- End Search -->
                <hr>
        <div class="widget" id="cat_blog">
          <h4>El Parque</h4>
          <ul>
                      <li><a href="<?php echo base_url(); ?>view/informacion_general">Informaci&oacute;n General</a></li>
                        <li><a href="#">Mapa del Parque</a></li>
                        <li><a href="<?php echo base_url(); ?>view/galeria">Galer&iacute;a Multimedia</a></li>
                        <li><a href="#">Comprar Fotos</a></li>
                        <li><a href="<?php echo base_url(); ?>view/bavaro_puntacana">Nuestra Ubicaci&oacute;n</a></li>
                    </ul>
        </div><!-- End widget -->
 
               <hr>
            
        <div class="widget">
          <h4>Comentarios Recientes</h4>
          <ul class="recent_post">
            <li>
            <i class="icon-calendar-empty"></i> 29 julio 2018  -  laguerlabcare
                        <div>Actividad sana y divertida para toda la familia mucha seguridad. Los guias bien adiestrados y para todos Los gustos</div>
            </li>
            <li>
            <i class="icon-calendar-empty"></i> 17 Mayo 2017  -  serguillermo
            <div>Disfruta a lo máximo, tiene diversidad de actividades extremas, pasas un día magnifico, es altamente recomendable!</div>
            </li>
          </ul>
        </div><!-- End widget -->
                <hr>
        <!-- End widget -->

     </aside><!-- End aside -->  
  
  </div><!-- End row-->   
</div><!-- End container -->
