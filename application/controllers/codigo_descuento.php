<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigo_descuento extends CI_Controller {

   public function __construct() {
      parent::__construct();
   $this->load->model('codigo_model','code');
   }
         /******Vistas*******/  
 public function listado()
	{
      $data['titulo']="Listado de codigo Descuento";
      $this->load->view('admin/plantilla/header');
      $this->load->view('admin/plantilla/menu');
      $data['resultado']=$this->code->get_all_codigo();
      $this->load->view('admin/listado_codigo',$data);
      $this->load->view('admin/plantilla/footer');
      

   }
    public function agregar()
	{
      $data['titulo']="Agregar codigo Descuento";
      $this->load->view('admin/plantilla/header');
      $this->load->view('admin/plantilla/menu');
      $this->load->view('admin/agregar_codigo');
      $this->load->view('admin/plantilla/footer');
      

   }
     public function registrar_codigo(){
     
     $datos=array(
     'empresa'=>$this->input->post('nombre_empresa'),
     'codigo'=>$this->input->post('codigo_descuento'),
     'descuento'=>$this->input->post('descuento'));
        $this->code->insertar($datos);
       redirect('codigo_descuento/listado','refresh');
       
  }
   
}