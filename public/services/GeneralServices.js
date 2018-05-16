;(function() {

  'use strict';

  /**
   * @ngdoc function
   * @name
   * @description
   * # AcaoService
   *
   */
  angular.module('appUmglanche').service('GeneralService', function (request) {
    return {
      salvarUsuario: function (data, successCallback, errorCallback) {
        request.postFormEncoded('usuario/salvar', data, successCallback, errorCallback);
      },
	  logar: function (data, successCallback, errorCallback) {
		  request.postFormEncoded('usuario/logar', data, successCallback, errorCallback);
	  },
	  deslogar: function (successCallback, errorCallback) {
		request.get('usuario/deslogar',  successCallback, errorCallback);
      },
	  getSessao: function (data, successCallback, errorCallback) {
		request.get('usuario/getSessao', data, successCallback, errorCallback);
	  },
      listarUsuario : function (data,successCallback, errorCallback){
		  request.postFormEncoded('usuario/listar',data,successCallback, errorCallback)
	  },
      getUsuario : function (id,successCallback, errorCallback){
        request.get('usuario/'+id+'/get/', successCallback, errorCallback)
      },
      deleteUsuario : function (data,successCallback, errorCallback){
        request.postFormEncoded('usuario/delete',data,successCallback, errorCallback)
      },
      listarProduto : function (data,successCallback, errorCallback){
        request.postFormEncoded('produto/listar',data,successCallback, errorCallback)
      },
      getProduto : function (id,successCallback, errorCallback){
        request.get('produto/get/' + id, successCallback, errorCallback)
      },
      deleteProduto: function (data,successCallback, errorCallback){
        request.postFormEncoded('produto/delete',data,successCallback, errorCallback)
      }


    };//fim return

  });//fim service

})();
