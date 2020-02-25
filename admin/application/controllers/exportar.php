<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class exportar extends CI_Controller {

    public function exportar() {

        parent::__construct();

        $this->load->library('mpdf53/mpdf');

          $this->load->model("reservas_model","rv");

        $this->load->model("cliente_model","cl");

    }

    public function reservas_realizada() {

        $mpdf = new mPDF('utf-8', 'A4-L');

        $this->load->model('reservas_model', 'rv');

        $data['resultado'] =$this->rv-> completada("Pagada");

        $data['titulopdf']="Listado de Reservas Completadas";

        $mpdf->WriteHTML($this->load->view('exportar/pdfreservas', $data, true));

        $mpdf->Output();

    }

    public function usuarios() {

        $mpdf = new mPDF('utf-8', 'A4');

        $this->load->model('usuario_model', 'user');

        $data['resultado'] = $this->user->get_usuario_all();

        $mpdf->WriteHTML($this->load->view('exportar/pdfusuarios', $data, true));

        $mpdf->Output();

    }

        public function pdfinfoCliente() {

        $mpdf = new mPDF('utf-8', 'A4');

        $row=$data["fila"]=$this->cl->get_id($this->input->get("id"));

        $data['encabezado']="Perfil de"." ".$row->nombre." ".$row->apellido;

        $mpdf->WriteHTML($this->load->view('exportar/pdfinfocliente', $data, true));

        $mpdf->Output();

    }

    public function pdfinfoClientep() {

        $mpdf = new mPDF('utf-8', 'A4');

        $row=$data["fila"]=$this->cl->get_idp($this->input->get("id"));

        $data['encabezado']="Perfil de"." ".$row->nombre." ".$row->apellido;

        $mpdf->WriteHTML($this->load->view('exportar/pdfinfocliente', $data, true));

        $mpdf->Output();

    }

    public function pdfinfoClientef() {

        $mpdf = new mPDF('utf-8', 'A4');

        $row=$data["fila"]=$this->cl->get_idf($this->input->get("id"));

        $data['encabezado']="Datos Compra de"." ".$row->nombre." ".$row->apellido;

        $mpdf->WriteHTML($this->load->view('exportar/pdfinfoclientefoto', $data, true));

        $mpdf->Output();

    }



    public function reservas_norealizada() {

        $mpdf = new mPDF('utf-8', 'A4-L');

        $this->load->model('reservas_model', 'rv');

        $data['titulopdf']="Listado de Reservas No Completadas";

        $data['resultado'] = $this->rv->completada('NO VALIDO');

        $mpdf->WriteHTML($this->load->view('exportar/pdfreservas', $data, true));

        $mpdf->Output();

    }

    public function pdfphotoslistado() {

        $mpdf = new mPDF('utf-8', 'A4');

        $this->load->model('reservas_model', 'rv');

        $data['resultado']=$this->rv->photos();

        $data['titulopdf']="Listado de Compras de Fotos";

        $mpdf->WriteHTML($this->load->view('exportar/pdffotos', $data, true));

        $mpdf->Output();

    }

    public function pdfreportesfotos() {

        $mpdf = new mPDF('utf-8', 'A4');

        $this->load->model('reportes_model', 'rp');

        $data["resultado"]=$this->rp-> rangodefechafotos($this->input->get("tipo_reservas"), $this->input->get("desde"), $this->input->get("hasta"));

        $data['titulopdf']="Listado de Compras de Fotos";

        $mpdf->WriteHTML($this->load->view('exportar/pdfreportesfotos', $data, true));

        $mpdf->Output();

    }

    public function pdfcodigosdesc() {

        $mpdf = new mPDF('utf-8', 'A4');

        $this->load->model("reservas_model","rv");

        $data['resultado']=$this->rv->get_all_codigo();

        $data['titulopdf']="Codigos de Descuentos";

        $mpdf->WriteHTML($this->load->view('exportar/pdfcodigos', $data, true));

        $mpdf->Output();

    }

    public function pdfreportes() {

        $mpdf = new mPDF('utf-8', 'A4-L');

        $this->load->model('reportes_model', 'rp');

        $data["resultado"]=$this->rp-> rangodefechareservas($this->input->get("tipo_reservas"), $this->input->get("desde"), $this->input->get("hasta"));

        $data['titulopdf']="Reporte de Reservas";

        $mpdf->WriteHTML($this->load->view('exportar/pdfreportes', $data, true));

        $mpdf->Output();

    }

    public function excel_reservas_reportes() {

        $this->load->model('reportes_model','rp');

        $data['titulopdf']="Listado de Paquetes Comprados";

        $data["resultado"]=$this->rp-> rangodefechareservas($this->input->get("tipo_reservas"), $this->input->get("desde"), $this->input->get("hasta"));

        $this->load->view('exportar/excelreservasreportes', $data);

    }

    public function excel_fotos_reportes() {

        $this->load->model('reportes_model','rp');

        $data['titulopdf']="Listado de Paquetes Comprados";

        $data["resultado"]=$this->rp-> rangodefechafotos($this->input->get("tipo_reservas"), $this->input->get("desde"), $this->input->get("hasta"));

        $this->load->view('exportar/excelreservasreportes', $data);

    }

    public function excel_reservas() {

        $this->load->model('reservas_model','rv');

        $data['titulopdf']="Listado de reservas realizadas";

        $data['resultado'] =$this->rv-> completada("Pagada");

        $this->load->view('exportar/excelreservas', $data);

    }

    public function excel_reservas_pendiente() {

        $this->load->model('reservas_model','rv');

        $data['titulopdf']="Listado de reservas no realizadas";

        $data['resultado']=$this->rv->completada('NO VALIDO');

        $this->load->view('exportar/excelreservas_p', $data);



    }




    public function excelphotoslistado() {

        $this->load->model('reservas_model','rv');

        $data['titulopdf']="Listado de Compras compradas";

        $data['resultado'] =$this->rv-> photos();

        $this->load->view('exportar/excelfotos', $data);

    }




}



