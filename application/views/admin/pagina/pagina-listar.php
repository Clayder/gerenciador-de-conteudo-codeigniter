<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-files-o" aria-hidden="true"></i> Páginas
                    <a href="<?php echo base_url_admin('pagina/cadastrar'); ?>" class="btn btn-success btn-lg button-topo">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        Adicionar Nova
                    </a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">   
                    <thead>
                        <tr>
                            <td><input type="checkbox" class="check-all" /></td>
                            <th>Título</th>
                            <th>Status</th>
                            <th>Data</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td><input type="checkbox" class="check-all" /></td>
                            <th>Título</th>
                            <th>Status</th>
                            <th>Data</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="select-table"/></td>
                            <td>
                                <a class="" href="<?php echo base_url_admin('quem_somos');?>">
                                Quem somos
                                </a>
                            </td>
                            <td>Publicado </td>
                            <td>11/10/2016</td>
                            <td>
                                <button type="button" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
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