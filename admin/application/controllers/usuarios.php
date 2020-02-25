<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

   public function __construct() {
      parent::__construct();
   $this->load->model('usuario_model','user');
   }
         /******Vistas*******/  
 public function listado()
	{
      $data['titulo']="Listado de Usuarios";
      $this->load->view('plantilla/header');
      $this->load->view('plantilla/menu');
      $data['resultado']=$this->user->get_usuario_all();
      $data['pdf']="usuarios";
      $this->load->view('listado_usuario',$data);
   }
  

   public function agregar(){
     $data['titulo']="Listado de Usuarios";
     $this->load->view('plantilla/header');
     $this->load->view('plantilla/menu');
     $this->load->view('agregar_usuario');
   }
  public function perfil(){
     
      $id=$this->input->get('id');
      $data['fila']=$this->user->get_id($id);
      $this->load->view('plantilla/header');
      $this->load->view('plantilla/menu');
      $this->load->view('info_usuario',$data);

  }
  /******Acciones*******/
  
  public function registrar_usuario(){
     
     $datos=array(
     'nombre'=>$this->input->post('nombre'),
     'username'=>$this->input->post('username'),
     'password'=>$this->input->post('password'),
     'email'=>$this->input->post('email'),
     'cargo'=>$this->input->post('cargo'),
     'tipo_usuario'=>$this->input->post('tipo_usuario'));
        $this->user->insertar($datos);
       redirect('usuarios/listado','refresh');
       
  }

  public function eliminar(){
        $id=$this->input->get('id');
        $this->user->delete($id);      
  }
}
