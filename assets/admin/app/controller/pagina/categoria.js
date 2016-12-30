angular.module('notesApp', [])
        .controller('CategoriaPagina', function ($http) {

            var app = this;

            /*
             * Retorna as categorias
             */
            app.mensagem = msgCarregandoCateg;
            app.classMensage = "alert-info";
            $http.get(base_url_admin('pagina/getCategorias')).success(function (data) {
                console.log(data);
                app.categorias = data;
                // esconde a mensagem 
                app.mensagem = !app.mensagem;
            }).
                    error(function (data) {
                        app.mensagem = msgGetCategErro;
                        app.classMensage = "alert-danger";
                    });

            /*
             * Realiza o cadastro 
             */
            app.submitCadastrar = function () {
                console.log(app.dados);

                // modifica o valor do button do formulário
                app.buttonCadastrar = msgButtonCadastrando;

                $http.post(base_url_admin('pagina/categoriaCadastrar'), app.dados).success(function (data) {
                    console.log(data);
                    app.mensagemForm = msgCadCategSucesso;
                    app.classMensageForm = "alert-success";
                    // insere a nova categoria no início da lista 
                    var novaCategoria = new Object();
                    novaCategoria.id = data;
                    novaCategoria.nome = app.dados.nome;
                    novaCategoria.pai = app.dados.pai;
                    novaCategoria.slug = app.dados.slug;
                    novaCategoria.descricao = app.dados.descricao;
                    app.categorias.unshift(novaCategoria);
                    // apaga os campos do formulário
                    delete app.dados;

                }).
                        error(function (data) {
                            app.mensagemForm = msgCadCategErro;
                            app.classMensageForm = "alert-danger";
                        });
                app.buttonCadastrar = msgBtnCadNovaCateg;
            };

            /*
             * Excluír categoria 
             */
            app.deletarCategoria = function (id, posicao) {
                console.log('posicao: ' + posicao);
                console.log('id: ' + id);
                if (confirm(msgExcluir)) {
                    $http.delete(base_url_admin('pagina/categoriaExcluir/' + id)).success(function (data) {
                        console.log(data);
                        if (data == 1) {
                            app.categorias.splice(posicao, 1);
                            console.log(app.categorias);
                            app.mensagem = msgExcluirCateg;
                            app.classMensage = "alert-success";
                        } else {
                            app.mensagem = msgErroExcluirCateg;
                            app.classMensage = "alert-danger";
                        }
                    }).error(function (data) {
                        app.mensagem = msgErroExcluirCateg;
                        app.classMensage = "alert-danger";
                    });
                }
            };

            // editar categoria

            app.submitEditar = function () {
                console.log(app.dados);

                // modifica o valor do button do formulário
                app.buttonEditar = msgButtonEditando;

                $http.put(base_url_admin('pagina/categoriaEditar'), app.dados).success(function (data) {
                    console.log(data);
                    app.buttonEditar = 'Editar categoria';
                    app.mensagemForm = msgEditCategSucesso;
                    app.classMensageForm = "alert-success";

                    // Atualizar a lista de categorias
                    if (data) {
                        setTimeout(function () {
                            window.location = base_url_admin('pagina/categoria/'+app.dados.id);
                        }, 1000);
                    }

                    console.log(app.categorias);

                    /*
                     var novaCategoria = new Object();
                     novaCategoria.id = data;
                     novaCategoria.nome = app.dados.nome;
                     novaCategoria.pai = app.dados.pai;
                     novaCategoria.slug = app.dados.slug;
                     novaCategoria.descricao = app.dados.descricao;
                     app.categorias.unshift(novaCategoria);
                     */


                }).
                        error(function (data) {
                            app.mensagemForm = msgEditCategErro;
                            app.classMensageForm = "alert-danger";
                        });
                app.buttonCadastrar = msgBtnCadNovaCateg;
            };


            /*
             * Atualizar lista de categorias
             * @param, categoria atualizada 
             * @return, lista
             */

            function atualizarListaCateg() {
                console.log(app.categorias.length);
                var idCategPut = app.dados.id;
                /*
                 for(var i = 0; i < app.categorias.length; i++){
                 if(app.categorias[i].id == idCategPut){
                 //delete app.categorias[i];
                 app.categorias.unshift(app.dados);
                 }
                 }
                 */
            }
            ;
        });