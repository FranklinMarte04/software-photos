/*Realizado Por Willerenver Terrero a 15/01/2016 a las 11:25 PM
Todos los derechos reservasdos a dicho programador en honor a DIOS 
el Creador de Todo
*/
$(function() { 
	var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;	
	$(".btn_full").click(function(){  
		$(".error").fadeOut().remove();
		
        if ($("#nombre").val() == "") {  
			$("#nombre").focus().after('<span class="error">Ingrese su nombre</span>');  
			return false;  
		}  
        if ($("#apellido").val() == "") {  
			$("#apellido").focus().after('<span class="error">Ingrese su Apellido</span>');  
			return false;  
		}  

        if ($("#email").val() == "" || !emailreg.test($("#email").val())) {
			$("#email").focus().after('<span class="error">Ingrese un email correcto</span>');  
			return false;  
		}  
        if ($("#telefono").val() == "") {  
			$("#telefono").focus().after('<span class="error">Ingrese un Telefono</span>');  
			return false;  
		}  
        if ($("#fecha").val() == "") {  
			$("#fecha").focus().after('<span class="error">Ingrese una Fecha</span>');   
			return false;  
		}  
    });  
	$("#nombre, #apellido,#telefono,#fecha").bind('blur keyup', function(){  
        if ($(this).val() != "") {  			
			$('.error').fadeOut();
			return false;  
		}  
	});	
	$(".email").bind('blur keyup', function(){  
        if ($(".email").val() != "" && emailreg.test($(".email").val())) {	
			$('.error').fadeOut();  
			return false;  
		}  
	});
});