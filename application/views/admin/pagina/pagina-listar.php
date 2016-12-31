<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-files-o" aria-hidden="true"></i> Páginas
                    <a href="<?php echo base_url_admin('pagina/cadastrar'); ?>" class="btn btn-success btn-lg button-topo">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        Adicionar Nova
                    </a>
                </h1>
            </div>
        </div>
        <?= $this->session->userdata('mensagem') <> '' ? $this->session->userdata('mensagem')
        : '';
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-md-8 text-center">
                        <div style="margin-top: 8px" id="message">
                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                        </div>
                    </div>
                    <div class="col-md-1 text-right">
                    </div>
                    <div class="col-md-3 text-right">
                        <form action="<?= base_url_admin('pagina'); ?>" class="form-inline" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                <span class="input-group-btn">
                                    <?php if ($q != ''): ?>
                                        <a href="<?= base_url_admin('pagina'); ?>" class="btn btn-default">Resetar</a>
                                    <?php endif; ?>
                                    <button class="btn btn-primary" type="submit">Pesquisar</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-bordered" style="margin-bottom: 10px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Slug</th>
                            <th>Texto</th>
                            <th>Resumo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($pagina_data as $pagina): ?>
                        <tr>
                            <td width="80px"><?php echo ++$start ?></td>
                            <td><?= $pagina->titulo ?></td>
                            <td><?= $pagina->slug ?></td>
                            <td><?= $pagina->texto ?></td>
                            <td><?= $pagina->resumo ?></td>
                            <td><?= $pagina->status ?></td>
                            <td style="text-align:center" width="200px">
                                <form action="<?= base_url_admin('pagina/excluir');?>" method="POST"  onclick="return confirm('Realmente deseja excluir ?');">
                                    <input type="hidden" name="id" value="<?= $pagina->id; ?>" />
                                    <a href="<?= base_url_admin("pagina/exibir/$pagina->id"); ?>" class="btn btn-info" title="Exibir"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
                                    <a href="<?= base_url_admin("pagina/editar/$pagina->id"); ?>" class="btn btn-warning" title="Editar"> <i class="fa fa-text-width" aria-hidden="true"></i> </a>
                                    <button type="submit" class="btn btn-danger" title="Excluír">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary">Quantidade : <?= $total_rows ?></a>
                    </div>
                    <div class="col-md-6 text-right">
                        <?= $pagination ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->