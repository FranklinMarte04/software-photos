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
<title><?php echo $titulopdf; ?></title>
   </head>
   <body>
               <div align="center">
               <img src="<?php echo base_url(); ?>public/images/logo.png">
               </div>
               
               <h2 align="center"><?php echo $titulopdf; ?></h2>
              
      <table border="1"  width="100%">
         <tr>
            <th>No</th>
                                                <th>Cliente</th>
                                                <th>Paquete</th>
                                                <th>Fecha Reserva</th>
                                                <th>Fecha Llegada</th>
                                                <th>E-mail</th>                                               
                                                <th>Adultos</th>
                                                <th>Ni&ntilde;os</th>                                          
                                                <th>Total</th>
         </tr>



         <?php if (count($resultado) > 0) { ?>
            <?php foreach ($resultado as $row) {
               ?>
               <tr class="odd pointer">

                   <td class=" "><?php echo $row->codigo_cliente; ?></td>                                               
                                               <td class=" "><?php echo $row->nombre." ".$row->apellido; ?></td>
                                               <td class=" "><?php echo $row->paquete; ?></td>                                                
                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->fecha_compra)); ?></td>
                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->fecha_reserva)); ?></td>
                                               <td class=" "><?php echo $row->email; ?></td>
                                               <td class=" "><?php echo $row->cantidad_adulto; ?></td>
                                               <td class=" "><?php echo $row->cantidad_nino; ?></td>
                                               <td class="a-right a-right "><?php echo $row->monto_total; ?></td>

               </tr>
            <?php }
         } ?>


      </table>


   </body>

</html>

