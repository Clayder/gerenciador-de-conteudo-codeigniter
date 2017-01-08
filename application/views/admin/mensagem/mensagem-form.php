<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-commenting-o" aria-hidden="true"></i> Responder Mensagem
                    <a href="<?php echo base_url_admin('mensagem'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        Mensagens
                    </a>
                </h1>
            </div>
        </div>
        <?= $this->session->userdata('mensagem') <> '' ? $this->session->userdata('mensagem') : ''; ?>
        <form action="<?php echo base_url_admin('mensagem/enviar'); ?>" method="POST" class="form-horizontal">
            <input type="hidden" name="email" value="<?= $email; ?>" />
            <input type="hidden" name="id" value="<?= $id; ?>" />
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="row bloco-conteudo afastamento" style="padding: 0 20px">
                        <h3>Autor</h3>
                        <p> <b>Nome:</b> <?= $nome; ?> </p>
                        <p> <b>E-mail:</b> <?= $email; ?></p>
                    </div>
                    <div class="row bloco-conteudo afastamento" style="padding: 0 20px">
                        <h3>Mensagem</h3>
                        <p>
                            <?= $mensagem; ?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="editor-comentario" name="mensagem">
                                
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
                                <p> <b><i class="fa fa-calendar" aria-hidden="true"></i> Enviado em:</b> <?= data_brasil($date); ?> às <?= $time; ?></p>
                                <p> <b>Em resposta a:</b> <?= $nome; ?> </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- /#page-wrapper -->