var app = angular.module('myApplication', []);
app.controller('myController', ["$scope", "$http" , function ($scope, $http) {
    $scope.orders;
    //$scope.getOrders = function(){
        $http({
            method: 'GET',
            url: 'customs/php/ajaxPhp05.php'
        }).then(function (response) {
            $scope.orders = response.data;
            console.log($scope.orders);
        }, function (response) {
            // code to execute in case of error
            // on error
            console.log(response.data, response.status);
        });
      //  return $scope.orders;
    //}

}]);
