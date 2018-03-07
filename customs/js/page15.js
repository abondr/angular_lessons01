var app = angular.module("myApp", ['ngRoute']);
app.config(function ($routeProvider) {
    $routeProvider
            .when('/home', {
                templateUrl: "customs/php/page15temp01.php",
                controller: "mainController"
            })
            .when('/about', {
                templateUrl: "customs/php/page15temp02.php",
                controller: "aboutController"
            })
            .when('/contact', {
                template: "<h2>Contact</h2>Welcome to Contact page!."
            })
            .otherwise({
                template: "<p>Welcome to index page. This is the default page of this application.</p>"
            });
});
app.controller('mainController', function ($scope) {
    $scope.message = 'This is simple message taken from mainController.\nLike this you can have separate controller for each view.'
            + ' Here we have template defined in the config\n itself but instead you can have different template and simply'
            + ' point to it using templateUrl property with its specific controller.';
});
app.controller('aboutController', function ($scope) {
    $scope.message = 'i am abon duttaroy studying angular js 1.6.9 right now. after getting basic idea about it '
            + '\n.have to study angular 5';
});
