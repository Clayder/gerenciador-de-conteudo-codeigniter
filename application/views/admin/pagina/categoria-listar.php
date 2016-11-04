<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-files-o" aria-hidden="true"></i> Categorias
                    <a href="<?php echo base_url_admin('pagina'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        Páginas
                    </a>
                </h1>
            </div>
        </div>
        <div class="row bloco">
            <div class="col-lg-5 bloco-conteudo">
                <h3> Adicionar nova categoria </h3>
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
                        <button type="submit" class="btn btn-success">Adicionar nova categoria</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-7">
                <table class="table table-striped">   
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                Serviços
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('pagina/categoria/servicos'); ?>" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php base_url_admin('cms/pagina/excluir'); ?>" method="POST" onsubmit="return confirm('Você realmente deseja excluír ?')">
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Projetos
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('pagina/categoria/projetos'); ?>" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php base_url_admin('cms/pagina/excluir'); ?>" method="POST" onsubmit="return confirm('Você realmente deseja excluír ?')">
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        <tr>

                            <td>
                                Categoria 2
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('pagina/categoria/categoria-2'); ?>" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php base_url_admin('cms/pagina/excluir'); ?>" method="POST" onsubmit="return confirm('Você realmente deseja excluír ?')">
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        <tr>

                            <td>
                                Categoria 3
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('pagina/categoria/categoria-3'); ?>" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php base_url_admin('cms/pagina/excluir'); ?>" method="POST" onsubmit="return confirm('Você realmente deseja excluír ?')">
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->