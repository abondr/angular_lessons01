<html ng-app="myApplication">
    <title>Angular js page05</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<body>

    <table ng-controller='myController' class="table table-bordered">
        <tr><th>order id</th><th>status</th></tr>
        <tr ng-repeat='order in orders'>
            <td>{{order.order_id}}</td>
            <td>{{order.status}}</td>
        </tr>
    </table>


<script src="assets/js/angular.min.js"></script>
<script src="customs/js/page05.js"></script>

</body>
</html>
