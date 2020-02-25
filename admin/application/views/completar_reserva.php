
<!-- page content -->
<div class="right_col" role="main">

   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>
               Completar Reservas
            </h3>
         </div>


      </div>
      <div class="clearfix"></div>


      <div class="x_panel">
         <div class="x_content">
            <table id="cliente" class="table table-striped responsive-utilities jambo_table">

               <thead>
                  <tr >

                     <th colspan="4">Informacion Personal</th>

                  </tr>
        </thead>
                  <tr>

                     <td width="194" class="bold">Nombre:</td>

                     <td width="174"><input name="nombre" type="text" value=" <?php echo $fila->nombre; ?>">
                                       </td>	

                     <td width="110" class="bold">Apellidos:</td>

                     <td width="249"><input name="nombre" type="text" value="<?php echo $fila->apellido; ?>"></td>

                  </tr>



                  <tr>

                     <td class="bold">E-mail:</td>

                     <td><input name="nombre" type="text" value="<?php echo $fila->email; ?>"></td>

                     <td class="bold">Telefono:</td>

                     <td><input name="nombre" type="text" value="<?php echo $fila->telefono; ?>"></td>


                  </tr>

                  <tr>

                     <td class="bold">Habitacion:</td>

                     <td><input name="nombre" type="text" value="<?php echo $fila->habitacion; ?>"></td>     

                     <td class="bold">fecha Registro:</td>

                     <td><input name="nombre" type="datetime" value="<?php echo date('d-m-y H:m:s',strtotime($fila->fecha_registro)); ?>"></td>

                  </tr>
                  
                             <thead>
                      
                      
                      
                      
                  <tr>

                <th colspan="4">Informacion de Pago</th>

                  </tr>
</thead>
                  
<tr>
       <td class="bold">fecha Registro:</td>
                      <td>
                        <input name="nombre_paypal" id="nombre_paypal" value="">
                      </td>
                      <td class="bold">Tipo Pago:</td>
                      
                     <td>
        <select name="tipo_pago" id="tipo_pago">
        <option value=" ">Seleccione Forma de pago</option>
        <option value="Paypal"> Paypal</option>
        <option value="Tarjeta">Tarjeta</option>
        <option value="Efectivo">Efectivo</option>       
        </select>
        
        </td> 
                      
                      
                      
                  <tr>
    
</tr>






                  
                  <thead>
                    
                      <tr>
                     <th colspan="4">Datos Reserva</th>

                      </tr>
</thead>
                  <tr>
                     <td class="bold" a="">Fecha Llegada:</td>

                     <td><input name="nombre" type="datetime" value="<?php echo date('d-m-y',strtotime($fila->fecha_reserva)); ?>"></td> 

                     <td class="bold">Numero Reserva:</td>
  <td><input name="nombre" type="datetime" value="<?php echo $fila->numero_reserva; ?>"></td> 

       

  

                  </tr>
                  <tr>
                     <td class="bold" a="">Hotel:</td>

                     <td><?php echo $fila->hotel; ?></td> 
                     <td class="bold">Habitacion:</td>

                     <td><?php echo $fila->habitacion; ?></td> 
 
                  </tr>
                    



                  
                 
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

                     <td><?php echo date('d-m-y H:m:s',  strtotime($fila->itransaction_date)); ?></td>

                  <td class="bold">Email:</td>

                     <td><?php echo $fila->email; ?></td>

                  </tr>


                 </table>


         </div>

      </div>
   </div>
</div>
