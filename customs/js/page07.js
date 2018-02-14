var app = angular.module('application07', []);
app.controller('controller01', function ($scope) {
    $scope.funding = {startingEstimate: 0};
    $scope.computeNeeded = function () {
        $scope.funding.needed = $scope.funding.startingEstimate * 10;
    };

    $scope.requestFunding = function () {
        window.alert("Sorry, please get more customers first.");
    };
});
