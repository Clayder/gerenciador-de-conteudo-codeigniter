<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-university" aria-hidden="true"></i> A empresa
                </h1>
            </div>
        </div>
        <?php echo $this->session->userdata('mensagem') <> '' ? $this->session->userdata('mensagem') : ''; ?>
        <form action="<?= base_url_admin('empresa/editar'); ?>" method="POST" class="form-horizontal">
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="row bloco-conteudo">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='nome' value="{nome}"  placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Cep:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='cep' value="{cep}" id="cep" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Estado:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='estado' value="{estado}" id="uf" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Cidade:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='cidade' value="{cidade}" id="cidade" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Bairro:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='bairro' value="{bairro}" id="bairro" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Rua:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='rua' value="{rua}" id="rua" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Complemento:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='complemento' value="{complemento}" id="complemento" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 bloco-conteudo">
                            <h2>
                                <button class="btn btn-success btn-lg">
                                    <i class="fa fa-save"  aria-hidden="true"></i> Salvar
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- /#page-wrapper -->