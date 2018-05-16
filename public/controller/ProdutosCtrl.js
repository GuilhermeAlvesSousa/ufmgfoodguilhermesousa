'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the appUmglanche
 */
angular.module('appUmglanche')
	.controller('ProdutosCtrl', function($scope,SessaoArmazenacao,$state,Upload) {

		function loginAcesso(){

			SessaoArmazenacao.getSessao().then(
				function(sucess){
					if(sucess.status != "e"){
						console.log(sucess.data);
					}
					else{
						$state.go("home");
					}
				},
				function(err){
					$state.go("home");
				}
			);
		}


		function checaCampos(){
			console.log($scope.arquivo);
			if(!$scope.produto.nome){
				return false;
			}
			if(!$scope.produto.tipoProduto){
				return false;
			}
			if(!$scope.produto.preco){
				return false;
			}
			if(!$scope.produto.local){
				return false;
			}
			if(!$scope.produto.inicio){
				return false;
			}
			if(!$scope.produto.termino){
				return false;
			}
			if(!$scope.produto.dias){
				return false;
			}
			if(!$scope.produto.comentario){
				return false;
			}
			return true;
		};

		$scope.salvar = function(){
			if (checaCampos()) {
				console.log($scope.atestado);
				Upload.upload({
					url: 'produto/salvar',
					data : {produto : $scope.produto , arq : $scope.arquivo},
					file:  $scope.arq,
					fileFormDataName: "arq",

				}).then(function (data) {
					if (data.data.status == 'e') {
						alert(data.data.message);
					}
					else {
						console.log(data.data);
						$state.go('lista-produto')
						//sucesso
					}
				}, function (resp) {
					console.log('Error status: ' + resp.status);
				}, function (evt) {
					$scope.progress = parseInt(100.0 * evt.loaded / evt.total);
				});

			}
			else{
				alert("Confira os campos em vermelho");

			}
		}

		function init(){
			loginAcesso()
		}

		init();
});
