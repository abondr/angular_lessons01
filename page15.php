<!--index.html-->
<!DOCTYPE html>
<html  ng-app="myApp">
    <!-- load bootstrap and fontawesome via CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- load angular via CDN -->

    <body>
        <h1>AngularJS Routing Example</h1>
        <p>Click on the links to change the content.</p>
        <ul>
            <li><a href="#!/home"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#!/about"><i class="fa fa-shield"></i> About</a></li>
            <li><a href="#!/contact"><i class="fa fa-comment"></i> Contact</a></li>
        </ul>
        <div ng-view style='background-color:lightgrey;'></div>
        <script src="assets/js/angular.min.js"></script>
        <script src="assets/js/angular-route.min.js"></script>
        <script src="customs/js/page15.js"></script>
    </body>
</html>