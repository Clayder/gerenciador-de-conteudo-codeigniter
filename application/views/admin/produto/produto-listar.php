<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-cubes" aria-hidden="true"></i> Produtos
                    <a href="<?php echo base_url_admin('produto/cadastrar'); ?>" class="btn btn-success btn-lg button-topo">
                        <i class="fa fa-cube" aria-hidden="true"></i>
                        Adicionar Novo
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
                        <form action="<?= base_url_admin('produto'); ?>" class="form-inline" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                <span class="input-group-btn">
                                    <?php if ($q != ''): ?>
                                        <a href="<?= base_url_admin('produto'); ?>" class="btn btn-default">Resetar</a>
                                    <?php endif; ?>
                                    <button class="btn btn-primary" type="submit">Pesquisar</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row tabela">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Slug</th>
                                <th>Texto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php foreach ($produtos as $produto): ?>
                            <tr>
                                <td width="80px"><?php echo ++$start ?></td>
                                <td><?= $produto->titulo ?></td>
                                <td><?= $produto->slug ?></td>
                                <td><?= $produto->texto ?></td>
                                <td><?= $produto->status ?></td>
                                <td style="text-align:center" width="200px">
                                    <?php grupoButtonListar($produto->id, 'produto', 'Produtos', 'fa-cubes'); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
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