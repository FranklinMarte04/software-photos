<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Grafica extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('grafica_model', 'grafica');
    }

    
    
    
    public function ventas(){
       
      $data['fila']=$this->grafica->get_ventas_realizada("2015");
      $data['fila1']=$this->grafica->get_ventas_norealizada("2015");
      $this->load->view('admin/plantilla/header');
      $this->load->view('admin/plantilla/menu');
      $this->load->view('admin/graficas/ventas',$data);
      $this->load->view('admin/plantilla/footer');
       
       
    }
}
