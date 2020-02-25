<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=listado_reservas.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<style>
*{

   margin: 0px;
   padding: 0px;
 }

.logo {
  
margin: auto 250px;
padding: 0  auto;  
 }
h2 {

   color:#18962E;
   font-family: 'BerlinSansFB-Reg';
   
}
</style>
<div class="logo">
      <img src="<?php echo base_url(); ?>public/images/logo.png" width="200" height="auto" alt="">
      </div>
               <h2 align="center"><?php echo $titulopdf; ?></h2>
      <table border="1"  width="100%">
         <tr>
             <th>No</th>
                                                <th>Cliente</th>
                                                <th>E-mail</th>
                                                <th>Fecha Compra</th>
                                                <th>Descripcion</th>
                                                <th>Total</th>
                                                <th>Transaction ID</th>


         </tr>



         <?php if (count($resultado) > 0) { ?>
            <?php foreach ($resultado as $row) {
               ?>
               <tr class="odd pointer">

                   <td class=" "><?php echo $row->codigo_cliente; ?></td>
                                               <td class=" "><?php echo $row->nombre." ".$row->apellido; ?></td>
                                               <td class=" "><?php echo $row->email; ?></td>
                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->fecha_compra)); ?></td>
                                               <td class=" "><?php echo $row->descripcion; ?></td>
                                               <td class="a-right a-right "><?php echo $row->monto_total; ?></td>
                                               <td class=" "><?php echo $row->itransaction_id; ?></td>

               </tr>
            <?php }
         } ?>


      </table>

