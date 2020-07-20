var myFoo = angular.module('myFoo', ['ngRoute']);

myFoo.config(function ($routeProvider) {
    
    $routeProvider
    
    .when('/', {
        templateUrl: 'a.php',
        controller: 'mainController'
    })
    .when('/second/:num', {
    
        templateUrl: 'b.php',
        controller: 'secondController'
    })   
});

myFoo.controller('mainController', ['$scope', '$log', '$http', function($scope, $log, $http) {
    
    $scope.name = 'Main';
    $http.get("control/select_control.php")
   .then(function (response) {$scope.json = response.data.records});
    
}]);

myFoo.controller('secondController', ['$scope', '$log', '$http', '$routeParams', 
function($scope, $log, $http, $routeParams) {
    
    $scope.num = $routeParams.num;
    $http.get("control/select_onerow_control_for_post_view.php?menu_id=" + $scope.num)
   .then(function (response) {$scope.json = response.data.records});
    
}]);


