<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class usuario_model extends CI_Model {
   function __construct() {
		parent::__construct();
	}


public function get_usuario_all(){
   	$query = $this->db->query("SELECT * FROM usuario");
    if ($this->db->trans_status() === FALSE){
	return false;
		}else{
		return $query->result();
		}
                
    }

 public function insertar($datos){
       $query = $this->db->insert('usuario', $datos);
       
 }                
  
public function get_id($id){
 $query = $this->db->query("SELECT * FROM usuario WHERE id_usuario='$id'");  
   	return $query->row(); 
}
public function delete($id){
 $query = $this->db->query("DELETE  FROM usuario WHERE id_usuario='$id'");  
   	return $query->row(); 
}


}