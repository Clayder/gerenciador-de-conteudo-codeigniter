<div id="page-wrapper" style="min-height: 580px">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    Painel
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{qtdMensagens}</div>
                                <div>Mensagens</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url_admin('comentario'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{qtdUsuarios}</div>
                                <div>Usuários</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url_admin('usuario'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-files-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{qtdPaginas}</div>
                                <div>Páginas</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url_admin('pagina'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cubes fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">{qtdProdutos}</div>
                                <div>Produtos</div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url_admin('produto'); ?>">
                        <div class="panel-footer">
                            <span class="pull-left">Ver detalhes</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

