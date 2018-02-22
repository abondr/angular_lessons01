
<!doctype html>
<html lang='en' ng-app="applicaion13">
    <head>
        <title>Angular js page13</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="body">
        <div class="container-fluid">
            <div class="row-fluid" ng-controller="controller01">
                <table class="table table-bordered">
                    <tr ng-repeat="item in items">
                        <td>
                            {{item.title}}
                        </td>
                        <td>
                            <input ng-model="item.quantity">
                        </td>
                        <td>{{item.price| currency}}</td>
                        <td>{{item.price * item.quantity| currency}}</td>
                    </tr>
                </table>

                <div class="alert alert-secondary">Total: {{totalCart() | currency}}</div>
                <div class="alert alert-danger">Discount: {{bill.discount| currency}}</div>
                <div class="alert alert-info">Subtotal: {{subtotal() | currency}}</div>
            </div>    
        </div>

        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page13.js"></script>
    </body>
</html>