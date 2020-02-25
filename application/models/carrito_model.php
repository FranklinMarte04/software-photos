<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Carrito_model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

   function descuento($code) {
      $query = $this->db->query("SELECT * FROM code_promocion WHERE codigo='" . $code . "'");

      if ($query->num_rows() > 0) {
         return $query->row_array();
      }
   }

  
   
   public function insertar($agregar_carrito) {
      $this->db->insert_batch('detalle_compra', $agregar_carrito);
   }

   public function agregar_personal($datos_personal) {

      $query = $this->db->insert('clientes', $datos_personal);
      return $this->db->insert_id($query);
   }

      public function actualizar_personal($id,$datos_personal) {
              $this->db->where('codigo_cliente', $id);
      $query = $this->db->update('clientes', $datos_personal);
      
   }

    public function verificar_email($email) {

      $query = $this->db->query("select codigo_cliente, email from clientes where email='".$email."'");
      if ($query->num_rows() > 0) {
         return $query->row_array();
      }
   }
   
      public function insertar_venta($datos_venta) {
      $query=$this->db->insert('venta', $datos_venta);
       return $this->db->insert_id();
   }
      public function insertar_reserva($datos_reserva) {
      $this->db->insert('reservas', $datos_reserva);
   }
      public function insertar_paypal($datos_paypal) {
      $this->db->insert('paypal', $datos_paypal);
   }


}
