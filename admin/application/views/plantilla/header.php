<!DOCTYPE html>

<html lang="en">



<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Bavaro Adventure Park</title>



    <!-- Bootstrap core CSS -->



    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">



    <link href="<?php echo base_url(); ?>public/fonts/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">



    <!-- Custom styling plus plugins -->

    <link href="<?php echo base_url(); ?>public/css/custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/maps/jquery-jvectormap-2.0.1.css" />

    <link href="<?php echo base_url(); ?>public/css/icheck/flat/green.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>public/css/floatexamples.css" rel="stylesheet" type="text/css" />



    <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>public/js/nprogress.js"></script>

    <script>

        NProgress.start();

    </script>

    

    <!--[if lt IE 9]>

        <script src="../assets/js/ie8-responsive-file-warning.js"></script>

        <![endif]-->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->



    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>



    <!-- gauge js -->

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/gauge/gauge.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/gauge/gauge_demo.js"></script>

    <!-- chart js -->

    <script src="<?php echo base_url(); ?>public/js/chartjs/chart.min.js"></script>



    <!-- bootstrap progress js -->

    <script src="<?php echo base_url(); ?>public/js/progressbar/bootstrap-progressbar.min.js"></script>

    <script src="<?php echo base_url(); ?>public/js/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- icheck -->

    <script src="<?php echo base_url(); ?>public/js/icheck/icheck.min.js"></script>

    <!-- daterangepicker -->

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/moment.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/datepicker/daterangepicker.js"></script>



    <script src="<?php echo base_url(); ?>public/js/custom.js"></script>



    <!-- flot js -->

    <!--[if lte IE 8]><script type="text/javascript" src="<?php echo base_url(); ?>public/js/excanvas.min.js"></script><![endif]-->

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.pie.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.orderBars.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.time.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/date.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.spline.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.stack.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/curvedLines.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/flot/jquery.flot.resize.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/maps/jquery-jvectormap-2.0.1.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/maps/gdp-data.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/maps/jquery-jvectormap-world-mill-en.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>public/js/maps/jquery-jvectormap-us-aea-en.js"></script>

    

    <script>

        $(function () {

            $('#world-map-gdp').vectorMap({

                map: 'world_mill_en',

                backgroundColor: 'transparent',

                zoomOnScroll: false,

                series: {

                    regions: [{

                        values: gdpData,

                        scale: ['#E6F2F0', '#149B7E'],

                        normalizeFunction: 'polynomial'

                    }]

                },

                onRegionTipShow: function (e, el, code) {

                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');

                }

            });

        });

    </script>

    <!-- skycons -->

    <script src="<?php echo base_url(); ?>public/js/skycons/skycons.js"></script>

    <script>

        var icons = new Skycons({

                "color": "#73879C"

            }),

            list = [

                "clear-day", "clear-night", "partly-cloudy-day",

                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",

                "fog"

            ],

            i;



        for (i = list.length; i--;)

            icons.set(list[i], list[i]);



        icons.play();

    </script>



    <!-- dashbord linegraph -->

    <script>

        var doughnutData = [

            {

                value: 30,

                color: "#455C73"

            },

            {

                value: 30,

                color: "#9B59B6"

            },

            {

                value: 60,

                color: "#BDC3C7"

            },

            {

                value: 100,

                color: "#26B99A"

            },

            {

                value: 120,

                color: "#3498DB"

            }

        ];

        var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);

    </script>

    <!-- /dashbord linegraph -->

    <!-- form validation -->

    <script src="<?php echo base_url(); ?>public/js/validator/validator.js"></script>

    <script>

        // initialize the validator function

        validator.message['date'] = 'not a real date';



        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':

        $('form')

            .on('blur', 'input[required], input.optional, select.required', validator.checkField)

            .on('change', 'select.required', validator.checkField)

            .on('keypress', 'input[required][pattern]', validator.keypress);



        $('.multi.required')

            .on('keyup blur', 'input', function () {

                validator.checkField.apply($(this).siblings().last()[0]);

            });



        // bind the validation to the form submit event

        //$('#send').click('submit');//.prop('disabled', true);



        $('form').submit(function (e) {

            e.preventDefault();

            var submit = true;

            // evaluate the form using generic validaing

            if (!validator.checkAll($(this))) {

                submit = false;

            }



            if (submit)

                this.submit();

            return false;

        });



        /* FOR DEMO ONLY */

        $('#vfields').change(function () {

            $('form').toggleClass('mode2');

        }).prop('checked', false);



        $('#alerts').change(function () {

            validator.defaults.alerts = (this.checked) ? false : true;

            if (this.checked)

                $('form .alert').remove();

        }).prop('checked', false);

    </script>

    <!-- Datatables -->

    <script src="<?php echo base_url(); ?>public/js/datatables/js/jquery.dataTables.js"></script>

    <script src="<?php echo base_url(); ?>public/js/datatables/tools/js/dataTables.tableTools.js"></script>

    <script>

        $(document).ready(function () {

            $('input.tableflat').iCheck({

                checkboxClass: 'icheckbox_flat-green',

                radioClass: 'iradio_flat-green'

            });

        });



        var asInitVals = new Array();

        $(document).ready(function () {

            var oTable = $('#example').dataTable({

                "oLanguage": {

                    "sSearch": "Buscar:",
                                    },
                  "aaSorting": [[ 0, "desc" ]],                   
                

                "sPaginationType": "full_numbers",

                "dom": 'T<"clear">lfrtip',

                "tableTools": {

                    "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"

                }

            });

            $("tfoot input").keyup(function () {

                /* Filter on the column based on the index of this element's parent <th> */

                oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));

            });

            $("tfoot input").each(function (i) {

                asInitVals[i] = this.value;

            });

            $("tfoot input").focus(function () {

                if (this.className == "search_init") {

                    this.className = "";

                    this.value = "";

                }

            });

            $("tfoot input").blur(function (i) {

                if (this.value == "") {

                    this.className = "search_init";

                    this.value = asInitVals[$("tfoot input").index(this)];

                }

            });

        });

    </script>









    <!-- datepicker -->

    <script type="text/javascript">

        $(document).ready(function () {



            var cb = function (start, end, label) {

                console.log(start.toISOString(), end.toISOString(), label);

                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");

            }



            var optionSet1 = {

                startDate: moment().subtract(29, 'days'),

                endDate: moment(),

                minDate: '01/01/2012',

                maxDate: '12/31/2015',

                dateLimit: {

                    days: 60

                },

                showDropdowns: true,

                showWeekNumbers: true,

                timePicker: false,

                timePickerIncrement: 1,

                timePicker12Hour: true,

                ranges: {

                    'Today': [moment(), moment()],

                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],

                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],

                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],

                    'This Month': [moment().startOf('month'), moment().endOf('month')],

                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]

                },

                opens: 'left',

                buttonClasses: ['btn btn-default'],

                applyClass: 'btn-small btn-primary',

                cancelClass: 'btn-small',

                format: 'MM/DD/YYYY',

                separator: ' to ',

                locale: {

                    applyLabel: 'Submit',

                    cancelLabel: 'Clear',

                    fromLabel: 'From',

                    toLabel: 'To',

                    customRangeLabel: 'Custom',

                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],

                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],

                    firstDay: 1

                }

            };

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker(optionSet1, cb);

            $('#reportrange').on('show.daterangepicker', function () {

                console.log("show event fired");

            });

            $('#reportrange').on('hide.daterangepicker', function () {

                console.log("hide event fired");

            });

            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {

                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));

            });

            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {

                console.log("cancel event fired");

            });

            $('#options1').click(function () {

                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);

            });

            $('#options2').click(function () {

                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);

            });

            $('#destroy').click(function () {

                $('#reportrange').data('daterangepicker').remove();

            });

        });

    </script>



    <script>

        NProgress.done();

    </script>

    <script type="text/javascript">

        function goBack() {

            window.history.back();

        }

    </script>



</head>

<body class="nav-md">



    <div class="container body">





        <div class="main_container">



            <div class="col-md-3 left_col">

                <div class="left_col scroll-view">



                    <div class="navbar nav_title" style="border: 0;">

                

                        <img  width="75%" src="<?php echo base_url(); ?>/public/images/logo.png">

                    </div>

                    <div class="clearfix"></div>



                    <!-- menu prile quick info -->

                    <div class="profile">

                        <div class="profile_pic">

                            <img src="<?php echo base_url(); ?>public/images/user.png" alt="..." class="img-circle profile_img">

                        </div>

                        <div class="profile_info">

                            <span>Bienvenido (A),</span>

                         <h2><?php echo $this->session->userdata('user')["nombre"];?></h2>

                        </div>

                    </div>

                    <!-- /menu prile quick info -->



