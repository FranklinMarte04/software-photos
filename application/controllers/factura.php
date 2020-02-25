<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Factura extends CI_Controller {

   public function __construct() {
      parent::__construct();
   
      $this->load->model('reservas_model','rv');
   }
          
  public function detalle_factura(){
       
    $id=desencriptar_id($this->input->get('id'));
  
      $estado=  desencriptar_id($this->input->get('estado'));
       if($estado==1){
          $estado="VERIFICADO";
        }else{
          $estado="NO VALIDO";
      }
       $data['resultado']=$this->rv->detalle_factura($estado,$id);
       $data['fila']=$this->rv->detalle_montos($estado,$id);
       $this->load->view('admin/plantilla/header');
       $this->load->view('admin/plantilla/menu');
       $this->load->view('admin/factura',$data);
       $this->load->view('admin/plantilla/footer');
      
   }
   
   
   
 
}
