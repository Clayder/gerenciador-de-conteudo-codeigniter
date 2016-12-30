<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Posts
                    <a href="<?php echo base_url_admin('post/cadastrar'); ?>" class="btn btn-success btn-lg button-topo">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        Adicionar novo
                    </a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">   
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Status</th>
                            <th>Comentários</th>
                            <th>Data</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Título</th>
                            <th>Status</th>
                            <th>Comentários</th>
                            <th>Data</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        <tr>
                            <td>
                                Post 1
                            </td>
                            <td>Publicado </td>
                            <td><i class="fa fa-comment"></i></td>
                            <td>11/10/2016</td>
                            <td>
                                <a href="<?php echo base_url_admin('post/editar/post-1'); ?>" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php base_url_admin('post/excluir'); ?>" method="POST" onsubmit="return confirm('Você realmente deseja excluír ?')">
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                        <tr>

                            <td>
                                Quem somos
                            </td>
                            <td>Publicado </td>
                            <td>
                                4
                                <i class="fa fa-comment"></i>
                            </td>
                            <td>11/10/2016</td>
                            <td>
                                <a href="<?php echo base_url_admin('post/editar/post-1'); ?>" class="btn btn-info btn-lg">
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
                                Quem somos
                            </td>
                            <td>Publicado </td>
                            <td><i class="fa fa-comment"></i></td>
                            <td>11/10/2016</td>
                            <td>
                                <a href="<?php echo base_url_admin('post/editar/post-1'); ?>" class="btn btn-info btn-lg">
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
                                Quem somos
                            </td>
                            <td>Publicado </td>
                            <td><i class="fa fa-comment"></i></td>
                            <td>11/10/2016</td>
                            <td>
                                <a href="<?php echo base_url_admin('post/editar/post-1'); ?>" class="btn btn-info btn-lg">
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