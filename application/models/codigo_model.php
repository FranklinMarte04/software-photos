<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class codigo_model extends CI_Model {

   function __construct() {
      parent::__construct();
   }


  public function get_all_codigo(){
 $query = $this->db->query("SELECT * FROM code_promocion");  
   		return $query->result();
}

  public function insertar( $datos){
$this->db->insert('code_promocion', $datos); 
}


}
