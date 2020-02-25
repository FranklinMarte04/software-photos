

<!-- page content -->

<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

            <div class="title_left">

                <h3>

                    <?php echo $titulo; ?>

                </h3>

            </div>



            <div class="title_right">



            </div>

        </div>

        <div class="clearfix"></div>



        <div class="row">



            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">



                    <div class="x_content">

                        <div  align="right">

                            <a target="__back" href="<?php echo base_url(); ?>exportar/<?php echo $pdf; ?>">   <i  class="fa fa-file-pdf-o fa-3x"></i></a>

                            <a  href="<?php echo base_url(); ?>exportar/<?php echo $excel; ?>">     <i class="fa fa-file-excel-o fa-3x"></i>

                            </a>

                        </div>

                        <table id="example" class="table table-striped responsive-utilities jambo_table"></a>

                            <thead>

                            <tr class="headings">



                                <th>No</th>
                                                <th>Cliente</th>
                                                <th>E-mail</th>
                                                <th>Fecha Transacción</th>
                                                <th>Descripcion</th>
                                                <th>Total</th>
                                                <th>Descripción</th>

                                <th class=" no-link last"><span class="nobr">Acciones</span>

                                </th>

                            </tr>

                            </thead>



                            <tbody>

                            <?php if(count($resultado)>0){?>

                                <?php foreach ($resultado as $row)

                                { ?>

                                    <tr class="odd pointer">



                                        <td class=" "><?php echo $row->codigo_cliente; ?></td>
                                               <td class=" "><?php echo $row->nombre." ".$row->apellido; ?></td>
                                               <td class=" "><?php echo $row->email; ?></td>
                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->fecha_compra)); ?></td>
                                               <td class=" "><?php echo date('d-m-Y',strtotime($row->descripcion)); ?></td>
                                               <td class="a-right a-right "><?php echo $row->monto_total; ?></td>
                                               <td class="a-right a-right "><?php echo $row->descripcion; ?></td>

                                        <td class=" last">

                                            <a href="<?php echo base_url(); ?>reservas/infof?id=<?php echo $row->codigo_cliente; ?>"><i class="fa fa-info-circle fa-2x"></i></a>

                                            <a href="<?php echo base_url(); ?>reservas/detalle_factura?id=<?php echo $row->codigo_cliente; ?>&&estado=VERIFICADO"><i class="fa fa-file-text-o fa-2x"></i> </a>

                                            <a href="#"><i class="fa fa-trash-o fa-2x"> </i></a>





                                        </td>

                                    </tr>

                                <?php } } ?>

                            </tbody>



                        </table>

                    </div>

                </div>

            </div>



            <br />

            <br />

            <br />



        </div>

    </div>



</div>

<!-- /page content -->`