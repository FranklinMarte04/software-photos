<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
   <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
         <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>         </li>
         <li>
            <a><i class="fa fa-edit"></i> Paquetes Atracciones <span class="fa fa-chevron-down"></span></a>            
            <ul class="nav child_menu" style="display: none">
               <li><a href="<?php echo base_url(); ?>reservas/realizada">Pagadas</a>               </li>
               <li><a href="<?php echo base_url(); ?>reservas/pendientes">Pendientes de Pago</a> </li>               
               </li>            
            </ul>
         </li>
         <li>
            <a><i class="fa fa-edit"></i> Paquetes Fotos <span class="fa fa-chevron-down"></span></a>            
            <ul class="nav child_menu" style="display: none">               
               <li><a href="<?php echo base_url(); ?>reservas/photos">Pagados</a>                </li>
               <li><a href="<?php echo base_url(); ?>reservas/photospendientes">Pendientes de Pago</a> </li>
               </li>            
            </ul>
         </li>
         <?php if($this->session->userdata('user')["tipo_usuario"]=="Administrador"){ ?>         
         <li>
            <a><i class="fa fa-desktop"></i>Usuarios<span class="fa fa-chevron-down"></span></a>            
            <ul class="nav child_menu" style="display: none">
               <li><a href="<?php echo base_url(); ?>usuarios/listado">Listado</a>               </li>
               <li><a href="<?php echo base_url(); ?>usuarios/agregar">Agregar</a>               </li>
            </ul>
         </li>
         <?php } ?><?php if($this->session->userdata('user')["tipo_usuario"]=="Administrador"){ ?>         
         <li>
            <a><i class="fa fa-table"></i>Codigo Descuento<span class="fa fa-chevron-down"></span></a>            
            <ul class="nav child_menu" style="display: none">
               <li><a href="<?php echo base_url();?>reservas/listado">Listado</a>               </li>
               <li><a href="<?php echo base_url();?>reservas/agregar">Agregar</a>               </li>
            </ul>
         </li>
         <?php } ?>         
         <li>
            <a><i class="fa fa-table"></i> Reportes<span class="fa fa-chevron-down"></span></a>            
            <ul class="nav child_menu" style="display: none">
               <li><a href="<?php echo base_url(); ?>reservas/reportes">Reservas</a>               </li>
               <li><a href="<?php echo base_url(); ?>reservas/reportesfotos">Fotos</a>               </li>
            </ul>
         </li>
         
      </ul>
   </div>
</div>
<!-- /sidebar menu --><!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">   <a data-toggle="tooltip" data-placement="top" title="Settings">      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>   </a>   <a data-toggle="tooltip" data-placement="top" title="FullScreen">      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>   </a>   <a data-toggle="tooltip" data-placement="top" title="Lock">      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>   </a>   <a href="<?php echo base_url(); ?>login/salir" data-toggle="tooltip" data-placement="top" title="Logout">      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>   </a></div>
<!-- /menu footer buttons --></div></div><!-- top navigation -->
<div class="top_nav">
   <div class="nav_menu">
      <nav class="" role="navigation">
         <div class="nav toggle">            <a id="menu_toggle"><i class="fa fa-bars"></i></a>         </div>
         <ul class="nav navbar-nav navbar-right">
            <li class="">
               <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                  <img src="<?php echo base_url(); ?>public/images/user.png" alt=""><?php echo $this->session->userdata('perfil')["nombre"];?>                  <span class=" fa fa-angle-down"></span>               </a>               
               <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">Perfil</a>                  </li>
                  <li><a href="<?php echo base_url(); ?>welcome/salir"><i class="fa fa-sign-out pull-right"></i>Salir</a>                  </li>
               </ul>
            </li>
         </ul>
      </nav>
   </div>
</div>
