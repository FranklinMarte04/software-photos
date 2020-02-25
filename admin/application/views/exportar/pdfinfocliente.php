<html>

   <head>

      <link rel="stylesheet" type="text/css" href="font/berlin/stylesheet.css">

      <script type="text/javascript">

         window.print();

      </script>

<style>
*{

   margin: 0px;
   padding: 0px;
 }

h2 {

   color:black;
   font-family: 'BerlinSansFB-Reg';
   
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
   }

td, th {
    border: 1px solid #ccc;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #e9e9e9;
}

td {

   font-size: 12px;

}
</style>

<title><?php echo $encabezado; ?></title>

   </head>

   <body>

               <div align="center">

               <img src="<?php echo base_url(); ?>public/images/logo.png">

               </div>

               

               <h2 align="center"><?php echo $encabezado; ?></h2>

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



                     <td class="bold">Telefono:</td>



                     <td><?php echo $fila->telefono; ?></td>





                  </tr>



                  <tr>



                     <td class="bold">Habitacion:</td>



                     <td><?php echo $fila->habitacion; ?></td>     



                     <td class="bold">fecha Registro:</td>



                     <td><?php echo date('d-m-Y H:m:s',strtotime($fila->fecha_registro)); ?></td>



                  </tr>

                  <thead>

                  <tr>



                     <th colspan="4">Datos Reserva</th>



                  </tr>

</thead>

                  <tr>

                     <td class="bold" a="">Fecha Llegada:</td>



                     <td><?php echo date('d-m-Y',strtotime($fila->fecha_reserva)); ?></td>



                     <td class="bold">Numero Reserva:</td>



                     <td><?php echo $fila->numero_reserva; ?></td> 



  



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



                     <td><?php echo date('d-m-Y H:m:s',  strtotime($fila->itransaction_date)); ?></td>



                  <td class="bold">Email:</td>



                     <td><?php echo $fila->email; ?></td>



                  </tr>





                 </table>





   </body>



</html>


