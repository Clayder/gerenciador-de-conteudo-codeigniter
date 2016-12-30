<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i> Responder Comentário
                    <a href="<?php echo base_url_admin('comentario'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        Comentários
                    </a>
                </h1>
            </div>
        </div>
        <form action="<?php echo base_url_admin('pagina/cadastro'); ?>" method="POST" class="form-horizontal">
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="row bloco-conteudo afastamento" style="padding: 0 20px">
                        <h3>Autor</h3>
                        <p> <b>Nome:</b> Fulano</p>
                        <p> <b>E-mail:</b> fulano@gmail.com</p>
                        <p> <b>Site:</b> www.site.com.br</p>
                    </div>
                    <div class="row bloco-conteudo afastamento" style="padding: 0 20px">
                        <h3>Comentário</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo ex at tellus sollicitudin, posuere tincidunt augue placerat. Etiam scelerisque ex vel nunc posuere, sed mollis odio tempus. Proin gravida, nunc non lacinia suscipit, est ex dignissim massa, sit amet feugiat leo urna quis nulla. Sed et ipsum at eros finibus ultricies. Duis accumsan felis orci, et malesuada diam tincidunt non. Sed placerat leo vel vehicula placerat. Etiam ac ante venenatis, ornare augue vitae, sagittis purus. Nam non neque id purus porta bibendum vitae non orci.
                        </p>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="editor-comentario" name="texto1">
                                
                                </textarea>
                            </div>
                        </div> 
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 bloco-conteudo">
                            <h2> 
                                <button class="btn btn-success btn-lg">
                                    <i class="fa fa-send"  aria-hidden="true"></i> Enviar
                                </button>
                            </h2>
                            <hr>
                            <div class="form-group my-form-group">
                                <p> <b><i class="fa fa-calendar" aria-hidden="true"></i> Enviado em:</b> 4 nov, 2016 às 19:52</p>
                                <p> <b>Em resposta a:</b> Página de Exemplo </p>
                                <p> <b>Em resposta a:</b> Fulano </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- /#page-wrapper -->