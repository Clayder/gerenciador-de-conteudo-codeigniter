<div id="page-wrapper" class="conteudo" ng-controller="Produto as produto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i> Adicionar novo produto
                    <?php grupoButtonEditar($id, 'produto', 'Produtos', 'fa-cubes'); ?>
                </h1>
            </div>
        </div>
        <?php echo $this->session->userdata('mensagem') <> '' ? $this->session->userdata('mensagem') : ''; ?>
        <form action="<?php echo base_url_admin('produto/edicao'); ?>" method="POST" class="form-horizontal">
            <?= validation_errors(); ?>
            <input type="hidden" value="{id}" name="id" />
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="titulo" value="{titulo}" class="form-control input-lg" placeholder="Digite o título aqui">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="editor-texto" name="texto">{texto}</textarea>
                        </div>
                    </div>
                    <div class="form-group bloco-conteudo">
                        <label for="inputEmail3" class="control-label">
                            Slug:
                        </label>
                        <span id="helpBlock" class="help-block">
                            O “slug” é uma versão amigável do URL. Normalmente, é todo em minúsculas e contém apenas letras, números e hífens.
                        </span>
                        <input type="text" name="slug" value="{slug}" class="form-control"/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 bloco-conteudo">
                            <h2>
                                Publicar
                                <button class="btn btn-success btn-lg">
                                    <i class="fa fa-floppy-o"  aria-hidden="true"></i> Salvar
                                </button>
                            </h2>
                            <hr>

                            <div class="form-group my-form-group">
                                <label for="inputEmail3" class="control-label">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                    Status:
                                </label>
                                <select name="status" class="form-control">
                                    <option selected="{status}">{status}</option>
                                    <option value="Público">Público</option>
                                    <option value="Privado">Privado</option>
                                </select>
                            </div>
                            <div class="form-group my-form-group">
                                <label for="inputEmail3" class="control-label">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    Categoria:
                                    <button type="button" class="btn btn-success" ng-click="produto.buttonAddCateg()">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Nova categoria
                                    </button>
                                </label>
                                <div class="row afastamento" ng-hide="!produto.exibirCategoria">

                                    <div class="col-xs-10">
                                        <input type="text" class="form-control" ng-model="produto.inputNovaCategoria.nome" ng-init="produto.inputNovaCategoria.nome = ''" placeholder="Nome da categoria">
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-success" ng-click = "produto.submitCadastrarCategoria()">
                                        <i class="fa fa-save" aria-hidden="true"></i>
                                        Salvar
                                    </button>
                                    <button type="button" class="btn btn-danger" ng-click="produto.buttonAddCateg()">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                        Cancelar
                                    </button>

                                </div>
                                <div style="max-height: 100px; overflow-y: auto;">
                                    <div class="checkbox" ng-repeat="categ in produto.categorias">
                                        <label>
                                            <input name="categoria[]" type="checkbox" value="{{categ.id}}" ng-checked="produto.verificaCategoriaChecked(categ.id)"> {{categ.nome}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 bloco-conteudo afastamento">
                            <h2> Imagem destacada </h2>
                            <hr>
                           
                            <div class="row" style="padding: 10px;">
                                <a href="<?php echo base_url("assets/admin/tinymce/filemanager/dialog.php?type=1&field_id=nome_img"); ?>" data-fancybox-type="iframe" class="btn btn-info fancy">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i> Alterar Imagem
                                </a>
                                <a class="btn btn-danger" onclick="clear_img()" style="float: right;">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Remover Imagem
                                </a>
                                <div class="row" style="padding: 10px;">
                                    <img src="{imagem}" class="img-responsive" />
                                 </div>
                                <img src="" alt="" title="" src="" id="prev_img" class="img-responsive" style="margin-top: 10px;"/>
                                <input type="hidden" value="" name="imagem" id="nome_img" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /#page-wrapper -->
<script>
    // recebe as categorias que já foram marcadas
    var categoriasMarcada = <?= json_encode($categorias); ?>
</script>