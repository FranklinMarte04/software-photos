<?php if (!defined('BASEPATH'))exit('No direct script access allowed');
class cliente extends CI_Controller { 

   public function __construct() {

      parent::__construct();

    $this->load->model('cliente_model','cl');
    $this->load->model('carrito_model', 'carrito');
  $this->load->model('carrito_model', 'carrito');


      }

   

   public function info(){

      $id=  desencriptar_id($this->input->get('id'));
      
      $data['fila']=$this->cl->get_id($id,"VERIFICADO");

     $this->load->view('admin/plantilla/header');

     $this->load->view('admin/plantilla/menu');

     $this->load->view('admin/info_cliente',$data);

     $this->load->view('admin/plantilla/footer');

       

      

   }

    public function info_pendiente(){
      $id=  desencriptar_id($this->input->get('id'));
     $data['fila']=$this->cl->get_id($id,"NO VALIDO");
     $this->load->view('admin/plantilla/header');
     $this->load->view('admin/plantilla/menu');
     $this->load->view('admin/info_cliente',$data);
     $this->load->view('admin/plantilla/footer');
    }

   public function completar_reserva(){
     $id=  desencriptar_id($this->input->get('id'));
     $data['fila']=$this->cl->get_id($id,"NO VALIDO");
     $this->load->view('admin/plantilla/header');
     $this->load->view('admin/plantilla/menu');
     $this->load->view('admin/completar_reserva',$data);
     $this->load->view('admin/plantilla/footer');
   }

  public function cliente_foto(){

$date_reserva= str_replace('/', '-',$this->input->post('fechaphoto'));
    $fecha_reserva=date("Y-m-d", strtotime($date_reserva));
    $cadena=explode(" ",$this->input->post('nombre'));
    $montoTotal=$this->input->post('TotalMonto');
    $Descripcion=$this->input->post('Descripcion');

    $data=array(
        'nombre'=>$cadena[0],
        'apellido'=>$cadena[1],
        'email'=> $this->input->post('email'),
        'nota'=> $this->input->post('nota'),
        'referencia'=> $this->input->post('referencia'),
        'fecha_visita'=>$fecha_reserva);
         

         $id_cliente=$this->cl->cliente_add($data);

         $datos_venta = array(
            'codigo_cliente' => $id_cliente,
            'fecha_compra' =>date('Y-m-d H:i:s'),
            'descuento_total' =>0.00,
            'subtotal' =>$montoTotal,
            'monto_total' =>$montoTotal,
            'estado' => 'NO VALIDO',
            'tipo_venta'=>'PAQUETES FOTOS'
                                );
         $this->carrito->insertar_venta($datos_venta);
            $agregar_carrito[] = array(
                'codigo_cliente' => $id_cliente,
                'descripcion' =>$Descripcion,
                'paquete' =>'PAQUETE DE FOTOS',
                'precio_paquete' =>0.00,
                'fecha_compra' => date('Y-m-d H:i:s'),
                'cantidad_adulto' =>0,
                'precio_adulto' =>0,
                'cantidad_nino' =>0,
                'precio_nino' =>0,
                'subtotal' =>$montoTotal);
        $this->carrito->insertar($agregar_carrito);
          echo "guardo";
            }

   public function comprar_fotos(){
    $nombre=$this->input->post('nombre');
    $fecha= str_replace('/', '-',$this->input->post('fechaphoto'));
    $fecha=date("Y-m-d", strtotime($fecha));
    $email=$this->input->post('email');
    $telefono=$this->input->post('telefono');
    $referencia=$this->input->post('referencia');
    $pax=$this->input->post('pax');
    $actividades=$this->input->post('actividades');
    $mensaje=$this->input->post('mensaje');
    $idioma=$this->input->post('idioma');

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '1024';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';
    
    $file_info=$this->load->library('upload', $config);
    if(!$this->upload->do_upload())
    { 
      $error = array('error'=>$this->upload->display_errors());
      }
      else
      {
           $file_info=$this->upload->data();
           $imagen = $file_info['file_name'];
           $ruta=base_url()."uploads/".$imagen."";
       }

   $mailto ="phototeam@bavaroadventurepark.com";
   $mailsubj = "Solicitud de Fotos";
   $mailhead = "From:webmaster@bavaroadventurepark.com\r\n";
   $mailhead .= "Content-type: text/html\r\n"; 
   $mailhead  .= "Reply-To: phototeam@bavaroadventurepark.com\r\n";
   $mailhead  .= "Bcc: software@innovatechvs.com\r\n";    
                           $mailbody = "
<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=938 style='width:50%;mso-cellspacing:0cm;background:white;border:solid #18962e 6.0pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
      <td style='padding:6.75pt 6.75pt 6.75pt 6.75pt'>
         <br>
       <div align='center'>
        <h1>Solicitud de fotos y Video</h1>
         </div>
         <p class=MsoNormal><span style='font-size:9.0pt;font-family:' Arial ','sans-serif ';
  color:black;display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
         <p class=MsoNormal><span style='mso-fareast-font-family:' Times New Roman ';
  color:windowtext'><o:p></o:p></span></p>
         <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width='100%'
         style='width:100.0%;mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:
   0cm 0cm 0cm 0cm'>
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

                           <th colspan='6'>Informacion Personal</th>

                        </tr>

                        <tr>

                           <td width='194'><strong>Nombre Completo:</strong></td>

                           <td width='174'>".$nombre."</td>

                   <td width='110'><strong>Fecha:</strong></td>

                           <td width='249'>".date('d/m/Y',strtotime($fecha))."</td>

                        </tr>

                        <tr>

                           <td><strong>E-mail:</strong></td>

                           <td>".$email."</td>

                           <td><strong>Telefono:</strong></td>

                           <td>".$telefono."</td>

                        </tr>

                        <tr>

                           <td><strong>No.Referencia:</strong></td>

                           <td>".$referencia."</td>

                           <td><strong>No. Pax:</strong></td>

                           <td>".$pax."</td>

                        </tr>

                         <tr>

                          <td><strong>Mensaje:</strong></td>

                           <td>".$mensaje."</td>

                           <td><strong>Actividades:</strong></td>

                           <td>".$actividades."</td>

                        </tr>

                           <tr>
                             <td><strong>Idioma:</strong></td>

                           <td>".utf8_decode($idioma)."</td>

                          <td><strong>Foto:</strong></td>

                           <td>".$ruta."</td>
         
                        </tr>

                        </table>";

    mail($mailto, $mailsubj, $mailbody, $mailhead);



    if($idioma=="Español"){
      redirect('view/confirmacion_photo','location');
  }else{

     redirect('en/view/confirmacion_photo','location');
  
}
   }

   

}