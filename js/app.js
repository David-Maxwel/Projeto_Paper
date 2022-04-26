// Aqui declaramos o módulo, que é ligado 
// ao HTML através da diretiva ng-app 
var app = angular.module("app", ["ngRoute"]); 
 

// Configura as rotas de navegação da aplicação Web 
app.config(function($routeProvider)
{ 
    $routeProvider.when("/", {  
        templateUrl: "pages/home.php"
    }).when("/login", { 
        templateUrl:"pages/login.php" 
    }).when("/cadastro", { 
        templateUrl:"pages/cadastro.php" 
    }).when("/rec_senha", { 
        templateUrl:"pages/rec_senha.php" 
    }).when("/vagas", { 
        templateUrl:"pages/vagas.php" 
    }).when("/cliente", { 
        templateUrl:"pages/cliente.php"
    }).when("/faq", { 
        templateUrl:"pages/faq.php"  
    }).otherwise({ 
        redirectTo: "/" 
    }); 
});

// Veririca a confirmação de senha na hora do cadastro
function validarSenha() {
    var senha1 = document.getElementById("senha");
    var senha2 = document.getElementById("conf_senha");
    var s1 = senha1.value;
    var s2 = senha2.value;
    if (s1 == s2) {
      
      return true;
    } else {
      alert("Senhas não conferem. Verifique o valor digitado.");
      return false;
    }
  }

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
}
//------------------------------------------------------------------//
//EFEITO MÁQUINA DE ESCREVER

function typeWrite(e) {
    const textoArray = e.innerHTML.split('');
    e.innerHTML = ' ';
    textoArray.forEach(function (letter, i) {
        setTimeout(function () {
            e.innerHTML += letter;
        }, 80 * i);
    });
}

const phrase = document.querySelector('.headline');

typeWrite(phrase);