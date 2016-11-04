<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-files-o" aria-hidden="true"></i> Editar categoria
                    <a href="<?php echo base_url_admin('pagina/categorias'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        Categorias
                    </a>
                </h1>
            </div>
        </div>
        <form action="<?php echo base_url_admin('pagina/cadastro'); ?>" method="POST" class="form-horizontal">
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-horizontal">
                        <div class="form-group my-form-group">
                            <label for="inputEmail3" class="control-label">Nome</label>
                            <input type="text" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                        <div class="form-group my-form-group">
                            <label for="inputPassword3" class="control-label">Slug</label>
                            <input type="text" class="form-control" id="inputPassword3" placeholder="">
                            <span id="helpBlock" class="help-block">
                                O “slug” é uma versão amigável do URL. Normalmente, é todo em minúsculas e contém apenas letras, números e hífens.
                            </span>
                        </div>

                        <div class="form-group my-form-group">
                            <label for="inputPassword3" class="control-label">Pai</label>
                            <select class="form-control">
                                <option>Nenhum</option>
                            </select>
                            <span id="helpBlock" class="help-block">
                                As categorias, podem ter uma hierarquia. Você pode ter uma categoria chamada MPB e nela haver categorias para Bossa Nova e Baião. Totalmente opcional.
                            </span>
                        </div>

                        <div class="form-group my-form-group">
                            <label for="inputPassword3" class="control-label">Descrição</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group my-form-group">
                            <button type="submit" class="btn btn-success">Editar categoria</button>
                        </div>
                    </form>
                </div>

            </div>

        </form>
    </div>
</div>
<!-- /#page-wrapper -->