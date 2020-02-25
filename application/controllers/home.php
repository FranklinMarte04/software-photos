<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('front-end/menu',FALSE,true); 
     $this->load->view('index',$data);
     $this->load->view('front-end/footer');
      
	}
   
 
}

