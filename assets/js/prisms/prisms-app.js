'use strict';

var app = angular.module('prisms', []);

app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
    $routeProvider.
        when('/prisms', {templateUrl:'partials/front-page.html', controller:FrontPageController}).
        when('/prisms/about', {templateUrl:'partials/about.html', controller:AboutController}).
        when('/prisms/people', {templateUrl:'partials/people.html', controller:PeopleController}).
        when('/prisms/publications', {templateUrl:'partials/publications.html', controller:PublicationsController}).
        when('/prisms/links', {templateUrl:'partials/links.html', controller:LinksController}).

        otherwise({redirectTo:'/prisms'});
}]);

