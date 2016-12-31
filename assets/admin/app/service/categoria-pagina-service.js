angular.module('notesApp', [])
        .service('CategoriaService', CategoriaService);

function CategoriaService() {

    //Mapeamos as funções primeiro
    var service = {
        getCategorias: getCategorias,
    };
    return service;

    /*
     * Retorna as categorias
     */

       function getCategorias($http) {
        console.log($http);
        $http.get(base_url_admin('pagina/getCategorias')).success(function (data) {
            console.log(data);
            var categorias = data;
            return categorias;
        }).
                error(function (data) {
                    return [];
                });
    }


}