$(document).ready(function() {
$("#paqueteziplinemegasplash").click(function(e) {
$("#tdsunsetvip").hide();
$("#tdcrazybuggiestour").hide();
$("#tdnotouradventure").hide();
$("#tdnotourzipline").show();
$("#tdcrazyadventure").hide();
$("#tdsunsetadventure").hide();
$("#tdcrazyadventure1").show();
$("#tdsunsetadventure1").show();

$("#tdsunsetvip1").show();
$("#tdcrazybuggiestour1").show();
    paquete = $("#paqueteziplinemegasplash").attr("rel");
    precio="89.00";
    id_paquete="001";
    precio_nino="44.50";
 $("#paquete").val(paquete);
 $("#paqueteprecio").val(precio); 
 $("#precio_nino").val(precio_nino); 
 $("#id_paquete").val(id_paquete);
 $("#step2").addClass('ocultar');
 $("#btnsiguiente").hide();
 $("#btnreservar").show(); 
 $("#titulo_paquete").html("Zipline Mega Splash- 3 Atracciones");
 $("#tituloPrecio").html("$89- Adultos,  50%- Niños.");
  $("#titulo_paquete_en").html("Zipline Mega Splash- 3 Attractions");
 $("#tituloPrecio_en").html("$89- Adults,  50%- Children");
 });


  $("#btnsiguiente").click(function(e) {
  $("#step2").addClass('mostrar');
  $("#step1").removeClass('mostrar');
  $("#step1").addClass('ocultar');
  $("#comp").hide();

 $("#crazybuggiestour1").click(function() {  
  if($('#crazybuggiestour1').prop('checked',true) ) {
    paquete ="COMBO Zipline - Crazy Buggies Tour";
      precio="158.00";
      precio_nino="79.00";
      id_paquete="0089";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#precio_nino").val(precio_nino); 
    $("#id_paquete").val(id_paquete);
    $('#notourzipline').prop('checked',false) 
     $('#sunsetvip1').prop('checked',false); 
     
     }
    });

 


  $("#sunsetvip1").click(function() {  
  if($('#sunsetvip1').prop('checked',true)) {
    paquete ="COMBO Zipline Mega Splash- Sunset VIP";
      precio="178.00";
      precio_nino="89.00";
      id_paquete="0084";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#precio_nino").val(precio_nino); 
    $("#id_paquete").val(id_paquete);
     $('#notourzipline').prop('checked',false); 
    $('#crazybuggiestour1').prop('checked',false); 
   
    $("#tituloPrecio").html("$168- Adultos,  50%- Niños");

     }
     });

  $("#notourzipline").click(function() {  
  if($('#notourzipline').prop('checked',true) ) {
     paquete = $("#paqueteziplinemegasplash").attr("rel");
    precio="89.00";
    precio_nino="44.50";
    id_paquete="001";
      $("#paquete").val(paquete);
      $("#paqueteprecio").val(precio);
      $("#precio_nino").val(precio_nino); 
      $("#id_paquete").val(id_paquete);
     $('#sunsetvip').prop('checked',false);
     $('#sunsetvip1').prop('checked',false);
     $('#crazybuggiestour').prop('checked',false); 
     $('#crazybuggiestour1').prop('checked',false);  
     }
    });

  $("#notouradventure").click(function() {  
  if($('#notouradventure').prop('checked',true) ) {
     paquete = $("#paqueteAdventure").attr("rel");
    precio="109.00";
    precio_nino="54.50";
    id_paquete="001";
      $("#paquete").val(paquete);
      $("#paqueteprecio").val(precio);
      $("#precio_nino").val(precio_nino); 
      $("#id_paquete").val(id_paquete);
     $('#sunsetvip').prop('checked',false);
     $('#sunsetvip1').prop('checked',false);
     $('#crazybuggiestour').prop('checked',false); 
     $('#crazybuggiestour1').prop('checked',false);  
     }
    });


  });

  
 $("#btnatras").click(function(e) {
  $("#step1").addClass('mostrar');
  $("#step2").removeClass('mostrar');
  $("#step2").addClass('ocultar');
    });

  $("#paqueteAdventure").click(function(e) {
$("#tdsunsetvip").show();
$("#tdcrazybuggiestour").show();
$("#tdnotouradventure").show();
$("#tdnotourzipline").hide();
$("#tdcrazyadventure").show();
$("#tdsunsetadventure").show();
$("#tdcrazyadventure1").hide();
$("#tdsunsetadventure1").hide();

$("#tdsunsetvip1").hide();
$("#tdcrazybuggiestour1").hide();

    paquete = $("#paqueteAdventure").attr("rel");
    precio="109.00";
    precio_nino="54.50";
    id_paquete="002";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#precio_nino").val(precio_nino); 
    $("#id_paquete").val(id_paquete);
    $("#step2").addClass('ocultar');
    $("#btnsiguiente").show();
    $("#btnreservar").hide();
    $("#titulo_paquete").html("Paquete Adventure- 5 Atracciones");
    $("#tituloPrecio").html("$109- Adultos,  50%- Niños");
    $("#titulo_paquete_en").html("Adventure Package- 5 Attractions");
    $("#tituloPrecio_en").html("$109- Adults,  50%- Children");
  });

  $("#btnsiguiente").click(function(e) {
  $("#step2").addClass('mostrar');
  $("#step1").removeClass('mostrar');
  $("#step1").addClass('ocultar');
  $("#comp").hide();
    $("#crazybuggiestour").click(function() {  
  if($('#crazybuggiestour').prop('checked',true) ) {
    paquete ="COMBO Adventure - Crazy Buggies Tour";
      precio="168.00";
      precio_nino="84.00";
      id_paquete="008";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#id_paquete").val(id_paquete);
     $('#sunsetvip').prop('checked',false); 
      $('#notourzipline').prop('checked',false) 
     }
     });
  $("#sunsetvip").click(function() {  
  if($('#sunsetvip').prop('checked',true)) {
    paquete ="COMBO Adventure - Sunset Vip";
      precio="188.00";
      precio_nino="94.00";
      id_paquete="0081";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#precio_nino").val(precio_nino); 
    $("#id_paquete").val(id_paquete);
    $('#notourzipline').prop('checked',false) 
    $('#crazybuggiestour').prop('checked',false); 
    
   $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
     }
     });
  });


  $("#paqueteAdventurePlus").click(function(e) {
     precio="139.00";
     precio_nino="69.50";
       id_paquete="003";
          paquete = $("#paqueteAdventurePlus").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
         $("#titulo_paquete").html("Paquete Adventure Plus - 7 Atracciones");
         $("#tituloPrecio").html("$139- Adultos,  50%- Niños");
         $("#titulo_paquete_en").html("Adventure Plus Package- 7 Attractions");
         $("#tituloPrecio").html("$139- Adults,  50%- Children");
       
  });

  $("#pqb").click(function(e) {
     precio="168.00";
     precio_nino="84.00";
       id_paquete="003";
          paquete = $("#pqb").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Buggie - Adventure");
         $("#tituloPrecio").html("$168- Adultos,  50%- Niños");
         $("#titulo_paquete_en").html("Buggie - Adventure Package");
         $("#tituloPrecio").html("$168- Adults,  50%- Children");
       
  });

  $("#pbavip").click(function(e) {
     precio="228.00";
     precio_nino="228.00";
       id_paquete="150";
          paquete = $("#pbavip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Buggie - Adventure VIP ");
         $("#tituloPrecio").html("$228- Adultos");
         $("#titulo_paquete_en").html("Buggie - Adventure VIP Package");
         $("#tituloPrecio").html("$228- Adults");
       
  });


  $("#paqueteAdventureVip").click(function(e) {
     precio="169.00";
     precio_nino="84.50";
       id_paquete="004";
          paquete = $("#paqueteAdventureVip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Vip - Ilimitado");
          $("#tituloPrecio").html("$169- Adultos,  50%- Niños");
          $("#titulo_paquete_en").html("Adventure Vip Package- Unlimited");
          $("#tituloPrecio_en").html("$169- Adults,  50%- Children");
       
  });

  $("#paqueteZiplineMegaSplashSusetVip").click(function(e) {
     precio="178.00";
     precio_nino="89.00";
       id_paquete="005";
          paquete = $("#paqueteZiplineMegaSplashSusetVip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
      $("#titulo_paquete").html("Paquete Zipline Mega Splash Suset Vip - 3 Atracciones + Sunset");
      $("#tituloPrecio").html("$178- Adultos,  50%- Niños");
      $("#titulo_paquete_en").html("Zipline Mega Splash Suset Vip - 3 Atracciones + Sunset");
      $("#tituloPrecio_en").html("$178- Adults,  50%- Children");
       
  });

$("#paqueteAdventureSunsetVip").click(function(e) {
     precio="188.00";
     precio_nino="94.00";
       id_paquete="006";
          paquete = $("#paqueteAdventureSunsetVip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
    $("#titulo_paquete").html("Paquete Adventure Suset Vip - 5 Atracciones + Sunset");
    $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
       
  });

  $("#paqueteDinoWorld").click(function(e) {
     precio="59.00";
     precio_nino="35";
    id_paquete="007";
          paquete = $("#paqueteDinoWorld").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Dinosaur World - 3 Atracciones");
       $("#tituloPrecio").html("$59- Adultos,  $35- Niños");
        $("#titulo_paquete_en").html("Dinosaur World Package - 3 Attractions");
       $("#tituloPrecio_en").html("$59- Adults,  $35- Children");
       
  });

 $("#ziplinemegasplashsusetvip").click(function(e) {
     precio="178.00";
     precio_nino="89.00";
    id_paquete="008";
          paquete = $("#ziplinemegasplashsusetvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Zipline Mega Splash Sunset Vip - 3 Atracciones + Sunset");
       $("#tituloPrecio").html("$178- Adultos,  50%- Niños");
        $("#titulo_paquete_en").html("Paquete Zipline Mega Splash Sunset Vip - 3 Atracciones + Sunset");
       $("#tituloPrecio_en").html("$178- Adults,  50%- Children");
       
  });


 $("#adventuresusetvip").click(function(e) {
     precio="188.00";
     precio_nino="94.00";
    id_paquete="010";
          paquete = $("#adventuresusetvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Sunset Vip - 5 Atracciones + Sunset");
       $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
       $("#titulo_paquete_en").html("Paquete Adventure Sunset Vip - 5 Atracciones + Sunset");
       $("#tituloPrecio_en").html("$188- Adults,  50%- Children");
       
  });


 $("#megasplashsunset").click(function(e) {
     precio="178.00";
     precio_nino="89.00";
    id_paquete="011";
          paquete = $("#megasplashsunset").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Zipline Mega Splash + Sunset Vip - 3 Atracciones + Sunset");
       $("#tituloPrecio").html("$178- Adultos,  50%- Niños");
       $("#titulo_paquete_en").html("Zipline Mega Splash Package + Sunset Vip - 3 Atracciones + Sunset");
       $("#tituloPrecio_en").html("$178- Adults,  50%- Children");
       
  });


 $("#adventuresusetvip").click(function(e) {
     precio="188.00";
     precio_nino="94.00";
    id_paquete="012";
          paquete = $("#adventuresusetvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Sunset Vip - (5 Atracciones + Sunset)");
       $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
       $("#titulo_paquete_en").html("Sunset Vip - Adventure Package (5 Attractions + Sunset)");
       $("#tituloPrecio_en").html("$188- Adults,  50%- Children");
       
  });


 $("#buggiesmegasplash").click(function(e) {
     precio="139.00";
     precio_nino="69.50";
       id_paquete="012";
          paquete = $("#buggiesmegasplash").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Combo Buggies - Zipline ");
        $("#tituloPrecio").html("$139- Adultos,  50%- Niños.");
        $("#titulo_paquete_en").html("Buggies - Zipline COMBO");
        $("#tituloPrecio_en").html("$139- Adults,  50%- Children");
       
  });

 $("#paquetepolarisvip").click(function(e) {
     precio="119.00";
     precio_nino="119.00";
       id_paquete="012";
          paquete = $("#paquetepolarisvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Polaris VIP");
        $("#tituloPrecio").html("$119- Adultos,");
        $("#titulo_paquete_en").html("Polaris VIP");
        $("#tituloPrecio_en").html("$119- Adults,");
       
  });

 $("#tourspolaris").click(function(e) {
     precio="95.00";
     precio_nino="95.00";
       id_paquete="012";
          paquete = $("#tourspolaris").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Tours Polaris");
        $("#tituloPrecio").html("$95- Adultos");
        $("#titulo_paquete_en").html("Polaris Tours");
        $("#tituloPrecio_en").html("$95- Adults");
       
  });

 $("#combopolariscaballos").click(function(e) {
     precio="159.00";
     precio_nino="159.00";
       id_paquete="012";
          paquete = $("#combopolariscaballos").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("COMBO Polaris - Paseo Caballos ");
        $("#tituloPrecio").html("$159- Adultos");
        $("#titulo_paquete_en").html("Polaris - Horse Back Riding COMBO");
        $("#tituloPrecio_en").html("$159- Adults");
       
  });

 $("#combopolarismegasplash").click(function(e) {
     precio="159.00";
     precio_nino="159.00";
       id_paquete="012";
          paquete = $("#combopolarismegasplash").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("COMBO polairs + Zipline ");
        $("#tituloPrecio").html("$159- Adultos");
        $("#titulo_paquete_en").html("Polaris - Zipline COMBO");
        $("#tituloPrecio_en").html("$159- Adults");
       
  });



$("#buggieshorseback").click(function(e) {
     precio="135.00";
     precio_nino="67.50";
       id_paquete="013";
          paquete = $("#buggieshorseback").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("COMBO Buggies - Paseo Caballo");
        $("#tituloPrecio").html("$135- Adultos,  50%- Niños");
        $("#titulo_paquete_en").html("Buggies - Horseback Riding COMBO");
        $("#tituloPrecio_en").html("$135- Adults,  50%- Children");
       
  });





$("#ZIPLINEMEGASPLASHSUNSETVIP").click(function(e) {
     precio="178.00";
     precio_nino="89.00";
       id_paquete="014";
          paquete = $("#ZIPLINEMEGASPLASHSUNSETVIP").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("ZIPLINE MEGA SPLASH - SUNSET VIP");
        $("#tituloPrecio").html("$178- Adultos,  50%- Niños");
        $("#titulo_paquete_en").html("ZIPLINE MEGA SPLASH - SUNSET VIP");
        $("#tituloPrecio_en").html("$178- Adults,  50%- Children");
       
  });

$("#PAQUETEADVENTURESUNSETVIP").click(function(e) {
     precio="188.00";
     precio_nino="94.00";
       id_paquete="015";
          paquete = $("#PAQUETEADVENTURESUNSETVIP").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("PAQUETE ADVENTURE - SUNSET VIP");
        $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
        $("#titulo_paquete_en").html("PAQUETE ADVENTURE - SUNSET VIP");
        $("#tituloPrecio_en").html("$188- Adults,  50%- Children");
       
  });

$("#boggie_vip").click(function(e) {
          precio="89.00";
          precio_nino="44.50";
          id_paquete="016";
          paquete = $("#boggie_vip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("PAQUETE ADVENTURE - BOGGIE VIP");
        $("#tituloPrecio").html("$89- Adultos,  50%- Niños");
        $("#titulo_paquete_en").html("PAQUETE ADVENTURE - BOGGIE VIP");
        $("#tituloPrecio_en").html("$89- Adults,  50%- Children");
       
  });

$("#paintball").click(function(e) {
          precio="65.5555555556";
          precio_nino="65.5555555556";
          id_paquete="080";
          paquete = $("#paintball").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#precio_nino").val(precio_nino); 
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("PAQUETE PAINTBALL");
        $("#tituloPrecio").html("$59- Adultos,  50%- Niños");
        $("#titulo_paquete_en").html("PAINTBALL Package");
        $("#tituloPrecio_en").html("$59- Adults,  50%- Children");
       
  });




});





