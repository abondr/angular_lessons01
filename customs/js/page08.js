var app = angular.module('application08', []);
app.controller('controller01', function ($scope) {
    $scope.computeNeeded = function () {
        $scope.needed = $scope.startingEstimate * 10;
    };
    $scope.requestFunding = function () {
        window.alert("Sorry, please get more customers first.");
    };
    $scope.reset = function () {
        $scope.startingEstimate = 0;
        $scope.needed = 0;
    };
});