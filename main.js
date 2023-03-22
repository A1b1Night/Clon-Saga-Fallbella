//creacion del modulo
var angularRoutingApp=angular.module('angularRoutingApp',['ngRoute']);

//configuracion de las rutas
angularRoutingApp.config(function ($routeProvider) {
	 $routeProvider
	    .when('/', {
	    	templateUrl: 'Navegacion/inicio.php',
	    	controller: 'mainController'
	    })
	    .when('/productos', {
	    	templateUrl: 'Navegacion/productos.php',
	    	controller: 'aboutController'
	    })
	    .when('/registro', {
	    	templateUrl: 'Navegacion/registro.php',
	    	controller: 'contactController'
	    })
	    .otherwise({ 
	    	redirectTo: '/' 
	    });
});
angularRoutingApp.controller('mainController', function ($scope) {
	 $scope.message = "";
});
angularRoutingApp.controller('aboutController', function ($scope) {
	 $scope.message = "";
});
angularRoutingApp.controller('contactController', function ($scope) {
	 $scope.message = "";
});