
// Aqui declaramos o módulo, que é ligado 
// ao HTML através da diretiva ng-app 
var app = angular.module("app", ["ngRoute"]); 
 

// Configura as rotas de navegação 
// da aplicação Web 
app.config(function($routeProvider)
{ 
    $routeProvider.when("/", {  
        templateUrl: "pages/home.php" 
    }).when("/login", { 
        templateUrl:"pages/login.php" 
    }).when("/cadastro", { 
        templateUrl:"pages/cadastro.php" 
    }).otherwise({ 
        redirectTo: "/" 
    }); 
});