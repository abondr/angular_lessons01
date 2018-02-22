var app = angular.module('applicaion11', []);
app.controller('controller01', function ($scope) {
    $scope.menustate1 = false;
    $scope.menustate2 = true;
    $scope.isDisabled = 'false';
    $scope.toggleMenu = function () {
       // console.log("$scope.menuState"+$scope.menuState);
        $scope.menustate1 = !$scope.menustate1;
        $scope.menustate2 = !$scope.menustate2;
    };
    // death ray functions left as exercise to reader
    $scope.stun = function () {
        $scope.isDisabled = 'true';
        window.alert("stun");
    };
    $scope.disintegrate = function () {
        $scope.isDisabled = 'false';
        window.alert("disintegrate");
    };
    
});
