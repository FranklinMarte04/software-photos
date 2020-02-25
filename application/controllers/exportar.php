<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class exportar extends CI_Controller {

   public function exportar() {
      parent::__construct();
      $this->load->library('mpdf53/mpdf');
   }

   public function reservas_realizada() {
      $mpdf = new mPDF('utf-8', 'A4');
      $this->load->model('reservas_model', 'rv');
      $data['resultado'] = $this->rv->completada('VERIFICADO');
      $data['titulopdf']="Listado de Reservas Completadas";
      $mpdf->WriteHTML($this->load->view('admin/exportar/pdfreservas', $data, true));
      $mpdf->Output();
   }

   public function usuarios() {
      $mpdf = new mPDF('utf-8', 'A4');
      $this->load->model('usuario_model', 'user');
      $data['resultado'] = $this->user->get_usuario_all();
      $mpdf->WriteHTML($this->load->view('admin/exportar/pdfusuarios', $data, true));
      $mpdf->Output();
   }

   public function reservas_norealizada() {
      $mpdf = new mPDF('utf-8', 'A4');
      $this->load->model('reservas_model', 'rv');
     $data['titulopdf']="Listado de Reservas No Completadas";
      $data['resultado'] = $this->rv->completada('NO VALIDO');

      $mpdf->WriteHTML($this->load->view('admin/exportar/pdfreservas', $data, true));
      $mpdf->Output();
   }
   
       public function excel_reservas() {
          $this->load->model('reservas_model','rv');
             $data['titulopdf']="Listado de reservas realizadas";
         $data['resultado']=$this->rv->completada('VERIFICADO');
        $this->load->view('admin/exportar/excelreservas', $data);
    }
 
  public function excel_reservas_pendiente() {
          $this->load->model('reservas_model','rv');
             $data['titulopdf']="Listado de reservas no realizadas";
         $data['resultado']=$this->rv->completada('NO VALIDO');
        $this->load->view('admin/exportar/excelreservas_p', $data);
    }
}
