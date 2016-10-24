<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i> Adicionar nova página
                    <a href="<?php echo base_url_admin('pagina'); ?>" class="btn btn-primary btn-lg button-topo">
                        <i class="fa fa-files-o" aria-hidden="true"></i>
                        Páginas
                    </a>
                </h1>
            </div>
        </div>
        <div class="row pagina">
            <form action="<?php echo base_url_admin('pagina/cadastro'); ?>" method="POST" class="form-horizontal">
                <div class="col-lg-8">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="titulo" value="" class="form-control input-lg" placeholder="Digite o título aqui">
                        </div>
                    </div> 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea class="editor-texto" name="texto1">
    Texto de Exemplo<br/>
    Tudo supimpa por aqui?
                            </textarea>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 bloco-pagina">
                            <h2> Atributos da página </h2>
                            <hr>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    Visibilidade:
                                </label>
                                <div class="col-sm-7">
                                    <select name="status" class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">
                                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                    Layout:
                                </label>
                                <div class="col-sm-7">
                                    <select name="layout" class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                    Status:
                                </label>
                                <div class="col-sm-7">
                                    <select name="status" class="form-control">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 bloco-pagina afastamento">
                            <h2> Imagem destacada </h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->