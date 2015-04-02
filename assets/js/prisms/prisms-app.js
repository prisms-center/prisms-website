'use strict';

var app = angular.module('prisms', ['ui.router']);

app.config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {

    $stateProvider
        .state('prisms', {
            url: '/prisms',
            templateUrl: 'partials/front-page.html',
            controller: 'FrontPageController'
        })
        .state('about', {
            url: '/about',
            templateUrl: 'partials/about.html'
        })
        .state('people', {
            url: '/people',
            templateUrl: 'partials/people.html'
        })
        .state('publications', {
            url: '/publications',
            templateUrl: 'partials/publications.html'
        })
        .state('contact', {
            url: '/contact/123',
            templateUrl: 'partials/contact.html'
        })
        .state('about.ctools', {
            url: '/computationaltools',
            templateUrl: 'partials/computational_tools.html'
        })
        .state('about.mcommons', {
            url: '/materialscommons',
            templateUrl: 'partials/materials_commons.html'
        })
        .state('about.science', {
            url: '/science',
            templateUrl: 'partials/science.html'
        })
        .state('about.collaborators', {
            url: '/collaborators',
            templateUrl: 'partials/collaborators.html'
        });
    $urlRouterProvider.otherwise('/prisms');
}])

    .controller("NavController", function ($scope, $location, $state) {
        $scope.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };

        $scope.goTo = function (tab) {
            $state.go(tab)
        };

    })

    .controller("FrontPageController", function ($scope) {
        $scope.date = new Date();
        $scope.viewCircle = function (what) {
            console.log('yes');
            $scope.info = what;
        };
    });
