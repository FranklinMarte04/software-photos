     <!-- page content -->

            <div class="right_col" role="main">



                <div class="">

                    <div class="page-title">

                        <div class="title_left">

                            <h3>

                   Detalle de Factura

                  

                </h3>

                        </div>



                    <div class="row">

                        <div class="col-md-12">

                            <div class="x_panel">

                               

                                <div class="x_content">



                                    <section class="content invoice">

                                        <!-- title row -->

                                        <div class="row">

                                            <div class="col-xs-12 invoice-header">

                                                <h1>

                                               <img src="<?php echo base_url(); ?>public/images/logo.png" width="150" height="60" alt="">

               

                                        <small class="pull-right">Codigo Reserva:  <?php echo $fila->numero_reserva; ?></small>

                                    </h1>

                                            </div>

                                            <!-- /.col -->

                                        </div>

                                        <!-- info row -->

                                        <div class="row invoice-info">

                                            <div class="col-sm-4 invoice-col">

                                                From

                                                <address>

                                        <strong>BavaroAdventurePark</strong>

                                        <br>Bulevar turistico del Este km 8,5

                                        <br> Bávaro, La Altagracia, Dominican Republic

                                        <br>Phone: 1 (809) 933-3040

                                        <br>Email:reservas@bavaroadventurepark.com

                                    </address>

                                            </div>

                                            <!-- /.col -->

                                            <div class="col-sm-4 invoice-col">

                                               Vendido A

                                                <address>

                                        <strong><?php echo $fila->nombre; ?> <?php echo $fila->apellido; ?></strong>

                                       <br>Phone: <?php echo $fila->telefono; ?>

                                        <br>Email: <?php echo $fila->email; ?>

                                    </address>

                                            </div>

                                            <!-- /.col -->

                                            <div class="col-sm-4 invoice-col">

                                                <b>Numero ID:</b> <?php echo $fila->itransaction_id; ?>

                                                <br>

                                                <b>Fecha de Pago:</b> <?php echo date('d-m-Y',strtotime($fila->itransaction_date)); ?>

                                                <br>

                                                <b>Cuenta Paypal:</b><?php echo $fila->iemail; ?>

                                            </div>

                                            <!-- /.col -->

                                        </div>

                                        <!-- /.row -->



                                        <!-- Table row -->

                                        <div class="row">

                                            <div class="col-xs-12 table">

                                                <table class="table table-striped">

                                                    <thead>

                                                

                                                       <tr>

                                                            <th>Paquete</th>

                                                            <th style="width: 40%">Descripcion</th>

                                                            <th> Adulto</th>

                                                            <th >Precio</th>

                                                             <th>Niños</th>

                                                            <th >Precio</th>

                                                            <th>Subtotal</th>

                                                        </tr>

                                                

                                                    </thead>

                                                    <tbody>

                                                         <?php foreach($resultado as $row){ ?>

                                                        <tr>

                                                            <td><?php echo $row->paquete; ?></td>

                                                            <td><?php echo $row->descripcion; ?></td>

                                                            <td><?php echo $row->cantidad_adulto; ?></td>

                                                            <td>USD$ <?php echo $row->precio_adulto; ?></td>

                                                            <td><?php echo $row->cantidad_nino; ?></td>

                                                         

                                                            <td>USD$ <?php echo $row->precio_nino; ?></td>

                                                                <td>USD$ <?php echo $row->subtotal; ?></td>

                                                        </tr>

                                                        <?php  } ?>

                                                    </tbody>

                                                </table>

                                            </div>

                                            <!-- /.col -->

                                        </div>

                                        <!-- /.row -->



                                        <div class="row">

                                            <!-- accepted payments column -->

                                            <div class="col-xs-6">

                                                <p class="lead">Forma de Pago:</p>

                                                <img src="<?php echo base_url(); ?>public/images/visa.png" alt="Visa">

                                                <img src="<?php echo base_url(); ?>public/images/mastercard.png" alt="Mastercard">

                                                <img src="<?php echo base_url(); ?>public/images/american-express.png" alt="American Express">

                                                <img src="<?php echo base_url(); ?>public/images/paypal2.png" alt="Paypal">

                               

                                            </div>

                                            <!-- /.col -->

                                            <div class="col-xs-6">



                                                <div class="table-responsive">

                                                    <table class="table">

                                                        <tbody>

                                                            <tr>

                                                                <th style="width:50%">Subtotal:</th>

                                                                <td>USD$ <?php echo $fila->subtotal; ?></td>

                                                            </tr>

                                                            <tr>

                                                                <th>Descuento (10%)</th>

                                                                <td>USD$ <?php echo $fila->descuento_total; ?></td>

                                                            </tr>

                                                         

                                                            <tr>

                                                                <th>Total:</th>

                                                                <td>USD$ <?php echo $fila->monto_total; ?></td>

                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                </div>

                                            </div>

                                            <!-- /.col -->

                                        </div>

                                        <!-- /.row -->



                                        <!-- this row will not appear when printing -->

                                        <div class="row no-print">

                                            <div class="col-xs-12">

                                                <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i>Imprimir</button>

                                                                                       </div>

                                        </div>

                                    </section>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



           



            </div>

            <!-- /page content -->

        </div>