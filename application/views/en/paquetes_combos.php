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
    
    <!-- Radio and check inputs -->
    <link href="../css/skins/square/grey.css" rel="stylesheet">
    
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
    <?php include("includes/header.php"); ?><!-- End Header -->

<section class="parallax-window" data-parallax="scroll" data-image-src="../img/portada.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Paquetes y Combos</h1>
        <p>Observa nuestro diferentes Tipos de Paquetes y combos que tenemos para Ti</p>
        </div>
    </div>
</section><!-- End section -->

<div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">comprar Entradas</a></li>
                    <li>Combos y paquetes</li>
                    </ul>
        </div>
    </div><!-- Position -->
    
<div class="collapse" id="collapseMap">
	<div id="map" class="map"></div>
</div><!-- End Map -->

<div class="container margin_60">
	<div class="row">
		<aside class="col-lg-3 col-md-3">
		<p>
			<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">Ver mapa</a>
		</p>
        
		<div class="box_style_cat">
			<ul id="cat_nav">
				<li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a></li>
				<li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a></li>
			</ul>
		</div>
        
		<div id="filters_col">
			<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
			<div class="collapse" id="collapseFilters">
				<div class="filter_type">
					<h6>Price</h6>
					<ul>
						<li><label><input type="checkbox" checked>From $10 to $50</label></li>
						<li><label><input type="checkbox">From $50 to $80</label></li>
						<li><label><input type="checkbox">From $80 to $100</label></li>
					</ul>
				</div>
				<div class="filter_type">
					<h6>Rating</h6>
					<ul>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
						<li><label><input type="checkbox"><span class="rating">
						<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</span></label></li>
					</ul>
				</div>
				<div class="filter_type">
					<h6>Facility</h6>
					<ul>
						<li><label><input type="checkbox">Pet allowed</label></li>
						<li><label><input type="checkbox">Groups allowed</label></li>
						<li><label><input type="checkbox">Tour guides</label></li>
						<li><label><input type="checkbox">Access for disabled</label></li>
					</ul>
				</div>
			</div><!--End collapse -->
		</div><!--End filters col-->
		<div class="box_style_2">
			<i class="icon_set_1_icon-57"></i>
			<h4>Need <span>Help?</span></h4>
			<a href="tel://004542344599" class="phone">+45 423 445 99</a>
			<small>Monday to Friday 9.00am - 7.30pm</small>
		</div>
		</aside><!--End aside -->
        
		<div class="col-lg-9 col-md-8">
        
			<div id="tools">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select-filters">
							<select name="sort_price" id="sort_price">
								<option value="" selected>Sort by price</option>
								<option value="lower">Lowest price</option>
								<option value="higher">Highest price</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select-filters">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="lower">Lowest ranking</option>
								<option value="higher">Highest ranking</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 hidden-xs text-right">
						<a href="#" class="bt_filters"><i class="icon-th"></i></a> <a href="all_tours_list.html" class="bt_filters"><i class=" icon-list"></i></a>
					</div>
				</div>
			</div><!--End tools -->
            
			<div class="row">
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/paquetes/splash.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon top_rated"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-44"></i>Zipline Mega Splash<span class="price"><sup>$</sup>99</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Zipline Mega </strong> Splash</h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.2s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/paquetes/adventurePack_es.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon top_rated"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-43"></i>Adventure<span class="price"><sup>$</sup>109</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Adventure</strong></h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                </div><!-- End row -->
                
                <div class="row">
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/paquetes/adventurePlusPack_es.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon popular"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-44"></i>Adventure Plus<span class="price"><sup>$</sup>139</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Adventure</strong> Plus</h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.4s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/paquetes/adventurevip_es.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon popular"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-30"></i>Adventure VIP<span class="price"><sup>$</sup>169</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Adventure</strong> VIP</h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                </div><!-- End row -->
                
                <div class="row">
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.5s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/combos/1.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon popular"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-28"></i>Buggie + Mega Splas<span class="price"><sup>$</sup>45</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Buggie + Mega Splas</strong></h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.6s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/combos/2.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon top_rated"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-44"></i>Buggie + Adventure<span class="price"><sup>$</sup>45</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Buggie + Adventure</strong></h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                </div><!-- End row -->
                
                <div class="row">
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.7s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/combos/3.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon top_rated"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-3"></i>Sunset + Mega Splash<span class="price"><sup>$</sup>45</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Sunset + Mega Splash</strong></h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                
				<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.8s">
					<div class="tour_container">
						<div class="img_container">
							<a href="single_tour.html">
							<img src="../img/combos/4.png" width="800" height="533" class="img-responsive" alt="">
							<div class="ribbon top_rated"></div>
							<div class="short_info">
								<i class="icon_set_1_icon-4"></i>Sunset + Adventure<span class="price"><sup>$</sup>45</span>
							</div>
							</a>
						</div>
						<div class="tour_title">
							<h3><strong>Sunset + Adventure</strong></h3>
							<div class="rating">
								<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small>
							</div><!-- end rating -->
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Comprar a Hora</span></span></a>
							</div><!-- End wish list-->
						</div>
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
			</div><!-- End row -->
            
            <hr>
                
				<!-- end pagination-->
                
		</div><!-- End col lg 9 -->
	</div><!-- End row -->
</div><!-- End container -->
    
<?php include("includes/footer.php"); ?><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/common_scripts_min.js"></script>
<script src="../js/functions.js"></script>

<!-- Specific scripts -->
<!-- Cat nav mobile -->
<script  src="../js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<!-- Check and radio inputs -->
<script src="../js/icheck.js"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="../js/map.js"></script>
<script src="../js/infobox.js"></script>

  </body>
</html>