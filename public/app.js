'use strict';

// Declare app level module which depends on views, and components
angular.module('appUmglanche', [
  'ui.router',
  'ui.bootstrap',
  'ui.mask',
  'ngFileUpload',
  'ui.utils.masks'

]).
config(['$locationProvider', '$urlRouterProvider','$stateProvider',
      function($locationProvider, $urlRouterProvider,$stateProvider) {

  $urlRouterProvider.otherwise('/');


  $stateProvider
    .state('home',{
      url:'/',
      controller: 'HomeCtrl',
      templateUrl:'view/home/home.html'
    })
    .state('login',{
      url:'/login',
      controller: 'UsuarioCtrl',
      templateUrl:'view/usuario/login.html'
    })
    .state('esqueci-senha',{
      url:'/esqueciSenha',
      controller: 'UsuarioCtrl',
      templateUrl:'view/usuario/esqueci-senha.html'
    })
    .state('cadastra-usuario',{
      url:'/cadastrar-usuario',
      controller: 'UsuarioCtrl',
      templateUrl:'view/usuario/cadastrar-usuario.html'
    })
	.state('cadastra-produto',{
	  url:'/cadastrar-produto',
	  controller: 'ProdutosCtrl',
	  templateUrl:'view/produtos/edit.html'
	})
	.state('lista-produto',{
	  url:'/lista-produto',
	  controller: 'ProdutosCtrl',
	  templateUrl:'view/produtos/lista.html'
	})
  console.log("principal");
}]);
