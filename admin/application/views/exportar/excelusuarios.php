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

.logo {
  
margin: auto 250px;
padding: 0  auto;  
 }
h2 {

   color:#18962E;
   font-family: 'BerlinSansFB-Reg';
   
}
</style>

   </head>
   
   <body>
            <div class="lgo">
           <img src="<?php echo base_url(); ?>public/images/logo_bv.png" width="200" height="auto" alt="">
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

