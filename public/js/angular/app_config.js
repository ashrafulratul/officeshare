/**
 * Created by Shahid-Pc on 3/9/2017.
 */

var app=angular.module('app',['ngRoute']);

app.config(function($routeProvider){
	$routeProvide
		.when('/test'{
			templateUrl :'../resources/views/admin/test.blade.php',
			controller	:'TestController'
		})
});

app.controller('TestController',function($scope){
    $scope.name="sadaf khan";
});
