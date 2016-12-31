<div id="page-wrapper" class="conteudo" ng-controller="Pagina as pagina">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i> Adicionar nova página
                    <a href="<?php echo base_url_admin('pagina'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        Páginas
                    </a>
                </h1>
            </div>
        </div>
        <form action="<?php echo base_url_admin('pagina/cadastro'); ?>" method="POST" class="form-horizontal">
            <?= validation_errors(); ?>
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="titulo" value="" class="form-control input-lg" placeholder="Digite o título aqui">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="editor-texto" name="texto">
                                
                            </textarea>
                        </div>
                    </div> 
                    <div class="form-group bloco-conteudo">
                        <label for="inputEmail3" class="control-label">
                            Resumo:
                        </label>
                        <span id="helpBlock" class="help-block">
                            Resumos são pequenas descrições opcionais do conteúdo da sua página feitas manualmente.
                        </span>
                        <textarea class="form-control" rows="3" name="resumo"></textarea>
                    </div> 
                    <div class="form-group bloco-conteudo">
                        <label for="inputEmail3" class="control-label">
                            Slug:
                        </label>
                        <span id="helpBlock" class="help-block">
                            O “slug” é uma versão amigável do URL. Normalmente, é todo em minúsculas e contém apenas letras, números e hífens.
                        </span>
                        <input type="text" name="slug" class="form-control"/>
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
                                    <option selected="">Público</option>
                                    <option>Privado</option>
                                </select>
                            </div>
                            <div class="form-group my-form-group">
                                <label for="inputEmail3" class="control-label">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    Categoria: 
                                    <button type="button" class="btn btn-success" ng-click="pagina.buttonAddCateg()">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Nova categoria
                                    </button>
                                </label>
                                <div class="row afastamento" ng-hide="!pagina.exibirCategoria">

                                    <div class="col-xs-10">
                                        <input type="text" class="form-control" ng-model="pagina.inputNovaCategoria.nome" ng-init="pagina.inputNovaCategoria.nome = ''" placeholder="Nome da categoria">
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-success" ng-click = "pagina.submitCadastrarCategoria()">
                                        <i class="fa fa-save" aria-hidden="true"></i>
                                        Salvar
                                    </button>
                                    <button type="button" class="btn btn-danger" ng-click="pagina.buttonAddCateg()">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                        Cancelar
                                    </button>

                                </div>
                                <div style="max-height: 100px; overflow-y: auto;" >
                                    <div class="checkbox" ng-repeat="categ in pagina.categorias">
                                        <label>
                                            <input name="categoria[]" type="checkbox" value="{{categ.id}}"> {{categ.nome}}
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
                                    <i class="fa fa-picture-o" aria-hidden="true"></i> Inserir Imagem 
                                </a>
                                <a class="btn btn-danger" onclick="clear_img()" style="float: right;"> 
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Remover Imagem 
                                </a>
                                <img src="" alt="" title="" id="prev_img" class="img-responsive" style="margin-top: 10px;"/>
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