<html >
    <title>Angular js page04</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <body>

        <div id='app1' ng-app="application01" ng-controller="controller01">
            <div class='form-control'>
                <input ng-model='firstName'>
            </div>
            <div>
                {{firstName}}
            </div>
        </div> 
    </div>
    <table id='app2'  ng-app="application01" ng-controller='controller01' class="table table-bordered">
        <tr ng-repeat='item in items'>
            <td>{{item.title}}</td>
            <td><input ng-model='item.quantity'></td>
            <td>{{item.price| currency}}</td>
            <td>{{item.price * item.quantity| currency}}</td>
            <td><button ng-click="remove($index)">Remove</button></td>
        </tr>
    </table>

    <script src="assets/js/angular.min.js"></script>
    <script src="customs/js/page0401.js"></script>
    <script src="customs/js/page0402.js"></script>
    <script>
                        angular.bootstrap(document.getElementById("app2"), ['application01']);
                        angular.bootstrap(document.getElementById("app1"), ['application02']);
    </script>
</body>
</html>