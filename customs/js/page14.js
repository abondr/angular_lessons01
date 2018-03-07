var app = angular.module('applicaion14', []);
app.controller('controller01', function ($scope) {
    $scope.items = [{name: 'name1', quantity: 1, price: 0}];;
    $scope.totalArr = {totalItem:0,totalPrice:0};
    $scope.addItem = function () {
        var length = $scope.items.length;
        $scope.items.push({name: 'name' + length, quantity: 1, price: (length + 1)});
    }
    $scope.remove = function (index) {
        $scope.items.splice(index, 1);
    }
    function totalCalculate(newVal,oldVal,$scope){
        var totalItem = 0;
        var totalPrice = 0;
        for (var i = 0; i < newVal.length; i++) {
            totalItem += parseInt(newVal[i].quantity);
            totalPrice += parseFloat(newVal[i].quantity * newVal[i].price);
        }
        $scope.totalArr.totalPrice = totalPrice;
        $scope.totalArr.totalItem = totalItem;
    }
    $scope.$watch('items',totalCalculate,true);
});
