<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BAVARO ADVENTURE PARK</title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo base_url(); ?>public/back-end/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>public/back-end/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/back-end/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url(); ?>public/back-end/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/back-end/css/icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo base_url(); ?>public/back-end/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
            
                   <form action="<?php echo base_url();?>login/logearse" method="post">
                     <img src="<?php echo base_url(); ?>public/images/logo_bv.png" width="252" height="163" alt="">
                     <br> 
                       <br>
                     <div>
                           <input type="text" class="form-control" placeholder="Username" name="username" required="" />
                        </div>
                     <br>
                        <div>
                           <input type="password" class="form-control" placeholder="Password" name="password" required="" />
                        </div>
                          		<?php if($error != ""){ ?>
                <div style="color:red" >
                        <?php echo $this->session->flashdata('error');?></div>
                                <?php } ?>
                        <div>
                           <br>
                           <input name="login" type="submit" class="btn btn-default submit"  value="Entrar" >
                            
                        </div>
                     
                        <div class="clearfix"></div>
                     

                      
                            <div class="clearfix"></div>
                            <br />
                            <div>
                           

                                <p>©2015 All Rights Reserved. Bavaro Adventure Park. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
              
                <!-- content -->
            </div>
        
        </div>
    </div>

</body>

</html>