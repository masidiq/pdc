<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         
        <title>PDC<?php if (isset($title)) {
            echo " | ". $title;
        }?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo(asset_url()) ?>favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="<?php echo(asset_url()) ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo(asset_url()) ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo(asset_url()) ?>css/ionicons/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo(asset_url()) ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue fixed">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('/_shared/header'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php $this->load->view('/_shared/sidebar'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php if (isset($title)) {
                                echo $title;
                                }else {
                                    echo "-";
                                }
                        ?>
                     <!-- <small>Edit</small> -->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
             
                    <?php $this->load->view($view); ?>
               
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="<?php echo(asset_url()) ?>js/jquery-2.1.3.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo(asset_url()) ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo(asset_url()) ?>js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>



            <script>

$( document ).ready(function() {
    console.log( "ready!" );
// Will only work if string in href matches with location
$('li a[href="'+ window.location +'"]').parent().addClass('active');


});


</script>