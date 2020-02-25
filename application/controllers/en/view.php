<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $this->load->helper('functions');
        $this->load->model('foto_model','photo');
    }
   public function index()
   {
     $datamenu['url']=base_url();   
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/index',$data);
     $this->load->view('en/front-end/footer');
   }
   
/****************************************************************
*                                                               * 
*                   Nosotros                                    *
*****************************************************************/
     public function nosotros(){
     $datamenu['url']=base_url()."view/nosotros";   
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/nosotros',$data);
     $this->load->view('en/front-end/footer');

    }

    public function exito(){
     $datamenu['url']=base_url()."view/exito";   
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/exito',$data);
     $this->load->view('en/front-end/footer');

    }

/****************************************************************
*                                                               * 
*                     El Parque                                 *
*****************************************************************/
  
   public function informacion_general(){
    $datamenu['url']=base_url()."view/informacion_general"; 
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/informacion_general',$data);
     $this->load->view('en/front-end/footer');

    }
   public function mapa_del_parque(){
    $datamenu['url']=base_url()."view/mapa_del_parque"; 
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/mapa_del_parque',$data);
     $this->load->view('en/front-end/footer');

    }
  public function galeria(){
    $datamenu['url']=base_url()."view/galeria";
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/galeria',$data);
     $this->load->view('en/front-end/footer');

    }
   public function comprar_fotos(){
    $datamenu['url']=base_url()."view/comprar_fotos";
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/comprar_fotos',$data);
     $this->load->view('en/front-end/footer');

    }
    public function bavaro_puntacana(){
      $datamenu['url']=base_url()."view/bavaro_puntacana";
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/bavaro_puntacana',$data);
     $this->load->view('en/front-end/footer');

    }

    public function politicas_de_privacidad(){
      $datamenu['url']=base_url()."view/politicas_de_privacidad";
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
     $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $this->load->view('en/politicas_de_privacidad',$data);
     $this->load->view('en/front-end/footer');

    }
    public function cd_photos()
    {

      $id=$this->input->get("pq");
      $datamenu['url']=base_url()."view/cd_photos?pq=".$id."";
      $tipo=$this->input->get('pq');
      $data['header']=$this->load->view('en/front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $data['resultadophoto']=$this->photo->get_all_foto($tipo);
      $fl=$this->photo->get_titulo_foto($tipo);
      $titulo=$fl->titulo_atracion;
      $data['titulo']=$titulo;
      $this->load->view('en/cd_photos',$data);
      $this->load->view('en/front-end/footer');
}

 public function special_package()
    {

      $id=$this->input->get("pq");
      $datamenu['url']=base_url()."view/special_package?pq=".$id."";
      $tipo=$this->input->get('pq');
      $data['header']=$this->load->view('en/front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $data['resultadophoto']=$this->photo->get_all_foto($tipo);
      $fl=$this->photo->get_titulo_foto($tipo);
      $titulo=$fl->titulo_atracion;
      $data['titulo']=$titulo;
      $this->load->view('en/special_package',$data);
      $this->load->view('en/front-end/footer');
}

public function sunset_vip()
    {

      $id=$this->input->get("pq");
      $datamenu['url']=base_url()."view/Sunset_VIP_Cruise".$id."";
      $tipo=$this->input->get('pq');
      $data['header']=$this->load->view('en/front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $data['resultadophoto']=$this->photo->get_all_foto($tipo);
      $fl=$this->photo->get_titulo_foto($tipo);
      $titulo=$fl->titulo_atracion;
      $data['titulo']=$titulo;
      $this->load->view('en/sunset_vip',$data);
      $this->load->view('en/front-end/footer');
}
/****************************************************************
*                                                               * 
*                       Atraciones                              *
*****************************************************************/


      public function bavaro_bungee_trampoline_crazy_jumper()
    {
      $datamenu['url']=base_url()."view/bavaro_bungee_trampoline_crazy_jumper";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
      $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_bungee_trampoline_crazy_jumper',$data);
      $this->load->view('en/front-end/footer');
     
    } 
         public function bavaro_bmx_pump_track()
    {
      $datamenu['url']=base_url()."view/bavaro_bmx_pump_track";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_bmx_pump_track',$data);
      $this->load->view('en/front-end/footer');
     
    }

         public function bavaro_mountainbike_cool_biker()
    {
      $datamenu['url']=base_url()."view/bavaro_mountainbike_cool_biker";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_mountainbike_cool_biker',$data);
      $this->load->view('en/front-end/footer');
     
    }
           public function bavaro_zipline_mega_splash()
    {
      $datamenu['url']=base_url()."view/bavaro_zipline_mega_splash";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=true;
      $datareserva['dinoworld']=false;
      $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['buggiesmegas'] = true;
      $datareserva['polariszipline'] = true;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_zipline_mega_splash',$data);
      $this->load->view('en/front-end/footer');
     
    }
    

         public function bavaro_flightsimulator_skydiver()
    {
      $datamenu['url']=base_url()."view/bavaro_flightsimulator_skydiver";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_flightsimulator_skydiver',$data);
      $this->load->view('en/front-end/footer');
     
    }

            public function bavaro_zipline_skywalker()
    {
      $datamenu['url']=base_url()."view/bavaro_zipline_skywalker";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_zipline_skywalker',$data);
      $this->load->view('en/front-end/footer');
       
     }
           public function bavaro_zorbing_downhill_revolution()
    {
      $datamenu['url']=base_url()."view/bavaro_zorbing_downhill_revolution";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_zorbing_downhill_revolution',$data);
      $this->load->view('en/front-end/footer');
       
}
     public function bavaro_climbing_garden_treasure_of_the_caribbean()
    {
      $datamenu['url']=base_url()."view/bavaro_climbing_garden_treasure_of_the_caribbean";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_climbing_garden_treasure_of_the_caribbean',$data);
      $this->load->view('en/front-end/footer');
       
     }

 public function horse()
    {
      $datamenu['url']=base_url()."view/horse";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['buggiescaballo']=true;
      $datareserva['polariscaballo']=true;
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/horse',$data);
      $this->load->view('en/front-end/footer');
       
}
    
 
  public function bavaro_zipline_skywalker_pro()
    {
      $datamenu['url']=base_url()."view/bavaro_zipline_skywalker_pro";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
     $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_zipline_skywalker_pro',$data);
      $this->load->view('en/front-end/footer');
       
}


  public function bavaro_paintball_rapid_shooter()
    {
      $datamenu['url']=base_url()."view/bavaro_paintball_rapid_shooter";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_paintball_rapid_shooter',$data);
      $this->load->view('en/front-end/footer');
       
}

  public function paintball_package()
    {
      $datamenu['url']=base_url()."view/paintball_package";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['paintballpackage'] = true;
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/paintball_package',$data);
      $this->load->view('en/front-end/footer');
       
}
  public function bavaro_segway_x_treme_driver()
    {
      $datamenu['url']=base_url()."view/bavaro_segway_x_treme_driver";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_segway_x_treme_driver',$data);
      $this->load->view('en/front-end/footer');
       
}
 public function bavaro_dinosaur_world_jurassic_adventure()
    {
      $datamenu['url']=base_url()."view/bavaro_dinosaur_world_jurassic_adventure";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=true;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_dinosaur_world_jurassic_adventure',$data);
      $this->load->view('en/front-end/footer');
       
}
 public function bavaro_zipline_splash()
    {
      $datamenu['url']=base_url()."view/bavaro_zipline_splash";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true);  
      $this->load->view('en/bavaro_zipline_splash',$data);
      $this->load->view('en/front-end/footer');
       
}
 public function bavaro_piscina_natural()
    {
      $datamenu['url']=base_url()."view/bavaro_piscina_natural";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=true;
      $datareserva['dinoworld']=true;
      $datareserva['dinoworld_order']=2;
      $datareserva['megasplash_order']=1;
      $datareserva['adventure_order']=3;
      $datareserva['adventureplus_order']=4;
      $datareserva['adventurevip_order']=5;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true);  
      $this->load->view('en/bavaro_piscina_natural',$data);
      $this->load->view('en/front-end/footer');
       
}
 public function bavaro_eco_tours()
    {
      $datamenu['url']=base_url()."view/bavaro_eco_tours";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=true;
      $datareserva['dinoworld']=true;
      $datareserva['dinoworld_order']=2;
      $datareserva['megasplash_order']=1;
      $datareserva['adventure_order']=3;
      $datareserva['adventureplus_order']=4;
      $datareserva['adventurevip_order']=5;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_eco_tours',$data);
      $this->load->view('en/front-end/footer');
       
}
 public function bavaro_parque_juego()
    {
      $datamenu['url']=base_url()."view/bavaro_parque_juego";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=true;
      $datareserva['adventureplus']=true;
      $datareserva['adventurevip']=true;
      $datareserva['megasplash']=true;
      $datareserva['dinoworld']=true;
      $datareserva['dinoworld_order']=2;
      $datareserva['megasplash_order']=1;
      $datareserva['adventure_order']=3;
      $datareserva['adventureplus_order']=4;
      $datareserva['adventurevip_order']=5;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
       $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
       $datareserva['tituloreservas']="Buy your Package Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_parque_juego',$data);
      $this->load->view('en/front-end/footer');
       
}
/****************************************************************
*                                                               * 
*                       Tours                                   *
*****************************************************************/   
 public function bavaro_sunset_vip()
    {
      $datamenu['url']=base_url()."view/bavaro_sunset_vip";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=true;
      $datareserva['sunsetvip']=true;
      $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_sunset_vip',$data);
      $this->load->view('en/front-end/footer');
       
}
   public function combos_buggies()
    {
      $datamenu['url']=base_url()."view/combo_adventure_buggies";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['adventurebuggies']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['buggiesmegas']=true;
      $datareserva['buggiescaballo']=true;
       $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/combos_buggies',$data);
      $this->load->view('en/front-end/footer');
       
}
public function combo_adventure_buggies()
    {
      $datamenu['url']=base_url()."view/combo_adventure_buggies";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['megasbuggies']=true;
      $datareserva['adventurebuggies']=true;
       $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/combo_adventure_buggies',$data);
      $this->load->view('en/front-end/footer');
       
}
public function boogie_vip()
    {
      $datamenu['url']=base_url()."view/boogie_vip";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['adventurebuggies']=true;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['boggie_vip'] = true;
      $datareserva['boogie_vip'] = true;
      $datareserva['megasbuggies']=true;
      $datareserva['adventurebuggies']=true;
       $datareserva['buggiescaballo']=true;
        $datareserva['buggiesmegas']=true;
       $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/boogie_vip',$data);
      $this->load->view('en/front-end/footer');
       
}

public function boogie_1()
    {
      $datamenu['url']=base_url()."view/boogie_1";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['boogie_adventure_vip']=true;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['adventurebuggies']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['boggie_vip'] = false;
      $datareserva['megasbuggies']=false;
      $datareserva['adventurebuggies']=false;
       $datareserva['buggiescaballo']=false;
        $datareserva['buggiesmegas']=false;
       $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/boogie_1',$data);
      $this->load->view('en/front-end/footer');
       
}

public function bavaro_polaris_vip()
    {
      $datamenu['url']=base_url()."view/bavaro_polaris_vip";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['polarisvip']=true;
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['polariscaballo']=true;
      $datareserva['polarismegasplash']=true;
       $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/bavaro_polaris_vip',$data);
      $this->load->view('en/front-end/footer');
       
}
public function combo_polaris()
    {
      $datamenu['url']=base_url()."view/combo_polaris";
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
       $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['megasbuggies']=false;
      $datareserva['polariszipline']=true;
      $datareserva['polariscaballo']=true;
       $datareserva['tituloreservas']="Buy your Combo Now ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/combo_polaris',$data);
      $this->load->view('en/front-end/footer');
       
}
/****************************************************************
*                                                               * 
*            Comprar Entradas                                   *
*****************************************************************/  

    public function paquetes()
    {
      $datamenu['url']=base_url()."view/paquetes";
      $data['id']=$this->input->get('pq');
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $this->load->view('en/paquetes',$data);
      $this->load->view('en/front-end/footer');
       
}
   
   public function atracciones()
    {
      $datamenu['url']=base_url()."view/atracciones";
      $data['id']=$this->input->get('pq');
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $this->load->view('en/atracciones',$data);
      $this->load->view('en/front-end/footer');
       
}
public function buy_photo()
    {
      $datamenu['url']=base_url()."view/buy_photo";
      $data['id']=$this->input->get('pq');
      $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $this->load->view('en/buy_photo',$data);
      $this->load->view('en/front-end/footer');
       
}
/****************************************************************
*                                                               * 
*            Confirmacion Pago                                   *
*****************************************************************/  
   public function confirmacion_pago(){
    $datamenu['url']=base_url()."view/confirmacion_pago";
     $data['header']=$this->load->view('front-end/header',FALSE,true); 
      $data['menuprincipal']=$this->load->view('en/front-end/menu',$datamenu,true); 
      $datareserva['adventure']=false;
      $datareserva['adventureplus']=false;
      $datareserva['adventurevip']=false;
      $datareserva['megasplash']=false;
      $datareserva['dinoworld']=false;
      $datareserva['megasunset']=false;
      $datareserva['sunsetvip']=false;
      $datareserva['megasbuggies']=true;
      $datareserva['adventurebuggies']=true;
      $datareserva['tituloreservas']="Compre su Combo Ahora ";
      $data['reservas']=$this->load->view('en/front-end/reserva',$datareserva,true); 
      $this->load->view('en/confirmacion_pago',$data);
      $this->load->view('en/front-end/footer');
   

   }

}