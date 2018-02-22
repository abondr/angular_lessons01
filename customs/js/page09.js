var students = [
    {name: 'name001', id: '1'}, {name: 'name002', id: '2'}, {name: 'name003', id: '3'}, {name: 'name004', id: '4'}, {name: 'name005', id: '5'}];
var app = angular.module('application09', []);
app.controller('controller01', function ($scope) {
    $scope.students = students;
    $scope.insertTom = function () {
        $scope.students.splice(0, 0, {name: 'Tom Thumb', id: '4'});
    };
});
