<html ng-app="application08">
    <head>
        <title>
            page 8, ng-click
        </title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container-fluid" ng-controller="controller01">
            <div class="bs-docs-section">
                <div class="row">
                    <form ng-submit="requestFunding()" class="form-horizontal" >
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Starting:</label>
                                <input type="text" class="form-control" ng-change="computeNeeded()" ng-model="startingEstimate">
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-info">Fund my startup!</button>
                                    <button class="btn btn-warning" ng-click="reset()">Reset</button>
                                </div> 
                            </div>
                        </fieldset>
                    </form>
                    <div class="form-group">
                        <label>Recommendation: </label>
                        <div class="col-lg-10">
                            {{needed}}
                        </div>
                    </div>
                </div>
            </div>


        </div>  
    </body>
    <script src="assets/js/angular.min.js"></script>
    <script src="customs/js/page08.js"></script>
</html>


