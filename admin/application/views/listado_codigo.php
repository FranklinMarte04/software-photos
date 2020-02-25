

            <!-- page content -->

            <div class="right_col" role="main">

                <div class="">

                    <div class="page-title">

                        <div class="title_left">

                            <h3>

                <?php echo $titulo; ?>

                </h3>

                        </div>





                    <div class="clearfix"></div>



                    <div class="row">



                        <div class="col-md-12 col-sm-12 col-xs-12">

                            <div class="x_panel">

                

                                <div class="x_content">

                                       <div  align="right">

                                   <a target="__back" href="<?php echo base_url(); ?>exportar/<?php echo $pdf; ?>">   <i  class="fa fa-file-pdf-o fa-3x"></i></a>
                                   

                                   </div>

                                    <table id="example" class="table table-striped responsive-utilities jambo_table">

                                        <thead>

                                            <tr class="headings">

                                                <th>

                                                    <input type="checkbox" class="tableflat">

                                                </th>

                                                <th>No Codigo </th>

                                                <th>Codigo</th>

                                                <th>Empresa</th>

                                                 <th>Descuento</th>

                                                <th class=" no-link last"><span class="nobr">Acciones</span>

                                                </th>

                                            </tr>

                                        </thead>



                                        <tbody>

              								<?php if(count($resultado)>0){?>

                                         <?php foreach ($resultado as $row)

{ ?>

                                           <tr class="odd pointer">

                                              <td class="a-center ">

                                                <input type="checkbox" class="tableflat">

                                                </td>

                                                <td class=" "><?php echo $row->idpromocion; ?></td>

                                                <td class=" "><?php echo $row->codigo; ?></td>

                                                <td class=" "><?php echo $row->empresa; ?></td>

                                                <td class=" "><?php echo $row->descuento; ?></td>

                                                <td class=" last">

                                                

                                                <a href="<?php echo base_url(); ?>usuarios/eliminar?id=<?php echo $row->idpromocion; ?>"><i class="fa fa-trash-o fa-2x"> </i></a>

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

                <!-- /page content -->