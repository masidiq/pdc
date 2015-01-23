<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="<?php echo(asset_url()) ?>favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link href="<?php echo(asset_url()) ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo(asset_url()) ?>css/style.css" rel="stylesheet">

        <script src="<?php echo(asset_url()) ?>js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo(asset_url()) ?>js/bootstrap.min.js"></script>

        
        <title>PDC <?php if (isset($title)) {
            echo "- ". $title;
        }?></title>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#/">PDC</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url() ?>master_data/instruktur">Instruktur</a></li>
                        <li><a href="">Peserta</a></li>
                        <li><a href="<?php echo base_url() ?>master_data/klasifikasi">Klasifikasi</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- Content -->
        <div class="container theme-showcase" role="main">
            <?php $this->load->view($view); ?>
        </div>


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <p class="text-muted">&copy; 2015</p>
            </div>
        </div>
    </body>
</html>