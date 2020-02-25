<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Bavaro,adventure,park,atracciones,zipline,punta cana." />
    <meta name="description" content=" parque en bavaro, parque en punta cana, atracciones, aventura, que hacer en bavaro, punta cana, republica dominicana">
    <meta name="author" content="Innovatech VS">
    <title>Carrito- Bavaro Adventure Park</title>

   <?php echo $header; ?>

 

</head>
<body>

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



<section id="hero_2">
    <div class="intro_title animated fadeInDown">
        <h1>Completar su Reserva</h1>
        <div class="bs-wizard">

            <div class="col-xs-4 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">Su Compra</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="<?php echo base_url();?>shopping" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">Detalles</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
            </div>

            <div class="col-xs-4 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum"> Finalizar</div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="confirmation.html" class="bs-wizard-dot"></a>
            </div>

        </div>
        <!-- End bs-wizard -->
    </div>
    <!-- End intro-title -->
</section>
<!-- End Section hero_2 -->

<div id="position">
    <div class="container">
        <ul>
            <li>  Inicio- Comprar Entradas</li>
        </ul>
    </div>
</div>
<!-- End position -->

<div class="container margin_60">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped cart-list add_bottom_30">
<form id="frmcarrito" name="frmcarrito" method="post">
   
                <thead>
                    <tr >
                <th>Paquete</th>
                <th>Descripcion</th>
                <th>Adultos</th>
                <th>Niños</th>
                <th>Sub-Total</th>
                <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
       <?php
 $cantidad_adulto=0;
 $cantidad_nino=0;
        $i=0; foreach ($this->cart->contents() as $items){

        $i++;
               $cantidad_adulto=$cantidad_adulto + $items['adultos']; 
               $cantidad_nino=$cantidad_nino + $items['ninos']; 
         
         ?>

        <input type="hidden" id="rowid[]" name="rowid[]" value="<?php echo $items['rowid']; ?>">
    <tr>
<td><span class="item_cart"><strong>  <?php echo $items['nombre_producto']; ?></strong></span></td>

            <td><span class="item_cart">  <?php echo implode(',',$items['options']); ?></span></td>
            <?php if($items["id"]==16 && $items["adultos"]==1){ ?>
 <td>
                <input readonly="true" type="text"  id="adulto[]" class="qty2 form-control" value="<?php echo $items['adultos']; ?>" name="adulto[]">
            </td>
            
            <td>
                <input type="text" readonly="true"  id="nino[]" class="qty2 form-control" value="<?php echo $items['ninos']; ?>" name="nino[]">
            </td>

            <?php }else{ ?>

 <td><div class="numbers-row">
                <input type="text"  id="adulto[]" class="qty2 form-control" value="<?php echo $items['adultos']; ?>" name="adulto[]">
                            </div>
            </td>
            
            <td>
                <div class="numbers-row">
                <input type="text"  id="nino[]" class="qty2 form-control" value="<?php echo $items['ninos']; ?>" name="nino[]">
                </div>
            </td>

            <?php } ?>
           
            <td id="tdsubtotal<?php echo $i; ?>"><strong><?php echo formato_moneda($items['subtotal'],'dolares'); ?></strong>
            </td>
            <td class="options">
            <a   href="<?php echo base_url() ?>shopping/delete_shopping?id=<?php echo $items['rowid']; ?>"><i class="icon-trash"></i></a>
            </td>
                    </tr>
               
<?php } ?>

                </tbody>
            </table>
</form>

        </div>
        <!-- End col-md-8 -->

        <aside class="col-md-4">
            <div class="box_style_1">
                <h3 class="inner">- Resumen -</h3>
                <table class="table table_summary">

                    <tbody>
                        <tr>
                            <td>Adultos</td>
                            <td  id="tdadulto" class="text-right">
                          <?php echo $cantidad_adulto; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Niños</td>
                            <td  id="tdnino" class="text-right">
                          <?php echo $cantidad_nino; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Todos los Impuestos Incluidos:
                            </td>
                            <td class="text-right">
                               <?php echo formato_moneda(00,'dolares'); ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Descuento:
                            </td>
                            <td id="tddescuento" class="text-right">
                                  <?php echo formato_moneda($this->cart->descuento(),'dolares'); ?>
                            </td>
                        </tr>
                           <tr>
                            <td>
                               Subtotal:
                            </td >
                            <td id="tdsubtotalgeneral" class="text-right">
                                      <?php echo formato_moneda($this->cart->subtotal(),'dolares'); ?>
                            </td>
                        </tr>


                        <tr class="total">
                            <td>
                                Total
                            </td>
                            <td id="tdtotal"  class="text-right">
                              <?php echo formato_moneda($this->cart->total(),'dolares'); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn_full" href="<?php echo base_url(); ?>shopping/check_out">Pagar Ahora</a>
                <a class="btn_full_outline"  href="#"><i class="icon-right"></i> Continuar Comprando</a>
            </div>

        </aside>
        <!-- End aside -->

    </div>
    <!--End row -->
</div>
<!--End container -->
<script type="text/javascript">


/**********************************************                                             
*                                            *
*   Actulizar Carrito                        *
*                                            *
******************************************** */

$(document).ready(function() {
       $('.numbers-row,#nino').click(function(e) {

        /* Inicializamos tu tabla */
       $.ajax({
      url: '<?php echo base_url(); ?>' + 'shopping/update_shopping',
            type: 'POST',
            dataType: 'json',
            data: $('#frmcarrito').serialize(),
           success: function(data){

            /* Recorremos tu respuesta con each */
  var i=0;
 $.each(data, function(index, value) {
       i++;
        document.getElementById("tdsubtotal"+ i +"").innerHTML="<strong>"+value["subtotal"]+"</strong>";
       document.getElementById("tddescuento").innerHTML="<strong>"+value["descuento"]+"</strong>";   
       document.getElementById("tddescuento").innerHTML=value["descuento"];   
       document.getElementById("tdadulto").innerHTML=value["cantidad_adulto"];
       document.getElementById("tdnino").innerHTML=value["cantidad_nino"]; 
       document.getElementById("tdsubtotalgeneral").innerHTML=value["subtotal_general"];  
       document.getElementById("tdtotal").innerHTML=value["total_general"];  


         
 });
}
});

  
   });

 
});

</script>
