<?php 

date_default_timezone_set("America/Santo_Domingo");

 $mailto ="avasquez@innovatechvs.com";
   $mailsubj = "Prueba Reserva";
   $mailhead = "From:webmaster@bavaroadventurepark.com\r\n";
   $mailhead .= "Content-type: text/html\r\n";     
         
                           $mailbody = "
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=938 style='width:50%;mso-cellspacing:0cm;background:white;border:solid #18962e 6.0pt;

 mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
      <td style='padding:6.75pt 6.75pt 6.75pt 6.75pt'>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
               <td style='padding:0cm 0cm 11.25pt 0cm'>
                  <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';color:black'><a href='http://www.bavaroadventurepark.com'></a><a href='http://www.bavaroadventurepark.com'><span style='text-decoration:none;text-underline:none'><img border='0'   id='_x0000_i1029' src='http://bavaroadventurepark.com/public/img/logo.png'/></span></a>
                     <o:p></o:p>
                     </span>
                  </p>
               </td>
               <td width='100%' valign=top style='width:100.0%;padding:0cm 0cm 11.25pt 0cm'>
                  <div align=center>
                     <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 style='mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
                        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
                           <td style='padding:22.5pt 0cm 12.0pt 0cm'>
                              
                              <p class=MsoNormal><b><span style='font-size:18.0pt;font-family:'Arial','sans-serif';


      color:#80c000'>Payment Invoice

            <o:p></o:p></span></b></p>
                           </td>
                        </tr>
                     </table>
                  </div>
               </td>
            </tr>
         </table>
         <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';

  color:black;display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
         <p class=MsoNormal><span style='mso-fareast-font-family:' Times New Roman ';

  color:windowtext'><o:p></o:p></span></p>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width='100%'
         style='width:100.0%;mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:

   0cm 0cm 0cm 0cm'>
            <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
               <td style='padding:0cm 5.25pt 0cm 5.25pt'>
                  <style>
                     table th {
                     background: #18962e;
                     height: 36px;
                     line-height: 14px;
                     color: #fff;
                     text-transform: uppercase;
                     font-size: 10px;
                     text-align: left;
                     padding-left: 8px;
                     vertical-align: middle;
                     border-bottom: 2px solid #0c641b;
                  }
                  
                  table td {
                     text-align: left;
                     font-size: 12px;
                     padding-left: 8px;
                     height: 33px;
                     line-height: 14px;
                     border-left: 1px solid #fff;
                     vertical-align: middle;
                  }
                  </style>

                  <table>
                     <tbody>
                        <tr>
                           <th colspan='6'>PERSONAL INFORMATION</th>
                        </tr>
                        <tr>
                           <td ><strong>Full Name:</strong></td>
                           <td >".$fila_cl['nombre']." ".$fila_cl['apellido']."</td>
                          <td ><strong>Date of Visit:</strong></td>
                           <td>".$fecha."</td>
                         
              
                        
                           
                        </tr>
                        <tr>
                            <td ><strong>E-mail:</strong></td>
                           <td>".$fila_cl['email']."</td> 
                           <td ><strong>Telefono:</strong></td>
                           <td>".$fila_cl['telefono']."</td> 
                            
                        </tr>
                        <tr>
                           <td ><strong>Room No.:</strong></td>
                           <td >".$fila_cl['habitacion']."</td>
                          <td ><strong>Hotel:</strong></td>
                           <td>".$fila_cl['hotel']."</td>
                         
              
                        
                           
                        </tr>
                       
                        <tr>
                           <th width='20%' >PACKAGE</th>
                           <th width='75%'>DESCRIPTION</th>
                             <th width='15%'>Adultos</th>
                            <th width='15%'>Ni&ntilde;os</th>
                      
                           <th width='15%'>SUBTOTAL</th>
                           
                        </tr>
                       
                          ".$detalle_dt."
                        
                        <tr>
                 
                              <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>SubTotal:</strong></td>
                           <td>".$subtotal."</td>
                        </tr>
                        
                        <tr>
                           
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Discount:</strong></td>
                           <td>".$descuento_total."</td>
                        </tr>
                        <tr>
                             
                             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><strong>Total:</strong></td>
                           <td><strong>".$monto_total."</strong></td>
                        </tr>
                        <tr> </tr>
                     </tbody>
                  </table>

                  <strong>Phones: </strong>
<ul><li>809-933-3040809-475-7555 Main Number</li>
<li>809-349-9555 Toll Free- Santo Domingo</li>
<li>809-612-7879 Toll Free-La Romana</li>
</ul>



<p><strong>Notes:</strong></p>
<ul>
<li>You can change the attractions upon arrival</li>
<li>Taxes and fees are included in our total Price</li>
<li>Bavaro Adventure Park does not charge any Administration fee or other charge</li>
</ul>
<p><strong>Cancellation Policy:</strong></p> 
<ul>
<li>Cancellation for free up to 7 days before arrival</li>
<li>From 7 days to 1 day will be applied 50%</li>
<li>24 hours before arrival will be applied 100%</li>
<li>1 Date change for free</li>
<li>1 Reservation holder name for free</li>
</ul>

<hr>
<p>Copyright 2018 Bavaroadventurepark.com. All rights reserved.
This email was sent from Bavaroadventurepark.com,Punta Cana, Dominican Republic</p>
";
 
                  
    mail($mailto, $mailsubj, $mailbody, $mailhead);
     ?>