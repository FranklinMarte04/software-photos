<?php if (!defined('BASEPATH'))exit('No direct script access allowed');



class Shopping_en extends CI_Controller {



    public function __construct() {

        parent::__construct();

        $this->load->model('carrito_model', 'carrito');

        $this->load->helper('functions');

    }



 public function index() {

     $data['header']=$this->load->view('en/front-end/header',FALSE,true); 

     $data['menuprincipal']=$this->load->view('en/front-end/menu',FALSE,true); 

     $this->load->view('en/carrito',$data);

     $this->load->view('en/front-end/footer');

    }



 public function add_shopping() {



        //creamos un array llamaos $datospersonales

        $datospersonales = array();

        //creamos un array llamado opciones

        $opciones = array();

   //guardarmos los datos personales del cliente en un array



$date_reserva= str_replace('/', '-',$this->input->post('fecha'));

    $fecha_reserva=date("Y-m-d", strtotime($date_reserva));

        $datospersonales = array(

            'nombre' => $this->input->post('nombre'),

            'apellido' => $this->input->post('apellido'),

            'fecha_reserva' =>$fecha_reserva,

            'email' => $this->input->post('email'),

            'telefono' => $this->input->post('telefono'));

          //pasamos el array datospersonales a una variable de session

        

          $this->session->set_userdata('datocliente',$datospersonales);



        if ($this->input->post('opciones')) {

            $opciones = $this->input->post('opciones');

        }



        $descuento = 0.10;



    if($this->input->post("id")=="016"){    

    //agreamos los datos recibido a un array 

   

    if($this->input->post('adulto')==1){

    $precio= $this->input->post('precio')+35;    

   }else{

    $precio= $this->input->post('precio');    

    

   }

        $agregar_carrito = array(

            'id' => $this->input->post('id'),

            'ninos' => $this->input->post('nino'),

            'adultos' => $this->input->post('adulto'),

            'precio_paquete' =>$precio,

            'precio_nino'=>$this->input->post('precio_nino'),

            'descuento' => $descuento,

            'nombre_producto' => $this->input->post('nombre_paquete'),

            'options' => $opciones

        );



    }else{

       $agregar_carrito = array(

            'id' => $this->input->post('id'),

            'ninos' => $this->input->post('nino'),

            'adultos' => $this->input->post('adulto'),

            'precio_paquete' => $this->input->post('precio'),

            'precio_nino'=>$this->input->post('precio_nino'),

            'descuento' => $descuento,

            'nombre_producto' => $this->input->post('nombre_paquete'),

            'options' => $opciones

        );





    }







        //agregamos los datos del array al carrito de compra

        $this->cart->insert($agregar_carrito);

       

          



        redirect('shopping_en');

    }



    public function add_shopping_special_package() {



        //creamos un array llamaos $datospersonales

        $datospersonales = array();

        //creamos un array llamado opciones

        $opciones = array();

   //guardarmos los datos personales del cliente en un array



$date_reserva= str_replace('/', '-',$this->input->post('fecha'));

    $fecha_reserva=date("Y-m-d", strtotime($date_reserva));

        $datospersonales = array(

            'nombre' => $this->input->post('nombre'),

            'apellido' => $this->input->post('apellido'),

            'fecha_reserva' =>$fecha_reserva,

            'email' => $this->input->post('email'),

            'telefono' => $this->input->post('telefono'));

          //pasamos el array datospersonales a una variable de session

        

          $this->session->set_userdata('datocliente',$datospersonales);



        if ($this->input->post('opciones')) {

            $opciones = $this->input->post('opciones');

        }



        $descuento = 0.15;



    if($this->input->post("id")=="016"){    

    //agreamos los datos recibido a un array 

   

    if($this->input->post('adulto')==1){

    $precio= $this->input->post('precio')+35;    

   }else{

    $precio= $this->input->post('precio');    

    

   }

        $agregar_carrito = array(

            'id' => $this->input->post('id'),

            'ninos' => $this->input->post('nino'),

            'adultos' => $this->input->post('adulto'),

            'precio_paquete' =>$precio,

            'precio_nino'=>$this->input->post('precio_nino'),

            'descuento' => $descuento,

            'nombre_producto' => $this->input->post('nombre_paquete'),

            'options' => $opciones

        );



    }else{

       $agregar_carrito = array(

            'id' => $this->input->post('id'),

            'ninos' => $this->input->post('nino'),

            'adultos' => $this->input->post('adulto'),

            'precio_paquete' => $this->input->post('precio'),

            'precio_nino'=>$this->input->post('precio_nino'),

            'descuento' => $descuento,

            'nombre_producto' => $this->input->post('nombre_paquete'),

            'options' => $opciones

        );





    }







        //agregamos los datos del array al carrito de compra

        $this->cart->insert($agregar_carrito);

       

          



        redirect('shopping_en/check_out');

    }





    public function add_shopping_fotos() {



        //creamos un array llamaos $datospersonales

        $datospersonales = array();

        //creamos un array llamado opciones

        $opciones = array();

   //guardarmos los datos personales del cliente en un array



$date_reserva= str_replace('/', '-',$this->input->post('fecha'));

$date_visita= str_replace('/', '-',$this->input->post('fechaphoto'));

    $fecha_reserva=date("Y-m-d", strtotime($date_reserva));

    $fecha_visita=date("Y-m-d", strtotime($date_visita));



        $datospersonales = array(

            'nombre' => $this->input->post('nombre'),

            'apellido' => $this->input->post('apellido'),

            'fecha_reserva' =>$fecha_reserva,

            'email' => $this->input->post('email'),

            'fecha_registro' => date('Y-m-d H:i:s'),  

            'fecha_visita' =>$fecha_visita,          

            'nota' => $this->input->post('nota'),

            'referencia' => $this->input->post('referencia'),

            'telefono' => $this->input->post('telefono'));

          //pasamos el array datospersonales a una variable de session

        

          $this->session->set_userdata('datocliente',$datospersonales);



        if ($this->input->post('opciones')) {

            $opciones = $this->input->post('opciones');

        }



        $descuento = 0.00;



    if($this->input->post("id")=="016"){    

    //agreamos los datos recibido a un array 

   

    if($this->input->post('adulto')==1){

    $precio= $this->input->post('precio')+35;    

   }else{

    $precio= $this->input->post('precio');    

    

   }

        $agregar_carrito = array(

            'id' => $this->input->post('id'),

            'ninos' => $this->input->post('nino'),

            'adultos' => $this->input->post('adulto'),

            'precio_paquete' =>$precio,

            'precio_nino'=>$this->input->post('precio_nino'),

            'descuento' => $descuento,

            'nombre_producto' => $this->input->post('nombre_paquete'),

            'options' => $opciones

        );



    }else{

       $agregar_carrito = array(

            'id' => $this->input->post('id'),

            'ninos' => $this->input->post('nino'),

            'adultos' => $this->input->post('adulto'),

            'precio_paquete' => $this->input->post('precio'),

            'precio_nino'=>$this->input->post('precio_nino'),

            'descuento' => $descuento,

            'nombre_producto' => $this->input->post('nombre_paquete'),

            'options' => $opciones

        );





    }







        //agregamos los datos del array al carrito de compra

        $this->cart->insert($agregar_carrito);

       

          



        redirect('shopping_en/check_out_fotos');

    }

/*

    public function all_delete_shopping() {

        //vaciar todo el carro de la compra

        $this->cart->destroy();

        redirect('carrito');

    }*/

    

  public function check_out() {

     $data['header']=$this->load->view('en/front-end/header',FALSE,true); 

     $data['menuprincipal']=$this->load->view('en/front-end/menu',FALSE,true); 

     $this->load->view('en/payment.php',$data);

     $this->load->view('en/front-end/footer');

    }



    public function check_out_fotos() {

     $data['header']=$this->load->view('en/front-end/header',FALSE,true); 

     $data['menuprincipal']=$this->load->view('en/front-end/menu',FALSE,true); 

     $this->load->view('en/payment_fotos.php',$data);

     $this->load->view('en/front-end/footer');

    }



    public function update_shopping() {



        //capturamos los valores por post

        $rows = $this->input->post('rowid');

        $adultos = $this->input->post('adulto');

        $ninos = $this->input->post('nino');

         //creamos un array

        $data = array();

        //creamos un for para saber la posicion de cada arreglo

        for ($i = 0; $i < sizeof($rows); $i++) {

            $data[] = array(

                'rowid' => $rows[$i],

                'adultos' => $adultos[$i],

                'ninos' => $ninos[$i]

            );

        }

//actulizar el carro

        $this->cart->update($data);

   

         foreach($this->cart->contents() as $fila){

             $cantidad_adulto=$cantidad_adulto + $fila['adultos']; 

              $cantidad_nino=$cantidad_nino + $fila['ninos']; 

          $datacarrito[]=array(

            'subtotal'=>formato_moneda($fila['subtotal'],'dolares'),

            'descuento'=>formato_moneda($this->cart->descuento(),'dolares'),

            'subtotal_general'=>formato_moneda($this->cart->subtotal(),'dolares'),

            'total_general'=>formato_moneda($this->cart->total(),'dolares'),

            'cantidad_adulto'=>$cantidad_adulto,

            'cantidad_nino'=>$cantidad_nino

            );



         }

       

       echo json_encode($datacarrito);

    }





    public function delete_shopping() {

//creamos un array data,nada mas se eliminar si el adulto es igual a 0

        $data = array(

            'rowid' => $this->input->get('id'),

            'adultos' => 0,

            'ninos' => 0

        );

//eliminamos del carro linea por linea

        $this->cart->update($data);

        redirect('shopping_en','location');

       

    }



    public function save_shopping() {





        $datos_personal = array(

            'nombre' => $this->input->post('nombre'),

            'apellido' => $this->input->post('apellido'),

            'email' => $this->input->post('email'),

            'telefono' => $this->input->post('telefono'),

            'fecha_registro' => date('Y-m-d H:i:s')

        );



        $id_cliente = $this->carrito->agregar_personal($datos_personal);



        $datos_carrito = $this->cart->contents();



        foreach ($datos_carrito as $fila) {



            $agregar_carrito[] = array(

                'codigo_cliente' => $id_cliente,

                'descripcion' => implode(',', $fila['options']),

                'paquete' => $fila['nombre_producto'],

                'precio_paquete' => $fila['precio_paquete'],

                'fecha_compra' => date('Y-m-d H:i:s'),

                'cantidad_adulto' => $fila['adultos'],

                'precio_adulto' => $fila['subtotal_adultos'],

                'cantidad_nino' => $fila['ninos'],

                'precio_nino' => $fila['subtotal_ninos'],

                'subtotal' => $fila['subtotal']);

        }



        $this->carrito->insertar($agregar_carrito);



        $datos_venta = array(

            'codigo_cliente' => $id_cliente,

            'fecha_compra' => date('Y-m-d H:i:s'),

            'descuento_total' => $this->cart->descuento(),

            'subtotal' => $this->cart->subtotal(),

            'monto_total' => $this->cart->total(),

            'estado' => 'NO VALIDO',

            'tipo_venta'=>'PAQUETES ATRACCIONES'

        );



        $this->carrito->insertar_venta($datos_venta);



        $datos_reserva = array(

            'codigo_cliente' => $id_cliente,

            'fecha_reserva' =>$this->session->userdata('datocliente')["fecha_reserva"],

            'hotel'=>$this->input->post('hotel'),

            'habitacion'=>$this->input->post('habitacion')

        );

        $this->carrito->insertar_reserva($datos_reserva);

           redirect('shopping/conectado_paypal','location');

   

    }



  public function save_shopping_fotos() {


        $datos_personal = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'email' => $this->input->post('email'),
            'telefono' => $this->input->post('telefono'),
            'fecha_registro' => date('Y-m-d H:i:s'),
            'nota' => $this->input->post('nota'),
            'referencia' => $this->input->post('referencia'),
            'fecha_visita' => $this->input->post('fechaphoto')
        );

        $result = $this->carrito->verificar_email($this->input->post('email'));

        if ($result) {
            $id_cliente = $result["codigo_cliente"];
            $result = $this->carrito->actualizar_personal($id_cliente, $datos_personal);
        } else {
            $id_cliente = $this->carrito->agregar_personal($datos_personal);
        }
     

        $datos_venta = array(
            'codigo_cliente' => $id_cliente,
            'fecha_compra' => date('Y-m-d H:i:s'),
            'descuento_total' => $this->cart->descuento(),
            'subtotal' => $this->cart->subtotal(),
            'monto_total' => $this->cart->total(),
            'estado' => 'NO VALIDO',
            'tipo_venta' => 'PAQUETES FOTOS'
        );

        $id_venta = $this->carrito->insertar_venta($datos_venta);

        $datosfactura = array(
            'id_factura' => $id_venta);
//pasamos el array datospersonales a una variable de session
        $this->session->set_userdata('datofactura', $datosfactura);

        
        $datos_carrito = $this->cart->contents();
        foreach ($datos_carrito as $fila) {

            $agregar_carrito[] = array(
                'id_venta' => $id_venta,
                'codigo_cliente' => $id_cliente,
                'descripcion' => $fila['nombre_producto'],
                'paquete' => 'PAQUETE DE FOTOS',
                'precio_paquete' => $fila['precio_paquete'],
                'fecha_compra' => date('Y-m-d H:i:s'),
                'cantidad_adulto' => $fila['adultos'],
                'precio_adulto' => $fila['subtotal_adultos'],
                'cantidad_nino' => $fila['ninos'],
                'precio_nino' => $fila['subtotal_ninos'],
                'subtotal' => $fila['subtotal']);
        }

        $this->carrito->insertar($agregar_carrito);
         
        redirect('shopping_en/conectado_paypal', 'location');
    }







    public function save_cardnet() {





        $datos_personal = array(

            'nombre' => $this->input->post('nombre'),

            'apellido' => $this->input->post('apellido'),

            'email' => $this->input->post('email'),

            'telefono' => $this->input->post('telefono'),

            'fecha_registro' => date('Y-m-d H:i:s')

        );



        $id_cliente = $this->carrito->agregar_personal($datos_personal);



        $datos_carrito = $this->cart->contents();



        foreach ($datos_carrito as $fila) {



            $agregar_carrito[] = array(

                'codigo_cliente' => $id_cliente,

                'descripcion' => implode(',', $fila['options']),

                'paquete' => $fila['nombre_producto'],

                'precio_paquete' => $fila['precio_paquete'],

                'fecha_compra' => date('Y-m-d H:i:s'),

                'cantidad_adulto' => $fila['adultos'],

                'precio_adulto' => $fila['subtotal_adultos'],

                'cantidad_nino' => $fila['ninos'],

                'precio_nino' => $fila['subtotal_ninos'],

                'subtotal' => $fila['subtotal']);

        }



        $this->carrito->insertar($agregar_carrito);



        $datos_venta = array(

            'codigo_cliente' => $id_cliente,

            'fecha_compra' => date('Y-m-d H:i:s'),

            'descuento_total' => $this->cart->descuento(),

            'subtotal' => $this->cart->subtotal(),

            'monto_total' => $this->cart->total(),

            'estado' => 'NO VALIDO',

            'tipo_venta'=>'PAQUETES ATRACCIONES'

        );



        $this->carrito->insertar_venta($datos_venta);



        $datos_reserva = array(

            'codigo_cliente' => $id_cliente,

            'fecha_reserva' =>$this->session->userdata('datocliente')["fecha_reserva"],

            'hotel'=>$this->input->post('hotel'),

            'habitacion'=>$this->input->post('habitacion')

        );

        $this->carrito->insertar_reserva($datos_reserva);

           redirect('shopping_en/conectado_cardnet','location');

   

    }



    public function save_cardnet_fotos() {





        $datos_personal = array(

            'nombre' => $this->input->post('nombre'),

            'apellido' => $this->input->post('apellido'),

            'email' => $this->input->post('email'),

            'telefono' => $this->input->post('telefono'),

            'fecha_registro' => date('Y-m-d H:i:s'),

            'nota' => $this->input->post('nota'),

            'referencia' => $this->input->post('referencia'),

            'fecha_visita' => $this->input->post('fechaphoto')

        );



        $id_cliente = $this->carrito->agregar_personal($datos_personal);



        $datos_carrito = $this->cart->contents();



        foreach ($datos_carrito as $fila) {



            $agregar_carrito[] = array(

                'codigo_cliente' => $id_cliente,

                'descripcion' => $fila['nombre_producto'],

                'paquete' => 'PAQUETE DE FOTOS',

                'precio_paquete' => $fila['precio_paquete'],

                'fecha_compra' => date('Y-m-d H:i:s'),

                'cantidad_adulto' => $fila['adultos'],

                'precio_adulto' => $fila['subtotal_adultos'],

                'cantidad_nino' => $fila['ninos'],

                'precio_nino' => $fila['subtotal_ninos'],

                'subtotal' => $fila['subtotal']);

        }



        $this->carrito->insertar($agregar_carrito);



        $datos_venta = array(

            'codigo_cliente' => $id_cliente,

            'fecha_compra' => date('Y-m-d H:i:s'),

            'descuento_total' => $this->cart->descuento(),

            'subtotal' => $this->cart->subtotal(),

            'monto_total' => $this->cart->total(),

            'estado' => 'NO VALIDO',

            'tipo_venta'=>'PAQUETES FOTOS'

        );



        $this->carrito->insertar_venta($datos_venta);



       

           redirect('shopping_en/conectado_cardnet','location');

   

    }





    public function conectado_paypal(){

     $data['header']=$this->load->view('en/front-end/header',FALSE,true); 

     $data['menuprincipal']=$this->load->view('en/front-end/menu',FALSE,true); 

     $this->load->view('paypal.php',$data);

     $this->load->view('en/front-end/footer');

    }

    

    public function conectado_cardnet(){

     $data['header']=$this->load->view('en/front-end/header',FALSE,true); 

     $data['menuprincipal']=$this->load->view('en/front-end/menu',FALSE,true); 

     $this->load->view('en/cardnet.php',$data);

     $this->load->view('en/front-end/footer');

    }



    public function buscar_paquete_foto(){

        $id=$this->input->post('id');

        $this->load->model('foto_model','photo');

        $respuesta=$this->photo->get_foto_id($id);

        echo json_encode($respuesta);

    }



   



}

