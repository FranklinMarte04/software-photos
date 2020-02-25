<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class reservas_model extends CI_Model

{

    function __construct()

    {

        parent::__construct();

    }



    public function completada($estado)

    {

        if ($estado == "Pagada") {

            $query = $this->db->query("SELECT cl.nombre,cl.apellido,cl.email,cl.telefono,vt.fecha_compra,vt.descuento_total,vt.subtotal,vt.monto_total,vt.estado,vt.tipo_venta,vt.metodo_pago,cl.codigo_cliente, rv.fecha_reserva, dc.cantidad_adulto, dc.cantidad_nino, dc.paquete, rv.habitacion, rv.hotel FROM clientes as cl 
INNER JOIN venta as vt on vt.codigo_cliente=cl.codigo_cliente
 INNER JOIN reservas as rv  ON rv.codigo_cliente=vt.codigo_cliente
INNER JOIN detalle_compra as dc ON dc.codigo_cliente=vt.codigo_cliente
WHERE vt.estado='VERIFICADO' AND vt.tipo_venta='PAQUETES ATRACCIONES' ORDER BY cl.codigo_cliente DESC");

        } else {

            $query = $this->db->query("SELECT cl.nombre,cl.apellido,cl.email,cl.telefono,vt.fecha_compra,vt.descuento_total,vt.subtotal,vt.monto_total,vt.estado,vt.tipo_venta,cl.codigo_cliente, rv.fecha_reserva, dc.cantidad_adulto, dc.cantidad_nino, dc.paquete, rv.habitacion, rv.hotel 
FROM clientes as cl 
INNER JOIN venta as vt on vt.codigo_cliente=cl.codigo_cliente
INNER JOIN reservas as rv  ON rv.codigo_cliente=vt.codigo_cliente
INNER JOIN detalle_compra as dc ON dc.codigo_cliente=vt.codigo_cliente
WHERE vt.estado = 'NO VALIDO' AND vt.tipo_venta='PAQUETES ATRACCIONES'
group by cl.apellido
order by cl.codigo_cliente DESC

");

        }

        if ($this->db->trans_status() === FALSE) {

            return false;

        } else {

            return $query->result();

        }

    }



    public function photos()

    {

        $query = $this->db->query("SELECT
    cl.nombre,
    cl.apellido,
    cl.email,
    cl.telefono,
    vt.fecha_compra,
    vt.descuento_total,
    vt.subtotal,
    dc.descripcion,   
    vt.monto_total,
    vt.estado,
    vt.tipo_venta,
        vt.metodo_pago,
    cl.codigo_cliente
FROM
    venta AS vt
INNER JOIN clientes AS cl ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc ON vt.codigo_cliente = dc.codigo_cliente
WHERE
    vt.estado = 'VERIFICADO'
AND vt.tipo_venta = 'PAQUETES FOTOS'
GROUP BY
    cl.nombre,
    cl.apellido
ORDER BY
    vt.fecha_compra DESC");

        if ($this->db->trans_status() === FALSE) {

            return false;

        } else {

            return $query->result();

        }

    }

    public function photospendiente()

    {

        $query = $this->db->query("SELECT
  cl.codigo_cliente, cl.telefono,cl.nombre, cl.apellido, cl.email,
  dc.precio_paquete,
  vt.tipo_venta, vt.estado, vt.fecha_compra, vt.monto_total, dc.descripcion
FROM
  clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente
INNER JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente
WHERE
  vt.estado = 'NO VALIDO' 
AND vt.tipo_venta= 'PAQUETES FOTOS'
GROUP BY
    cl.nombre,
    cl.apellido
ORDER BY
    vt.fecha_compra DESC");

        if ($this->db->trans_status() === FALSE) {

            return false;

        } else {

            return $query->result();

        }

    }



    public function detalle_factura($estado, $id)

    {

        $query = $this->db->query("SELECT	cl.codigo_cliente,vt.estado,vt.monto_total,vt.descuento_total,
	dc.paquete,dc.descripcion,dc.cantidad_adulto,	dc.precio_adulto,dc.cantidad_nino,dc.precio_nino,
	dc.subtotal,rv.fecha_reserva FROM clientes AS cl INNER JOIN venta AS vt ON vt.codigo_cliente = cl.codigo_cliente INNER
JOIN detalle_compra AS dc ON dc.codigo_cliente = vt.codigo_cliente INNER JOIN reservas AS rv
 ON rv.codigo_cliente = cl.codigo_cliente WHERE vt.estado = '$estado' AND cl.codigo_cliente ='$id'");

        if ($this->db->trans_status() === FALSE) {

            return false;

        } else {

            return $query->result();

        }

    }



    public function detalle_montos($estado, $id)

    {

        if ($estado == "VERIFICADO") {

            $query = $this->db->query("SELECT
	cl.codigo_cliente,
	cl.nombre,
	cl.apellido,
	cl.email,
	cl.telefono,
	vt.descuento_total,
	vt.subtotal,
	vt.monto_total,
	reservas.numero_reserva,
	reservas.fecha_reserva,
	ipn_paypal.itransaction_date,
	ipn_paypal.itransaction_id,
	ipn_paypal.iemail
FROM
	clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente INNER
JOIN reservas ON cl.codigo_cliente = reservas.codigo_cliente INNER
JOIN ipn_paypal ON cl.codigo_cliente = ipn_paypal.codigo_cliente WHERE vt.estado = 'VERIFICADO'
AND cl.codigo_cliente = '$id' ");

        } else {

            $query = $this->db->query("SELECT
	cl.codigo_cliente,
	cl.nombre,
	cl.apellido,
	cl.email,
	cl.telefono,
	vt.descuento_total,
	vt.subtotal,
	vt.monto_total,
	reservas.numero_reserva,
	reservas.fecha_reserva,
	ipn_paypal.itransaction_date,
	ipn_paypal.itransaction_id,
	ipn_paypal.iemail
FROM
	clientes AS cl
INNER JOIN venta AS vt ON cl.codigo_cliente = vt.codigo_cliente INNER
JOIN reservas ON cl.codigo_cliente = reservas.codigo_cliente INNER
JOIN ipn_paypal ON cl.codigo_cliente = ipn_paypal.codigo_cliente WHERE vt.estado = 'VERIFICADO'
AND cl.codigo_cliente = '$id' ");

        }

        if ($this->db->trans_status() === FALSE) {

            return false;

        } else {

            return $query->row();

        }

    }



    public function grafica_venta_mes()

    {

        $query = $this->db->query(" SELECT
    COUNT(*) AS Totalventa,
    DATE_FORMAT(venta.fecha_compra, '%M') AS MES,
    venta.estado,
    venta.tipo_venta, py.ipaymentstatus
FROM
    venta
INNER JOIN clientes ON clientes.codigo_cliente = venta.codigo_cliente
INNER JOIN ipn_paypal as py on py.codigo_cliente = venta.codigo_cliente
WHERE  DATE_FORMAT(venta.fecha_compra, '%Y') = YEAR (CURDATE()) AND py.tipo_venta='PAQUETE ATRACCIONES' AND py.ipaymentstatus='Completed'
GROUP BY
    MONTH (venta.fecha_compra) ");

        return $query->result();

    }



    public function get_all_codigo()

    {

        $query = $this->db->query("SELECT * FROM code_promocion");

        return $query->result();

    }



    public function insertar($datos)

    {

        $this->db->insert('code_promocion', $datos);

    }



    public function delete($id)

    {

        $this->db->query("DELETE  FROM clientes WHERE codigo_cliente='$id'");

        $this->db->query("DELETE  FROM venta WHERE codigo_cliente='$id'");

        $this->db->query("DELETE  FROM reservas WHERE codigo_cliente='$id'");

        $this->db->query("DELETE  FROM detalle_compra WHERE codigo_cliente='$id'");

        $this->db->query("DELETE  FROM ipn_paypal WHERE codigo_cliente='$id'");

        return true;

    }

}