<html ng-app="applicaion10">
    <title>Angular js page05</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <body class="body">
        <div class="container-fluid" ng-controller='controller01'>
            <div class="row-fluid" >
            <button ng-click='toggleMenu()'>Toggle Menu</button>
            <ul ng-show='menuState'>
                <li ng-click='stun()'>Stun</li>
                <li ng-click='disintegrate()'>Disintegrate</li>
                <li ng-click='erase()'>Erase from history</li>
            </ul>    
            </div>
        </div>
            <script src="assets/js/angular.min.js"></script>
            <script src="customs/js/page10.js"></script>
    </body>
</html>