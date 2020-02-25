<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reservas extends CI_Controller {

   public function __construct() {
      parent::__construct();
   
      $this->load->model('reservas_model','rv');
   }
          
   public function realizada(){
       $data['estado']=1;
       $data['titulo']="Listado de reservas realizadas";
        $data['pdf']="reservas_realizada";
        $data['excel']="excel_reservas";
       $data['resultado']=$this->rv->completada('VERIFICADO');
       $this->load->view('admin/plantilla/header');
       $this->load->view('admin/plantilla/menu');
       $this->load->view('admin/reservas',$data);
       $this->load->view('admin/plantilla/footer');
      
   }
   
     public function pendientes(){
        $data['estado']=0;
       $data['titulo']="Listado de Reservas Pendientes";
       $data['pdf']="reservas_norealizada";
        $data['excel']="excel_reservas_pendiente";
       $data['resultado']=$this->rv->completada('NO VALIDO');
       $this->load->view('admin/plantilla/header');
       $this->load->view('admin/plantilla/menu');
       $this->load->view('admin/reservas_pendiente',$data);
       $this->load->view('admin/plantilla/footer');
      
   }
   
 
}
