<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct() {
       parent::__construct();
     $this->load->model('acceso_model','mod');
   }
public function index(){
  $this->data['error'] = $this->session->flashdata('error');
  	$this->load->view('login',$this->data);
       
   }
public function logearse(){
		if(isset($_POST['username']) && isset($_POST['password'])){
		$data = array(
                    'username' =>$_POST['username'],
		    'password' =>$_POST['password']);
                    $return = $this->mod->login($data);
			if(count($return)==0){
				$this->session->set_flashdata('error', "El usuario o contrasña no son validos");
				redirect('/login', 'location');
			}else{
		$usuarios = $return;	
            	$this->session->set_userdata('perfil',$usuarios);
         	  //$perfiles = $this->mod->get_perfil($usuarios['id_usuario']);
		  //$this->session->set_userdata('perfiles',$perfiles);
                  //$this->session->set_userdata($usuarios);
			    redirect('/admin', 'location');
			}
		}
	}
            public function salir(){
              $this->session->unset_userdata('perfil');
		redirect('/login', 'location');
	  }
   
}

