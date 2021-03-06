<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-cube" aria-hidden="true"></i> Produto: {titulo}
                    <?php grupoButtonExibir($id, 'produto', 'Produtos', 'fa-cubes'); ?>
                </h1>
            </div>
        </div>
        <div class="row bloco">
            <div class="col-lg-8 bloco-left">
                <div class="form-group ">
                    <div class="col-sm-12 bloco-conteudo-exbir">
                        <h2> Texto </h2>
                        <hr>
                        <span> {texto}</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 bloco-conteudo-exbir">
                        <h2> Slug </h2>
                        {slug}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 bloco-conteudo">
                        <div class="form-group my-form-group">
                            <div class="col-sm-12">
                                <p><b>Status:</b> <span> {status}</span></p>
                            </div>
                        </div>
                        <div class="form-group my-form-group">
                            <div class="col-sm-12">
                                <p><b>Categorias:</b></p>
                                {categorias}
                                {nome},
                                {/categorias}
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 bloco-conteudo afastamento">
                        <h2> Imagem destacada </h2>
                        <hr>
                        <div class="row" style="padding: 10px;">
                           <img src="{imagem}" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->