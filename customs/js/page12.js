var app = angular.module('applicaion12', []);
app.controller('controller01', function ($scope) {
    $scope.directory = [
        {name: 'The Handsome Heifer', cuisine: 'BBQ'},
        {name: 'Green\'s Green Greens', cuisine: 'Salads'},
        {name: 'House of Fine Fish', cuisine: 'Seafood'}
    ];
    $scope.selectRestaurant = function (row) {
        console.log(row);
        $scope.selectedRow = row;
    };
}
);
