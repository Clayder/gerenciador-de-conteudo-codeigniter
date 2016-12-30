<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-comments" aria-hidden="true"></i> Comentários
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped">   
                    <thead>
                        <tr>
                            <th>Autor</th>
                            <th>Página</th>
                            <th>Enviado em</th>
                            <th>Visualizar</th>
                            <th>Responder</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Autor</th>
                            <th>Página</th>
                            <th>Enviado em</th>
                            <th>Visualizar</th>
                            <th>Responder</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>
                                Fulano
                            </td>
                            <td>
                                serviços
                            </td>
                            <td>
                                04/11/2016 às 19:52
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('comentario/responder'); ?>" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fulano 2
                            </td>
                            <td>
                                Pagina 2
                            </td>
                            <td>
                                08/11/2016 às 20:52
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('comentario/responder'); ?>" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fulano 3
                            </td>
                            <td>
                                pagina 3
                            </td>
                            <td>
                                04/12/2016 às 19:52
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td>
                                <a href="<?php echo base_url_admin('comentario/responder'); ?>" class="btn btn-primary">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><b>Autor:</b> Fulano 1 em 04/11/2016 às 19:52</h4>
                    </div>
                    <div class="modal-body" style="padding: 0 40px">
                        <div class="row afastamento">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="">Status:</label>
                                </div>
                                <div class="form-group">
                                    <select name="status" class="form-control">
                                        <option selected="">Aprovado</option>
                                        <option>Pendente</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <h2> Comentário </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo ex at tellus sollicitudin, posuere tincidunt augue placerat. Etiam scelerisque ex vel nunc posuere, sed mollis odio tempus. Proin gravida, nunc non lacinia suscipit, est ex dignissim massa, sit amet feugiat leo urna quis nulla. Sed et ipsum at eros finibus ultricies. Duis accumsan felis orci, et malesuada diam tincidunt non. Sed placerat leo vel vehicula placerat. Etiam ac ante venenatis, ornare augue vitae, sagittis purus. Nam non neque id purus porta bibendum vitae non orci.
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form onsubmit="return confirm('Você tem certeza que deseja excluir esse comentário ?')">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</button>
                            <button type="button" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->