<?php  
$url="http://".$_SERVER['HTTP_HOST']."/en".$_SERVER['REQUEST_URI'].""; 
?>
<header>
        <!-- End top line-->
        <script>
        $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
     //console.log(scroll);
    if (scroll >= 50) {
        //console.log('a');
        $(".slogan").addClass("d_slogan");
    } else {
        //console.log('a');
        $(".slogan").removeClass("d_slogan");
    }
});
    </script>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <div id="logo">
                        <a href="<?php echo base_url();?>">
                        <img src="<?php echo base_url(); ?>public/img/logo.png" class="logo_normal">
                       <img src="<?php echo base_url(); ?>public/img/logo.png" class="logo_sticky" style="position: absolute;margin: -4% -7%;width: 38%;">
                        </a>
                    </div>
                </div>
                
                <nav class="col-md-7 col-sm-7 col-xs-7">
                <h4 class="slogan">For online booking FREE transportation from and to you hotel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Booking 24/7 <br> +1 (809) 626-9967</h4>
                    
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="<?php echo base_url(); ?>public/img/logo.png">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="http://bavaroadventurepark.com/passes/" class="show-submenu">passes</i></a>
                            </li>
                            <li class="submenu">
                                <a href="http://bavaroadventurepark.com/tours/" class="show-submenu">Tours</i></a>
                            </li>
                            <li class="submenu">
                                <a href="http://bavaroadventurepark.com/combos/" class="show-submenu">Combos</i></a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">The park<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="http://bavaroadventurepark.com/about-us/">About Us</a></li>
                                    <li><a href="http://bavaroadventurepark.com/general-information/">GENERAL INFORMATION</a></li>
                                    <li><a href="http://bavaroadventurepark.com/gallery/">Gallery</a></li>
                                    <li><a href="http://bavaroadventurepark.com/park-map/">PARK MAP</a></li>
                                    <li><a href="http://bavaroadventurepark.com/our-location/">OUR LOCATION</a></li>
                                    <li><a href="http://bavaroadventurepark.com/groups-events-team-building/">GROUPS & EVENTS</a></li>


                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="http://bavaroadventurepark.com/buy-photos/" class="show-submenu">BUY PHOTOS & VIDEOS</i></a>
                            </li>
                            
                                <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu idioma">Español<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="http://bavaroadventurepark.com/?lang=fr">Framcais</a></li>
                                    <li><a href="http://bavaroadventurepark.com/">Ingles</a></li>
                                </ul>
                            </li>
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                   
                </nav>
            </div>
        </div><!-- container -->
    </header>

    