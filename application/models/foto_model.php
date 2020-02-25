<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class foto_model extends CI_Model {

   function __construct() {
      parent::__construct();
   }


  public function get_all_foto($tipo){
     
    $query=$this->db->query("SELECT * FROM paquete_fotos WHERE tipo='".$tipo."' ORDER BY orden");
   	return $query->result(); 
    }

   public function get_titulo_foto($tipo){
     
    $query=$this->db->query("SELECT * FROM paquete_fotos WHERE tipo='".$tipo."'  ORDER BY orden");
   	return $query->row(); 
    }  
public function get_foto_id($id_foto){
    $query=$this->db->query("SELECT * FROM paquete_fotos WHERE item_number='$id_foto' ORDER BY orden");
   	return $query->result_array(); 
    
}


}
