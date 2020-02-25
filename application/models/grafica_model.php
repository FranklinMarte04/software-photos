<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class grafica_model extends CI_Model {

   function __construct() {
      parent::__construct();
   }

  	function get_ventas_realizada($anio){
		$query = $this->db->query('SELECT CASE MONTH (fecha_compra)
WHEN "1" THEN	"Enero" WHEN "2" THEN	"Febrero" WHEN "3" THEN "Marzo"
WHEN "4" THEN	"Abril" WHEN "5" THEN	"Mayo" WHEN "6" THEN	"junio"
WHEN "7" THEN	"julio" WHEN "8" THEN	"Agosto" WHEN "9" THEN	"Septiembre"
WHEN "10" THEN	"Octubre" WHEN "11" THEN	"Noviembre" WHEN "12" THEN
	"Diciembre" END AS period, SUM(monto_total) AS total
FROM	venta WHERE	YEAR (fecha_compra) = '.$anio.' AND estado="VERIFICADO" GROUP BY	YEAR (fecha_compra),	period');
		
		return $query->row();  
	}

   	function get_ventas_norealizada($anio){
		$query = $this->db->query('SELECT CASE MONTH (fecha_compra)
WHEN "1" THEN	"Enero" WHEN "2" THEN	"Febrero" WHEN "3" THEN "Marzo"
WHEN "4" THEN	"Abril" WHEN "5" THEN	"Mayo" WHEN "6" THEN	"junio"
WHEN "7" THEN	"julio" WHEN "8" THEN	"Agosto" WHEN "9" THEN	"Septiembre"
WHEN "10" THEN	"Octubre" WHEN "11" THEN	"Noviembre" WHEN "12" THEN
	"Diciembre" END AS period, SUM(monto_total) AS total
FROM	venta WHERE	YEAR (fecha_compra) = '.$anio.' AND estado="NO VALIDO" GROUP BY	YEAR (fecha_compra),	period');
		
		return $query->row();  
	}

   
   


}
