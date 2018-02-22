<?php
/* $str = "[";
  for($i=1;$i<=200;$i++){     $str .= "{name:'name". str_pad($i, 3,'0',STR_PAD_LEFT)."', id:'".$i."'},"; }
  $str = rtrim($str,','); $str.="]"; echo $str; */
?>
<html ng-app="application09">
    <head>
        <title>page 09. ng-repeat</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
       
            <div class="row">
                 <div class="container-fluid" ng-controller="controller01">
                <button ng-click="insertTom()">Insert</button>
                <ul class="list-group" >
                    <li class="col-1 alert" ng-repeat="student in students">
                        <a href ="/student/view/{{student.id}}">{{student.name}}</a>
                    </li>
                </ul>    
            </div>
        </div>
        <script src="assets/js/angular.min.js"></script>
        <script src="customs/js/page09.js"></script>

    </body>
</html>

