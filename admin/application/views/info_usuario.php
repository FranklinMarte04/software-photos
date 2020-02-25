<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                   Informacion de Usuarios
                </h3>
            </div>


        </div>
        <div class="clearfix"></div>


        <div class="x_panel">

            <div class="x_content">
            
               <form action="<?php echo base_url();?>usuarios/registrar_usuario" method="post" class="form-horizontal form-label-left" novalidate>

                                     

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="name">Nombre Completo<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <input id="name" class="form-control col-md-7 col-xs-12" readonly="true" value="<?php echo $fila->nombre; ?>" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="Nombre Apellido" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" value="<?php echo $fila->email; ?>" readonly="true" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                    
                                      
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" readonly="true" for="occupation">Cargo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="occupation" type="text" name="cargo" value="<?php echo $fila->cargo; ?>" readonly="true" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                           <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Usuario <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="username" type="text" name="username" value="<?php echo $fila->username; ?>" readonly="true" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                  
                  
                       <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Tipo Usuario <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select  id="select" type="text"  name="tipo_usuario" class="optional form-control col-md-7 col-xs-12">
                                                 <option  value=""><?php echo $fila->tipo_usuario; ?></option>
                                                 
                                                  
                                               </select>
                                            </div>
                                        </div>
                  
                  
                                       
                                      
                                   
                                     
                                    </form>

 </div>
                
        </div>
    </div>
</div>
