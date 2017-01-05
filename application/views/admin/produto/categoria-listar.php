<div id="page-wrapper" class="conteudo" ng-controller="CategoriaProduto as categoria">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-cubes" aria-hidden="true"></i> Categorias
                    <a href="<?php echo base_url_admin('produto'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                        Produtos
                    </a>
                </h1>
            </div>
        </div>
        <div class="row bloco">
            <div class="col-lg-5 bloco-conteudo">
                <h3> Adicionar nova categoria </h3>
                <form class="form-horizontal" ng-submit="categoria.submitCadastrar()" name="formAddCategoria">
                    <div class="form-group my-form-group">
                        <label for="inputEmail3" class="control-label">Nome</label>
                        <input type="text" class="form-control" name="nome" ng-model="categoria.dados.nome" required>
                    </div>
                    <div class="form-group my-form-group">
                        <label for="inputPassword3" class="control-label">Slug</label>
                        <input type="text" class="form-control" name="slug" ng-model="categoria.dados.slug">
                        <span id="helpBlock" class="help-block">
                            O “slug” é uma versão amigável do URL. Normalmente, é todo em minúsculas e contém apenas letras, números e hífens.
                        </span>
                    </div>

                    <div class="form-group my-form-group">
                        <label for="inputPassword3" class="control-label">Pai</label>
                        <select class="form-control" name="pai" ng-model="categoria.dados.pai" ng-init="categoria.dados.pai = ''">
                            <option value="">Nenhum</option>
                            <option ng-repeat="categ in categoria.categorias" value="{{categ.id}}">{{categ.nome}}</option>
                        </select>
                        <span id="helpBlock" class="help-block">
                            As categorias, podem ter uma hierarquia. Você pode ter uma categoria chamada MPB e nela haver categorias para Bossa Nova e Baião. Totalmente opcional.
                        </span>
                    </div>

                    <div class="form-group my-form-group">
                        <label for="inputPassword3" class="control-label">Descrição</label>
                        <textarea class="form-control" rows="3" ng-model="categoria.dados.descricao"></textarea>
                    </div>

                    <div class="form-group my-form-group">
                        <button type="submit" class="btn btn-success" ng-init="categoria.buttonCadastrar = 'Adicionar nova categoria'" ng-disabled="formAddCategoria.$invalid">
                            {{categoria.buttonCadastrar}}
                        </button>
                    </div>
                </form>
                <div class="alert alert-dismissible fade in" role="alert" ng-class="categoria.classMensageForm" ng-hide="!categoria.mensagemForm"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span></button> 
                    {{categoria.mensagemForm}}
                </div>
            </div>
            <div class="col-lg-7">
                <div class="alert alert-dismissible fade in" role="alert" ng-class="categoria.classMensage" ng-hide="!categoria.mensagem"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span></button> 
                    {{categoria.mensagem}}
                </div>
                <div class="iconInput" style="margin-bottom: 20px;">
                    <i style="font-size: 20px;" class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" class="form-control input-lg" placeholder="Pesquisar categoria" ng-model="pesquisarCategoria"/>
                </div>
                <table class="table table-striped" ng-click = "categoria.listarCategorias()">
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
                        <tr ng-repeat="categ in categoria.categorias| filter:pesquisarCategoria " >
                            <td>
                                {{categ.nome}}
                            </td>
                            <td>
                                <a href="{linkCategoria}{{categ.id}}" class="btn btn-info btn-lg">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>


                                <button type="button" class="btn btn-danger btn-lg" ng-click="categoria.deletarCategoria(categ.id, $index)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->