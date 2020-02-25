<!-- page content -->
<div class="right_col" role="main">

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    Agregar Codigos de Descuento
                </h3>
            </div>


        </div>
        <div class="clearfix"></div>


        <div class="x_panel">

            <div class="x_content">
            
               <form action="<?php echo base_url(); ?>codigo_descuento/registrar_codigo" method="post" class="form-horizontal form-label-left" novalidate>

                                     

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre Empresa<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="nombre_empresa" placeholder="Nombre Empresa" required="required" type="text">
                                            </div>
                                        </div>
                          <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Codigo Descuento<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" name="codigo_descuento" placeholder="Codigo Descuento" required="required" type="text">
                                            </div>
                                        </div>
                    <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Descuento<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="2"  name="descuento" placeholder="Descuento" required="required" type="text">
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
