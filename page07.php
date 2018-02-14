<html ng-app="application07">
    <head>
        <title>
            page07 submit
        </title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container-fluid" ng-controller="controller01">
            <form class="form-vertical" ng-submit="requestFunding()" >
                <div class="form-group">
                    <label>Starting:</label>
                    <div class="col-lg-10">
                        <input ng-change="computeNeeded()" ng-model="funding.startingEstimate">
                    </div>
                </div>
                <div class="form-group">
                    <label>Recommendation:</label>
                    <div class="col-lg-10">
                        {{funding.needed}}
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-2">
                    <button>Fund my startup!</button>
                </div>
            </form>    
        </div>

        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page07.js"></script>
    </body>
</html>
