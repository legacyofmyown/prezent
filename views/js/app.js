var app = angular.module('app', []).config(function($routeProvider) {
	$routeProvider.when('/login',{
	    template.Url: 'views/login.html',
	    controller: 'LoginController'
	});
	$routeProvider.otherwise({redirectTo:'/login'});
});

app.controller('LoginController', function() {

});
