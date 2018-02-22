var app = angular.module('applicaion10', []);
app.controller('controller01', function ($scope) {
    $scope.menuState = false;
    $scope.toggleMenu = function () {
        $scope.menuState = !$scope.menuState;
    };
    // death ray functions left as exercise to reader
    $scope.stun = function () {
        window.alert("stun");
    };
    $scope.disintegrate = function () {
        window.alert("disintegrate");
    };
    $scope.erase = function () {
        window.alert("erase");
    };
});
