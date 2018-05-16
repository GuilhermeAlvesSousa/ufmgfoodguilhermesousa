;(function() {

  'use strict';

  /**
   * @ngdoc function
   * @description
   */
  angular.module('appUmglanche').service('SessaoArmazenacao', function ($q,GeneralService) {
    return {
      limparSessao: function () {
		  GeneralService.deslogar(function (data) {
			  if (data.status == 'e') {
			  } else {
				  "ok";
			  }
		  });
      },
      getSessao: function () {
		  var user = $q.defer();
		  GeneralService.getSessao(function (data) {
			  user.resolve(data);
		  });
		  return user.promise;
	  }


    };//fim return

  });//fim service

})();
