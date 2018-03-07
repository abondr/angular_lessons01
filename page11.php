<html ng-app="applicaion11">
    <title>Angular js page11</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
        .menu-disabled-true {
            color: #999;
        }
        .menu-disabled-false {
            color: #28a745;
        }
        .col1{
            color:#aabbcc;
        }
        .col2{
            color:#red;
        }
    </style>
    <body class="body">
        <div class="container-fluid" ng-controller='controller01'>
            <div class="row" >
                <div class="col-2"><button class="btn btn-info" ng-click='toggleMenu()'>Toggle Menu</button></div>
                <ul ng-show='menustate2' class="list-group" >
                    <li class='menu-disabled-{{isDisabled}}' ng-click='stun()'>Stun</li>
                    <li class='menu-disabled-{{isDisabled}}' ng-click='disintegrate()'>Disintegrate</li>
                </ul>   
                <ul ng-show='menustate1' class="list-group" >
                    <li class='menu-disabled-{{isDisabled}}' ng-click='disintegrate()'>Disintegrate</li>
                    <li class='menu-disabled-{{isDisabled}}' ng-click='stun()'>Stun</li>
                </ul>
                <div ng-class='{col1: menustate2, col2: menustate1}'>abcd efgh</div>
            </div>
        </div>
        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page11.js"></script>
    </body>
</html>