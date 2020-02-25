



<!-- page content -->



<div class="right_col" role="main">







   <div class="">



      <div class="page-title">



         <div class="title_left">



            <h3>



               Informacion de Cliente



            </h3>



         </div>











      </div>



      <div class="clearfix"></div>







      <div class="x_panel">



         <div class="x_content">



            <div align="right_col"











             <button onclick="goBack()" type="button" class="btn btn-primary">Volver Atras</button>



         </div>







<div align="right">

 <a target="__back" href="<?php echo base_url(); ?>exportar/<?php echo $pdf; ?>?id=<?php echo $_GET["id"]; ?>">   <i  class="fa fa-file-pdf-o fa-3x"></i></a>



 </div>

  

             <table id="cliente" class="table table-striped responsive-utilities jambo_table">







               <thead>



                  <tr >







                     <th colspan="4">Informacion Personal</th>







                  </tr>



        </thead>



                  <tr>







                     <td width="194" class="bold">Nombre:</td>







                     <td width="174"><?php echo $fila->nombre; ?></td>	







                     <td width="110" class="bold">Apellidos:</td>







                     <td width="249"><?php echo $fila->apellido; ?></td>







                  </tr>















                  <tr>







                     <td class="bold">E-mail:</td>







                     <td><?php echo $fila->email; ?></td>







                     <td class="bold"></td>







                     <td></td>











                  </tr>

<thead>

                  <tr>



                     <th colspan="4">Datos Compra</th>



                  </tr>

</thead>





                  <tr>







                     <td class="bold" a="">Fecha Compra:</td>



                     <td><?php echo date('d-m-Y',strtotime($fila->fecha_compra)); ?></td>



                     <td class="bold">Descripci&oacute;n:</td>



                     <td><?php echo $fila->descripcion; ?></td> 







                  </tr>



                  <thead>



                  <tr>







                     


</thead>




 <thead>



                  <tr>







                     <th colspan="4">Datos Cuenta Paypal</th>







                  </tr>



 </thead>



                  <tr>



                     <td class="bold">ID Transaccion :</td>







                     <td><?php echo $fila->itransaction_id; ?></td>











                     <td class="bold">Nombre y Apellido:</td>







                     <td><?php echo $fila->iname; ?></td>



















                  </tr>















                  <tr>







                     <td class="bold">Fecha Transaccion:</td>







                     <td><?php echo date('d-m-Y H:m:s',  strtotime($fila->itransaction_date)); ?></td>







                  <td class="bold">Email:</td>







                     <td><?php echo $fila->email; ?></td>







                  </tr>











                 </table>











         </div>







      </div>



   </div>



</div>



