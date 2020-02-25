<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class View extends CI_Controller {



   public function __construct() {

      parent::__construct();

      $this->load->helper('functions');

      $this->load->model('foto_model','photo');

   }



   public function index() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('index', $data);

      $this->load->view('front-end/footer');

   }



   /*    * **************************************************************

    *                                                               * 

    *                   Nosotros                                    *

    * *************************************************************** */

   public function nosotros() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('nosotros', $data);

      $this->load->view('front-end/footer');

   }



   /*    * **************************************************************

    *                                                               * 

    *                     El Parque                                 *

    * *************************************************************** */



   public function informacion_general() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('informacion_general', $data);

      $this->load->view('front-end/footer');

   }



   public function mapa_del_parque() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('mapa_del_parque', $data);

      $this->load->view('front-end/footer');

   }



   public function galeria() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('galeria', $data);

      $this->load->view('front-end/footer');

   }



   public function buy_photo() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('buy_photo', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_puntacana() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('bavaro_puntacana', $data);

      $this->load->view('front-end/footer');

   }

   public function politicas_de_privacidad() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('politicas_de_privacidad', $data);

      $this->load->view('front-end/footer');

   }



   public function confirmacion_photo() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('confirmacion_photo', $data);

      $this->load->view('front-end/footer');

   }



   public function cd_photos () {



      $id=$this->input->get("pq");

      $datamenu['url']=base_url()."view/cd_photos?pq=".$id."";

      $tipo=$this->input->get('pq');

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $data['resultadophoto']=$this->photo->get_all_foto($tipo);

      $fl=$this->photo->get_titulo_foto($tipo);

      $data['titulo']=$titulo;      

      $this->load->view('cd_photos', $data);

      $this->load->view('front-end/footer');

   }



   /* **************************************************************

    *                                                               * 

    *                       Atraciones                              *

    * ************************************************************* */



   public function bavaro_bungee_trampoline_crazy_jumper() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-bungee-trampoline-crazy-jumper', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_bmx_pump_track() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro_bmx_pump_track', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_mountainbike_cool_biker() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-mountainbike-cool-biker', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_zipline_mega_splash() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

     $datareserva['megasplash'] = true;

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['buggiesmegas'] = true;

      $datareserva['polarismegasplash'] = true;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-zipline-mega-splash', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_flightsimulator_skydiver() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-flightsimulator-skydiver', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_zipline_skywalker() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-zipline-skywalker', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_zorbing_downhill_revolution() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-zorbing-downhill-revolution', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_climbing_garden_treasure_of_the_caribbean() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-climbing-garden-treasure-of-the-caribbean', $data);

      $this->load->view('front-end/footer');

   }



   public function horse() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['polariscaballo'] = true;

      $datareserva['buggiescaballo'] = true;

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('horse', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_zipline_skywalker_pro() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-zipline-skywalker-pro', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_paintball_rapid_shooter() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-paintball-rapid-shooter', $data);

      $this->load->view('front-end/footer');

   }



   public function Paintball_package() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['paintballpackage'] = true;

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('paintball_package', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_segway_x_treme_driver() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-segway-x-treme-driver', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_dinosaur_world_jurassic_adventure() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = true;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-dinosaur-world-jurassic-adventure', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_zipline_splash() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = true;

      $datareserva['polarismegasplash'] = true;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-zipline-splash', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_piscina_natural() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = true;

      $datareserva['dinoworld'] = true;

      $datareserva['dinoworld_order'] = 2;

      $datareserva['megasplash_order'] = 1;

      $datareserva['adventure_order'] = 3;

      $datareserva['adventureplus_order'] = 4;

      $datareserva['adventurevip_order'] = 5;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-piscina-natural', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_eco_tours() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = true;

      $datareserva['dinoworld'] = true;

      $datareserva['dinoworld_order'] = 2;

      $datareserva['megasplash_order'] = 1;

      $datareserva['adventure_order'] = 3;

      $datareserva['adventureplus_order'] = 4;

      $datareserva['adventurevip_order'] = 5;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-eco-tours', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_parque_juego() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = true;

      $datareserva['adventureplus'] = true;

      $datareserva['adventurevip'] = true;

      $datareserva['megasplash'] = true;

      $datareserva['dinoworld'] = true;

      $datareserva['dinoworld_order'] = 2;

      $datareserva['megasplash_order'] = 1;

      $datareserva['adventure_order'] = 3;

      $datareserva['adventureplus_order'] = 4;

      $datareserva['adventurevip_order'] = 5;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su paquete Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro-parque-juego', $data);

      $this->load->view('front-end/footer');

   }



   /*    * **************************************************************

    *                                                               * 

    *                       Tours                                   *

    * *************************************************************** */



   public function bavaro_sunset_vip() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = true;

      $datareserva['sunsetvip'] = true;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro_sunset_vip', $data);

      $this->load->view('front-end/footer');

   }



   public function combos_buggies() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['adventurebuggies'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['buggiesmegas'] = true;

      $datareserva['buggiescaballo'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('combos_buggies', $data);

      $this->load->view('front-end/footer');

   }



   public function combo_adventure_buggies() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = true;

      $datareserva['adventurebuggies'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('combo_adventure_buggies', $data);

      $this->load->view('front-end/footer');

   }

   public function combo_polaris() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['polariscaballo'] = true;

      $datareserva['polarismegasplash'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('combo_polaris', $data);

      $this->load->view('front-end/footer');

   }



   public function boogie_vip() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['adventurebuggies'] = true;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['boogie_vip'] = true;

      $datareserva['buggiesmegas'] = true;

      $datareserva['buggiescaballo'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('boogie_vip', $data);

      $this->load->view('front-end/footer');

   }



   public function boogie_1() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['boogie_adventure_vip'] = true;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['adventurebuggies'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['boogie_vip'] = false;

      $datareserva['buggiesmegas'] = false;

      $datareserva['buggiescaballo'] = false;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('boogie_1', $data);

      $this->load->view('front-end/footer');

   }



   public function bavaro_polaris_vip() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['polarisvip'] = true;

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['boogie_vip'] = false;

      $datareserva['polariscaballo'] = true;

      $datareserva['polarismegasplash'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('bavaro_polaris_vip', $data);

      $this->load->view('front-end/footer');

   }



   /*    * **************************************************************

    *                                                               * 

    *            Comprar Entradas                                   *

    * *************************************************************** */



   public function paquetes() {

      $data['id'] = $this->input->get('pq');

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('paquetes', $data);

      $this->load->view('front-end/footer');

   }



   public function atracciones() {

      $data['id'] = $this->input->get('pq');

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $this->load->view('atracciones', $data);

      $this->load->view('front-end/footer');

   }



   /*    * **************************************************************

    *                                                               * 

    *            Confirmacion Pago                                   *

    * *************************************************************** */



   public function confirmacion_pago() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = true;

      $datareserva['adventurebuggies'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('confirmacion_pago', $data);

      $this->load->view('front-end/footer');

   }

public function pago_invalido() {

      $data['header'] = $this->load->view('front-end/header', FALSE, true);

      $data['menuprincipal'] = $this->load->view('front-end/menu', FALSE, true);

      $datareserva['adventure'] = false;

      $datareserva['adventureplus'] = false;

      $datareserva['adventurevip'] = false;

      $datareserva['megasplash'] = false;

      $datareserva['dinoworld'] = false;

      $datareserva['megasunset'] = false;

      $datareserva['sunsetvip'] = false;

      $datareserva['megasbuggies'] = true;

      $datareserva['adventurebuggies'] = true;

      $datareserva['tituloreservas'] = "Compre su Combo Ahora ";

      $data['reservas'] = $this->load->view('front-end/reserva', $datareserva, true);

      $this->load->view('pago_invalido', $data);

      $this->load->view('front-end/footer');

   }


}

