<html ng-app="applicaion12">
    <title>Angular js page12</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
        .selected {
            background-color: lightgreen;
        }
    </style>
    <body class="body">
        <div class="container-fluid" ng-controller='controller01'>
            <table >
                <tr ng-repeat='restaurant in directory' ng-click='selectRestaurant($index)'
                    ng-class='{selected: $index == selectedRow}'>
                    <td>{{restaurant.name}}</td>
                    <td>{{restaurant.cuisine}}</td>
                </tr>
            </table>
        </div>
        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page12.js"></script>
    </body>
</html>