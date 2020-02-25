$(document).ready(function() {
$("#paqueteziplinemegasplash").click(function(e) {
$("#tdsunsetvip").hide();
$("#tdcrazybuggiestour").hide();
$("#tdsunsetvip1").show();
$("#tdcrazybuggiestour1").show();
    paquete = $("#paqueteziplinemegasplash").attr("rel");
    precio="99.00";
    id_paquete="001";
 $("#paquete").val(paquete);
 $("#paqueteprecio").val(precio);
 $("#id_paquete").val(id_paquete);
 $("#step2").addClass('ocultar');
 $("#btnsiguiente").show();
 $("#btnreservar").hide();
 $("#titulo_paquete").html("Paquete Adventure Zipline Mega Splash- 3 Atracciones");
 $("#tituloPrecio").html("$99- Adultos,  50%- Niños");
 });
  $("#btnsiguiente").click(function(e) {
  $("#step2").addClass('mostrar');
  $("#step1").removeClass('mostrar');
  $("#step1").addClass('ocultar');
  $("#comp").hide();
 $("#crazybuggiestour1").click(function() {  
  if($('#crazybuggiestour1').prop('checked',true) ) {
    paquete ="Crazy Buggies Tour - Paquete Zipline Mega Splash";
      precio="158.00";
      id_paquete="0089";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#id_paquete").val(id_paquete);
     $('#sunsetvip1').prop('checked',false) 
     }
    });
  $("#sunsetvip1").click(function() {  
  if($('#sunsetvip1').prop('checked',true)) {
    paquete ="Sunset VIP - Paquete Zipline Mega Splash";
      precio="178.00";
      id_paquete="0084";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#id_paquete").val(id_paquete);
    $('#crazybuggiestour1').prop('checked',false) 
    $("#tituloPrecio").html("$168- Adultos,  50%- Niños");

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
$("#tdsunsetvip1").hide();
$("#tdcrazybuggiestour1").hide();

    paquete = $("#paqueteAdventure").attr("rel");
    precio="1.00";
    id_paquete="002";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#id_paquete").val(id_paquete);
    $("#step2").addClass('ocultar');
    $("#btnsiguiente").show();
    $("#btnreservar").hide();
    $("#titulo_paquete").html("Paquete Adventure- 5 Atracciones");
    $("#tituloPrecio").html("$1- Adultos,  50%- Niños");
  });

  $("#btnsiguiente").click(function(e) {
  $("#step2").addClass('mostrar');
  $("#step1").removeClass('mostrar');
  $("#step1").addClass('ocultar');
  $("#comp").hide();
    $("#crazybuggiestour").click(function() {  
  if($('#crazybuggiestour').prop('checked',true) ) {
    paquete ="Adventure - Crazy Buggies Tour";
      precio="168.00";
      id_paquete="008";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#id_paquete").val(id_paquete);
     $('#sunsetvip').prop('checked',false) 
     }
     });
  $("#sunsetvip").click(function() {  
  if($('#sunsetvip').prop('checked',true)) {
    paquete ="Adventure - Sunset Vip";
      precio="168.00";
      id_paquete="008";
    $("#paquete").val(paquete);
    $("#paqueteprecio").val(precio);
    $("#id_paquete").val(id_paquete);
     $('#crazybuggiestour').prop('checked',false) 
   $("#tituloPrecio").html("$168- Adultos,  50%- Niños");
     }
     });
  });


  $("#paqueteAdventurePlus").click(function(e) {
     precio="139.00";
       id_paquete="003";
          paquete = $("#paqueteAdventurePlus").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Plus - 7 Atracciones");
  $("#tituloPrecio").html("$139- Adultos,  50%- Niños");
       
  });


  $("#paqueteAdventureVip").click(function(e) {
     precio="169.00";
       id_paquete="004";
          paquete = $("#paqueteAdventureVip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Vip - Ilimitado");
          $("#tituloPrecio").html("$169- Adultos,  50%- Niños");
       
  });

  $("#paqueteZiplineMegaSplashSusetVip").click(function(e) {
     precio="178.00";
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
       
  });

$("#paqueteAdventureSunsetVip").click(function(e) {
     precio="188.00";
       id_paquete="006";
          paquete = $("#paqueteAdventureSunsetVip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
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
    id_paquete="007";
          paquete = $("#paqueteDinoWorld").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Dinosaur World - 3 Atracciones");
       $("#tituloPrecio").html("$59- Adultos,  50%- Niños");
       
  });

 $("#ziplinemegasplashsusetvip").click(function(e) {
     precio="178.00";
    id_paquete="008";
          paquete = $("#ziplinemegasplashsusetvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Zipline Mega Splash Sunset Vip - 3 Atracciones + Sunset");
       $("#tituloPrecio").html("$178- Adultos,  50%- Niños");
       
  });


 $("#adventuresusetvip").click(function(e) {
     precio="188.00";
    id_paquete="010";
          paquete = $("#adventuresusetvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Sunset Vip - 5 Atracciones + Sunset");
       $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
       
  });


 $("#megasplashsunset").click(function(e) {
     precio="178.00";
    id_paquete="011";
          paquete = $("#megasplashsunset").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Zipline Mega Splash Sunset Vip - 3 Atracciones + Sunset");
       $("#tituloPrecio").html("$178- Adultos,  50%- Niños");
       
  });


 $("#adventuresusetvip").click(function(e) {
     precio="188.00";
    id_paquete="011";
          paquete = $("#adventuresusetvip").attr("rel");
         $("#paquete").val(paquete);
         $("#paqueteprecio").val(precio);
         $("#id_paquete").val(id_paquete);
         $("#btnreservar").show();
         $("#btnsiguiente").hide();
         $("#step1").addClass('mostrar');
         $("#step2").removeClass('ocultar mostrar');
         $("#step2").addClass('ocultar');
        $("#titulo_paquete").html("Paquete Adventure Sunset Vip - 5 Atracciones + Sunset");
       $("#tituloPrecio").html("$188- Adultos,  50%- Niños");
       
  });





});





