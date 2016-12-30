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
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="titulo" value="" class="form-control input-lg" placeholder="Digite o título aqui">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="editor-texto" name="texto1">
                                
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
                        <input type="text" name="agendamento" class="form-control"/>
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
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    Autor:
                                </label>
                                <select name="status" class="form-control">
                                    <option selected="">Peter Clayder</option>
                                    <option>Fulano</option>
                                </select>
                            </div>
                            <div class="form-group my-form-group">
                                <label for="inputEmail3" class="control-label">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    Visibilidade:
                                </label>
                                <select name="status" class="form-control">
                                    <option selected="">Publicado</option>
                                    <option>Rascunho</option>
                                </select>
                            </div>
                            <div class="form-group my-form-group">
                                <label for="inputEmail3" class="control-label">
                                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                    Layout da página:
                                </label>
                                <select name="layout" class="form-control">
                                    <option selected="">Padrão</option>
                                </select>
                            </div>
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
                                    <form class="" name="formAddCateg">
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control" placeholder="Nome da categoria">
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-save" aria-hidden="true"></i>
                                            Salvar
                                        </button>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-close" aria-hidden="true"></i>
                                            Cancelar
                                        </button>
                                    </form>
                                </div>
                                <div style="max-height: 100px; overflow-y: auto;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Serviços
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Trabalhos
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Categoria 3
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
                                <input type="hidden" value="" id="nome_img" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /#page-wrapper -->