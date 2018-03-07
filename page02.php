<html ng-app="myApplication">
    <title>Angular js page02</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <body>
    <body>
        <div class='container-fluid'>
            <div class='row' ng-controller="myController">
                <div class='form-control'>
                    <input ng-model='firstName'>
                </div>
                <div>
                    {{firstName}}
                </div>
            </div>    
        </div>

        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page01.js"></script>
    </body>
</html>