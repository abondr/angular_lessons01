<html ng-app="application06">
    <title>Angular js page06</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <body>
        <div ng-controller="controller01" class="container-fluid">
            <form class="form-control" >
                Starting: <input ng-model="funding.startingEstimate">
                
            </form>
            <div class="row-fluid">
                Recommendation: {{funding.needed}} 
            </div>
        </div>
        <script src="assets/js/angular.min.js"></script>    
        <script src="customs/js/page06.js"></script>
    </body>
</html>