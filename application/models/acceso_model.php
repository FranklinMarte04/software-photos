<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class acceso_model extends CI_Model {
   function __construct() {
		parent::__construct();
	}
	public function login($data)
	{
		$query = $this->db->query("SELECT * FROM usuario WHERE username='".$data['username']."' AND password='".$data['password']."'");
		if ($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else
		{
		return $query->row_array();
		}
	}

public function get_perfil($id_usuario){
		$query = $this->db->query("select o.nOpcion, o.menu, o.submenu, pu.estado from opcion_usuario pu inner join opcion o on o.nopcion = pu.Opcion where pu.Usuario =".$id_usuario);
		if ($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else
		{	
			$accesos = $query->result_array();
			return $accesos;
		}
	}
	
        



}