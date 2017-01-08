<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $empresa['nome']; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/site/css/landing-page.css'); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <h1><?= $empresa['nome']; ?></h1>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-header -->

        <!-- Paginas -->
        <div class="content-section-a">
            <div class="container">
                <?php foreach ($paginas as $pagina): ?>
                    <div class="row">
                        <h1> <?= $pagina->titulo; ?> </h1>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <?= $pagina->texto; ?>
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="<?= $pagina->imagem; ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Produtos -->
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <h1> Produtos </h1>
                    <hr>
                    <?php foreach ($produtos as $produto): ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="<?= $produto->imagem; ?>" alt="...">
                                <div class="caption">
                                    <h3><?= $produto->titulo; ?></h3>
                                    <p><?= $produto->texto; ?></p>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <a name="contato"></a>
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <h1> Contato </h1>
                    <hr>
                    <?= $this->session->userdata('mensagem') <> '' ? $this->session->userdata('mensagem') : ''; ?>
                    <form action="<?= base_url('home/mensagem'); ?>" method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="" id="name" required>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="" id="email" required>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" name="mensagem" class="form-control" placeholder="" id="message" required></textarea>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

    </body>

</html>
