<div id="page-wrapper" class="conteudo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i> Meu perfil
                    <a href="<?php echo base_url_admin('comentario'); ?>" class="btn btn-primary button-topo">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        Usuários
                    </a>
                </h1>
            </div>
        </div>
        <form action="<?php echo base_url_admin('pagina/cadastro'); ?>" method="POST" class="form-horizontal">
            <div class="row bloco">
                <div class="col-lg-8 bloco-left">
                    <div class="row bloco-conteudo afastamento" style="padding: 0 20px">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Usuário: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nome de usuário">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nome: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">E-mail: </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Função: </label>
                                <div class="col-sm-10">
                                    <select name="funcao">
                                        <option selected=""> Administrador </option> 
                                        <option> Função 2 </option> 
                                        <option> Função 3 </option> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Informações biográficas: </label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5"></textarea>
                                    <span id="helpBlock" class="help-block">
                                        Escreva uma minibiografia para constar no seu perfil. Essas informações poderão ser vistas por todos.
                                    </span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Foto do Perfil: </label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"> Nova senha: </label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputEmail3" placeholder="">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label"> Repetir nova senha: </label>

                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputEmail3" placeholder="">
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 bloco-conteudo">
                            <h2> 
                                <button class="btn btn-success btn-lg">
                                    <i class="fa fa-floppy-o"  aria-hidden="true"></i> Salvar
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /#page-wrapper -->

