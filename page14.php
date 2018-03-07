<html ng-app="applicaion14">
    <head>
        <title>Angular js page14</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="body" ng-controller="controller01">
        <div class="container-fluid">
            <h2>Simple Calculations</h2>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th><button class="btn btn-danger" ng-click="addItem()">Add</button></th>
                </tr>
                <tr ng-repeat="item in items">
                    <td>{{item.name}}</td>
                    <td><input ng-model="item.quantity"></td>
                    <td><input ng-model="item.price"></td>
                    <td>{{item.quantity * item.price |currency:'&#8377;'}}</td>
                    <td><button class="btn btn-dark" ng-click="remove($index)">Remove</button></td>
                </tr>
                <tr>
                    <td colspan="2">total items : {{totalArr.totalItem}}</td>
                    <td colspan="2">total amount : {{totalArr.totalPrice | currency:'&#8377;'}}</td>
                </tr>
            </table>
        </div>
        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page14.js"></script>
    </body>
</html>