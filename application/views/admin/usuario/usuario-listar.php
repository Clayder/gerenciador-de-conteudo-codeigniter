<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-users" aria-hidden="true"></i> Usuários
                    <a href="<?php echo base_url_admin('usuario/cadastrar'); ?>" class="btn btn-success btn-lg button-topo">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        Adicionar Novo
                    </a>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">   
                    <thead>
                        <tr>
                            <th>Nome de usuário</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Função</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome de usuário</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Função</th>
                            <th>Visualizar</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                fulano
                            </td>
                            <td>Fulano de Tal</td>
                            <td>fulano@gmail.com</td>
                            <td>Administrador</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <a class='btn btn-primary' href="<?php echo base_url_admin('usuario'); ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php base_url_admin('cms/pagina/excluir'); ?>" method="POST" onsubmit="return confirm('Você realmente deseja excluír ?')">
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><b>Usuário:</b> Fulano 1 </h4>
                    </div>
                    <div class="modal-body" style="padding: 0 40px">
                        <div class="row afastamento">
                             <div class="col-lg-6">
                                <i style="font-size: 90px" class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </div>
                            <div class="col-lg-6">
                                <p><b>Nome:</b> Fulano de Tal </p>
                                <p><b>E-mail:</b> fulano@gmail.com</p>
                                <p><b>Função:</b> Administrador</p>
                            </div>
                           
                        </div>
                        <div class="row">
                            <p>
                                <b>Informações biográficas:</b> 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis finibus massa. Vestibulum sed velit a eros hendrerit rutrum accumsan vel purus. Etiam nibh velit, efficitur ac diam id, bibendum convallis augue. Nunc blandit neque erat, in tincidunt justo suscipit at. Curabitur commodo, nunc venenatis malesuada dignissim, sapien nisl laoreet lectus, id pretium nisi nisl at magna. Ut et magna sapien. Quisque vitae venenatis magna, ac condimentum massa. Cras ac semper leo. Vivamus a arcu nisi. Sed magna elit, posuere eget ornare vitae, bibendum in felis. Phasellus porta, risus vitae sagittis sagittis, nisl massa scelerisque purus, eu tristique magna arcu nec ipsum. Fusce ut rutrum nibh, vel maximus orci.
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->