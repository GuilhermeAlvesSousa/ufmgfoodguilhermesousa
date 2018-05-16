'use strict';
/**
 * @ngdoc function
 * @name sbAdminApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the appUmglanche
 */
angular.module('appUmglanche')
	.controller('IniCtrl', function($scope,$state,SessaoArmazenacao,$rootScope,GeneralService) {

	console.log("ini ctrl")


	function loginAcesso(){

		SessaoArmazenacao.getSessao().then(
			function(sucess){
				if(sucess.status != "e"){
					$scope.user = sucess.data;
					$rootScope.user = sucess.data;
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

	function init(){
		loginAcesso()
	}

	$scope.deslogar = function () {
		GeneralService.deslogar(function (data) {
			if (data.status == 'e') {
				alert('Erro : ' + data.message);
			} else {
				location.reload()
			}
		},function(dat){
			console.log(dat);
		});
	};


	init();
});
