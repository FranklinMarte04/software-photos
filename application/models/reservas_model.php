<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class reservas_model extends CI_Model {
   function __construct() {
		parent::__construct();
	}
	public function completada($estado)
	{
		$query = $this->db->query("SELECT cl.codigo_cliente,cl.nombre,cl.apellido,cl.email,cl.telefono,vt.estado,vt.monto_total,
	rv.fecha_reserva FROM 	clientes AS cl INNER JOIN venta AS vt ON vt.codigo_cliente = cl.codigo_cliente
INNER JOIN reservas AS rv ON rv.codigo_cliente = cl.codigo_cliente WHERE vt.estado='$estado'");
		if ($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else
		{
		return $query->result();
		}
	}

public function detalle_factura($estado,$id){
   
   	$query = $this->db->query("SELECT cl.codigo_cliente,vt.estado,vt.monto_total,vt.descuento_total,
	dc.paquete,dc.descripcion,dc.cantidad_adulto,dc.precio_adulto,dc.cantidad_nino,dc.precio_nino,dc.subtotal,
 rv.fecha_reserva FROM clientes AS cl INNER JOIN venta AS vt ON vt.codigo_cliente = cl.codigo_cliente
INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente INNER JOIN reservas AS rv ON rv.codigo_cliente = cl.codigo_cliente
WHERE	vt.estado = '$estado' AND cl.codigo_cliente='$id'");
		if ($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else
		{
		return $query->result();
		}
                 }

                 
  public function detalle_montos($estado,$id){
   
 	$query = $this->db->query("SELECT cl.codigo_cliente,cl.nombre,cl.apellido,cl.email,cl.telefono,vt.descuento_total,vt.subtotal, vt.monto_total FROM	clientes AS cl INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
WHERE vt.estado = '$estado' AND cl.codigo_cliente='$id'");
		if ($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else
		{
		return $query->row(); 
		}
                 }




}