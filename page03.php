<html ng-app='myApp'>
    <head>
        <title>Your Shopping Cart</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body >
        <h1>Your Order</h1>
        <table ng-controller='CartController' class="table table-bordered">
            <tr ng-repeat='item in items'>
                <td>{{item.title}}</td>
                <td><input ng-model='item.quantity'></td>
                <td>{{item.price| currency}}</td>
                <td>{{item.price * item.quantity| currency}}</td>
                <td><button ng-click="remove($index)">Remove</button></td>
            </tr>
        </table>
        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page03.js"></script>
    </body>
</html>