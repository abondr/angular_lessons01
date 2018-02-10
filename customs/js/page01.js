var app = angular.module('myApplication', []);
app.controller('myController', function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
});