'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the appUmglanche
 */
angular.module('appUmglanche')
	.controller('UsuarioCtrl', function($scope,GeneralService,$state) {

	$scope.usuario = { fone: 0 }
	$scope.phoneMask = "(99) 9999-9999";

	console.log("usuario ctrl");

	$scope.cadastrar = function(){
		if($scope.usuario.nome == "" || $scope.usuario.email == "" || $scope.usuario.fone == "" || $scope.usuario.senha == "" || $scope.usuario.tipoUsuario == ""){
			alert("Preencha todos os campos!")
		}
		else{
			GeneralService.salvarUsuario({usuario : $scope.usuario},function (data) {
				if (data.status == 'e') {
					alert('Erro : ' + data.message);
				} else {
					alert(data.message);
					$state.go("login");
				}
			},function(dat){
				console.log(dat);
			});
		}
	}

	$scope.logar = function(){
		GeneralService.logar({login : $scope.email, senha : $scope.senha},function (data) {
			if (data.status == 'e') {
				alert('Erro : ' + data.message);
			} else {
				alert(data.message);
				$state.go("home");
			}
		},function(dat){
			console.log(dat);
		});
	}

});
