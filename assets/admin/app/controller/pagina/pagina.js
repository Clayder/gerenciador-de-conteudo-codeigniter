
angular.module('notesApp', [])
        .service('CategoriaService', CategoriaService)
    .controller('Pagina', function ($http) {
        
        var app = this;
        var teste = new CategoriaService();
        app.buttonAddCateg = function () {
            console.log($http);
            console.log(teste.getCategorias($http));
            
            app.exibirCategoria = !app.exibirCategoria;
        };
        
    });
    
    