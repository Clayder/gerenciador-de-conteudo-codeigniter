
angular.module('notesApp', [])
        .controller('Produto', function ($http) {

            var app = this;
            /* Lista as categorias */
            app.mensagem = msgCarregandoCateg;
            app.classMensage = "alert-info";
            $http.get(base_url_admin('produto/getCategorias')).success(function (data) {
                console.log(data);
                app.categorias = data;
                // esconde a mensagem 
                app.mensagem = !app.mensagem;
            }).
                    error(function (data) {
                        app.mensagem = msgGetCategErro;
                        app.classMensage = "alert-danger";
                    });

            app.verificaCategoriaChecked = function (id) {
                if (categoriasMarcada.indexOf(id) == -1) {
                    return false;
                } else {
                    return true;
                }
            }
            /* Adicionar nova categoria */
            app.buttonAddCateg = function () {
                app.exibirCategoria = !app.exibirCategoria;

                /*
                 * Exibe o forma para cadastrar a nova categoria
                 */
                app.submitCadastrar = function () {
                    console.log(app.dados);

                    // modifica o valor do button do formulário
                    app.buttonCadastrar = msgButtonCadastrando;

                };

                /*
                 * Realiza o cadastro da categoria
                 */
                app.submitCadastrarCategoria = function () {
                    if (app.inputNovaCategoria.nome != "") {
                        // modifica o valor do button do formulário
                        app.buttonCadastrar = msgButtonCadastrando;
                        var inputCategoria = new Object;

                        inputCategoria.nome = app.inputNovaCategoria.nome;
                        inputCategoria.pai = '';
                        //inputCategoria.slug = '';
                        inputCategoria.descricao = '';

                        $http.post(base_url_admin('produto/categoriaCadastrar'), inputCategoria).success(function (data) {
                            console.log(data);
                            app.mensagemForm = msgCadCategSucesso;
                            app.classMensageForm = "alert-success";
                            // insere a nova categoria no início da lista 
                            var novaCategoria = new Object();
                            novaCategoria.id = data;
                            novaCategoria.nome = inputCategoria.nome;
                            novaCategoria.pai = inputCategoria.pai;
                            //novaCategoria.slug = inputCategoria.slug;
                            novaCategoria.descricao = inputCategoria.descricao;
                            app.categorias.unshift(novaCategoria);
                            // apaga os campos do formulário
                            app.inputNovaCategoria.nome = '';

                        }).
                                error(function (data) {
                                    app.mensagemForm = msgCadCategErro;
                                    app.classMensageForm = "alert-danger";
                                });
                        app.buttonCadastrar = msgBtnCadNovaCateg;

                    }

                };
            };

        });

    