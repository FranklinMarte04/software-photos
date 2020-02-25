<html>
   <head>

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

   </head>
   
   <body>
           <div align="center">
           <img src="<?php echo base_url(); ?>public/images/logo.png">
           </div>
               <h2 align="center">Listado Usuarios</h2>

           <table border="1"  width="100%">
         <tr>
            <th>No usuario</th>
            <th>Nombre</th>
            <th>E-mail</th>
            <th>Username</th>
            <th>Tipo Usuario</th>

         </tr>


         <?php if (count($resultado) > 0) { ?>
            <?php foreach ($resultado as $row) {
               ?>
               <tr class="odd pointer">

                  <td class=" "><?php echo $row->id_usuario; ?></td>
                  <td class=" "><?php echo $row->nombre; ?></td>
                  <td class=" "><?php echo $row->email; ?></td>
                  <td class=" "><?php echo $row->username; ?></td>
                  <td class="a-right a-right "><?php echo $row->tipo_usuario; ?></td>

               </tr>
            <?php }
         } ?>


      </table>


   </body>

</html>

