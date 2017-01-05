<div id="page-wrapper" class="conteudo" ng-controller="CategoriaProduto as categoria">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-cube" aria-hidden="true"></i> Editar categoria
                    <a href="<?php echo base_url_admin('produto/categorias'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-cubes" aria-hidden="true"></i>
                        Categorias
                    </a>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" name="categoriaEditar" name="categoriaEditar" ng-submit="categoria.submitEditar()">
                    <input type="hidden" value="" name="id" ng-model="categoria.dados.id" ng-init="categoria.dados.id    =    '{id}'"/>
                    <div class="form-group my-form-group">
                        <label for="inputEmail3" class="control-label">Nome</label>
                        <input type="text" class="form-control" ng-model="categoria.dados.nome" ng-init="categoria.dados.nome    =    '{nome}'" id="inputEmail3" name="nome" value="" required>
                    </div>
                    <div class="form-group my-form-group">
                        <label for="inputPassword3" class="control-label">Slug</label>
                        <input type="text" class="form-control" ng-model="categoria.dados.slug" ng-init="categoria.dados.slug    =    '{slug}'"id="inputPassword3" name="slug" value="">
                        <span id="helpBlock" class="help-block">
                            O “slug” é uma versão amigável do URL. Normalmente, é todo em minúsculas e contém apenas letras, números e hífens.
                        </span>
                    </div>

                    <div class="form-group my-form-group">
                        <label for="inputPassword3" class="control-label">Pai</label>
                        <select class="form-control" name="pai" ng-model="categoria.dados.pai" ng-init="categoria.dados.pai    =    '{idPai}'">
                            {categorias}
                            <option value="{id}">{nome}</option>
                            {/categorias}
                            <option value="0">Nenhum</option>
                        </select>
                        <span id="helpBlock" class="help-block">
                            As categorias, podem ter uma hierarquia. Você pode ter uma categoria chamada MPB e nela haver categorias para Bossa Nova e Baião. Totalmente opcional.
                        </span>
                    </div>

                    <div class="form-group my-form-group">
                        <label for="inputPassword3" class="control-label">Descrição</label>
                        <textarea class="form-control" rows="3" name="descricao" ng-model="categoria.dados.descricao" ng-init="categoria.dados.descricao    =    '{descricao}'">
                                {descricao}
                        </textarea>
                    </div>

                    <div class="form-group my-form-group">
                        <button type="submit" class="btn btn-success" ng-init="categoria.buttonEditar = 'Editar categoria'" ng-disabled="categoriaEditar.$invalid">{{categoria.buttonEditar}}</button>
                    </div>
                </form>
                <div class="alert alert-dismissible fade in" role="alert" ng-class="categoria.classMensageForm" ng-hide="!categoria.mensagemForm"> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span></button> 
                    {{categoria.mensagemForm}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->