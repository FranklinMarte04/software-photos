<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class cliente_model extends CI_Model {

   function __construct() {
      parent::__construct();
   }


  public function get_id($id,$estado){
     
     if($estado=="VERIFICADO"){
 $query = $this->db->query("SELECT
	cl.nombre,
	cl.apellido,
	cl.email,
	cl.telefono,
	rv.habitacion,
	cl.fecha_registro,
	rv.fecha_reserva,
	rv.numero_reserva,
	rv.hotel,
	ipn.iname,
	ipn.iemail,
	ipn.itransaction_date,
	ipn.itransaction_id,
  vt.estado
FROM
	clientes AS cl
INNER JOIN reservas AS rv ON cl.codigo_cliente = rv.codigo_cliente
INNER JOIN ipn_paypal AS ipn ON cl.codigo_cliente = ipn.codigo_cliente
INNER JOIN venta AS vt ON vt.codigo_cliente = cl.codigo_cliente
WHERE
	cl.codigo_cliente = '$id'
AND vt.estado='$estado'");  
     }else if($estado=="NO VALIDO"){
        $query = $this->db->query("SELECT
	cl.nombre,
	cl.apellido,
	cl.email,
	cl.telefono,
	cl.habitacion,
	cl.fecha_registro,
	rv.fecha_reserva,
	rv.numero_reserva,
	rv.hotel,
	
  vt.estado
FROM
	clientes AS cl
INNER JOIN reservas AS rv ON cl.codigo_cliente = rv.codigo_cliente
INNER JOIN venta AS vt ON vt.codigo_cliente = cl.codigo_cliente
WHERE
	cl.codigo_cliente = '$id'
AND vt.estado='$estado'");  
        
        
     }
 
   	return $query->row(); 
}


 public function cliente_add($data){
     $query=$this->db->insert('clientes',$data);
      return $this->db->insert_id($query);
     
 }
  
}
