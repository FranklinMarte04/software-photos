<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Agregar usuarios
                </h3>
            </div>


        </div>
        <div class="clearfix"></div>


        <div class="x_panel">

            <div class="x_content">
            
               <form action="<?php echo base_url();?>usuarios/registrar_usuario" method="post" class="form-horizontal form-label-left" novalidate>

                                     

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre Completo<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="Nombre Apellido" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirmar Email <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                      
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Cargo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="occupation" type="text" name="cargo" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                           <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Usuario <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="username" type="text" name="username" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                  
                  
                       <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Tipo Usuario <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="select" type="text" name="tipo_usuario" class="optional form-control col-md-7 col-xs-12">
                                                 <option value="">Seleccione Tipo de Usuario</option>
                                                  <option value="Administrador">Administrador</option>
                                                  <option value="Usuario">Usuario</option>
                                                  
                                               </select>
                                            </div>
                                        </div>
                  
                  
                                       
                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Contraseña</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="password" name="password"  data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repetir Contraseña</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                            </div>
                                        </div>
                                   
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                               <button type="reset" class="btn btn-primary">Cancelar</button>
                                                <button id="send" type="submit" class="btn btn-success">Guardar</button>
                                            </div>
                                        </div>
                                    </form>

 </div>
                
        </div>
    </div>
</div>
