<!-- page content --><div class="right_col" role="main">    <div class="">        <div class="page-title">            <div class="title_left">                <h3>                    <?php echo $titulo; ?>                </h3>            </div>        </div>        <div class="clearfix"></div>        <div class="row">            <div class="col-md-12 col-sm-12 col-xs-12">                <div class="x_panel"><div class="row">   <form action="" method="get">    <div class="col-md-2">        <div class="form-group">            <label>Tipo Reservas:</label>            <select name="tipo_reservas" class=" form-control ">            <option value="Pagada">Reservas Pagadas</option>            <option value="noPagada">Reservas No Pagadas</option>            <option value="llegada">Llegada Reservas</option>                        </select>        </div>    </div>    <div class="col-md-2">        <div class="form-group">            <label>Fecha Desde:</label>            <input type="date" name="desde" class=" form-control " placeholder="Usuario">        </div>    </div>    <div class="col-md-2">        <div class="form-group">            <label>Fecha Hasta:</label>            <input type="date" name="hasta" class=" form-control " placeholder="Usuario">        </div>    </div>        <div class="col-md-4">        <br>        <input type="submit" value="Buscar" class="btn btn-primary">    </div>   </form></div> <?php if ($_GET){ ?>                    <div class="x_content">                        <div  align="right">                            <a target="__back" href="<?php echo base_url(); ?>exportar/<?php echo $pdf; ?>?tipo_reservas=<?php echo $this->input->get("tipo_reservas"); ?>&desde=<?php echo $this->input->get("desde"); ?>&hasta=<?php echo $this->input->get("hasta"); ?>">   <i  class="fa fa-file-pdf-o fa-3x"></i></a>                                                        <a target="__back" href="<?php echo base_url(); ?>exportar/<?php echo $excel; ?>?tipo_reservas=<?php echo $this->input->get("tipo_reservas"); ?>&desde=<?php echo $this->input->get("desde"); ?>&hasta=<?php echo $this->input->get("hasta"); ?>"> <i class="fa fa-file-excel-o fa-3x"></i> </a>                                                                                </div>                        <table id="example" class="table table-striped responsive-utilities jambo_table">                            <thead>                                            <tr class="headings">                                                <th>No</th>                                                <th>Cliente</th>                                                <th>Paquete</th>                                                <th>Fecha Reserva</th>                                                <th>Fecha Llegada</th>                                                <th>E-mail</th>                                                                                               <th>Adultos</th>                                                <th>Ni&ntilde;os</th>                                                                                          <th>Total</th>                                                <th style="display:none;">Habitacion</th>                                                <th style="display:none;">Hotel</th>                                                <th class=" no-link last"><span class="nobr">Acciones</span>                                                </th>                                            </tr>                                        </thead>                                        <tbody>                                            <?php if(count($resultado)>0){?>                                         <?php foreach ($resultado as $row){ ?>                                           <tr class="odd pointer">                                               <td class=" "><?php echo $row->codigo_cliente; ?></td>                                                                                              <td class=" "><?php echo $row->nombre." ".$row->apellido; ?></td>                                               <td class=" "><?php echo $row->paquete; ?></td>                                                                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->fecha_compra)); ?></td>                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->fecha_reserva)); ?></td>                                               <td class=" "><?php echo $row->email; ?></td>                                               <td class=" "><?php echo $row->cantidad_adulto; ?></td>                                               <td class=" "><?php echo $row->cantidad_nino; ?></td>                                               <td class="a-right a-right "><?php echo $row->monto_total; ?></td>                                               <td class=" " style="display:none;"><?php echo $row->habitacion; ?></td>                                               <td class=" " style="display:none;"><?php echo $row->hotel; ?></td>                                               <td class=" last">                                                     <a href="<?php echo base_url(); ?>reservas/info?id=<?php echo $row->codigo_cliente; ?>"><i class="fa fa-info-circle fa-2x"></i></a>                                                      <a href="<?php echo base_url(); ?>reservas/detalle_factura?id=<?php echo $row->codigo_cliente; ?>&&estado=VERIFICADO"><i class="fa fa-file-text-o fa-2x"></i> </a>                                                      <!--<a href="<?php echo base_url(); ?>reservas/eliminar?id=<?php echo $row->codigo_cliente; ?>" onclick="return eliminar(true)" ><i class="fa fa-trash-o fa-2x"> </i></a>                                                               -->                                                </td>                                            </tr>                                    <?php } } ?>                                        </tbody>                                    </table>                        </table>                    </div>                    <?php } ?>                </div>            </div>            <br />            <br />            <br />        </div>    </div></div><!-- /page content -->