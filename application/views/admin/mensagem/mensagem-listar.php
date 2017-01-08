<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-comments" aria-hidden="true"></i> Mensagens
                </h1>
            </div>
        </div>
        <?= $this->session->userdata('mensagem') <> '' ? $this->session->userdata('mensagem') : ''; ?>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">   
                    <thead>
                        <tr>
                            <th>Autor</th>
                            <th>Enviado em</th>
                            <th>Visualizar</th>
                            <th>Responder</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Autor</th>
                            <th>Enviado em</th>
                            <th>Visualizar</th>
                            <th>Responder</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($mensagens as $mensagem): ?>
                            <tr>
                                <td>
                                    <?= $mensagem->nome; ?>
                                </td>
                                <td>
                                    <?= data_brasil($mensagem->date); ?> às <?= $mensagem->time; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?= $mensagem->id; ?>">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td>
                                    <a href="<?php echo base_url_admin("mensagem/responder/$mensagem->id"); ?>" class="btn btn-primary">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal<?= $mensagem->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"><b>Autor:</b> <?= $mensagem->nome; ?> em <?= data_brasil($mensagem->date); ?> às <?= $mensagem->time; ?></h4>
                                        </div>
                                        <div class="modal-body" style="padding: 0 40px">
                                            <div class="row">
                                                <h2> Mensagem </h2>
                                                <p>
                                                    <?= $mensagem->mensagem; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="<?= base_url_admin('mensagem/excluir'); ?>" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir essa mensagem ?')">
                                                <input name="id" value="<?= $mensagem->id; ?>" type="hidden" />
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->