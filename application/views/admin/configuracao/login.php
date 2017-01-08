<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Pimpolho</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/admin/css/sb-admin.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/css/my-style.css'); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">

                        <div class="my-panel-heading">
                            <img class="img-responsive" src="" />
                            <?php if (isset($erroLogin)): ?>
                                <?php echo $erroLogin; ?>
                            <?php endif; ?>
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo base_url_admin('login/validar/') ?>" method="POST">
                                <fieldset>
                                    <div class="row" style="margin-bottom: 20px;">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                    <input class="form-control" placeholder="" name="email" type="text" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 20px;">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                                    <input class="form-control" placeholder="" name="senha" type="password" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 20px">
                                        <!-- Change this to a button or input when using this as a form -->
                                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Login"/>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

    </body>

</html>
