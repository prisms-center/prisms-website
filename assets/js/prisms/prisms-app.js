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
            templateUrl: 'partials/about.html',
            controller: 'AboutController'
        })
        .state('people', {
            url: '/people',
            templateUrl: 'partials/people.html',
            controller: 'PeopleController'
        })
        .state('publications', {
            url: '/publications',
            templateUrl: 'partials/publications.html',
            controller: 'PublicationsController'
        })
        .state('contact', {
            url: '/contact',
            templateUrl: 'partials/contact.html'
        })
        .state('about.ctools', {
            url: '/computationaltools',
            templateUrl: 'partials/computational_tools.html'
        })
        .state('about.mcommons', {
            url: '/materialscommons',
            templateUrl: 'partials/materialscommons.html'
        })
        .state('about.science', {
            url: '/science',
            templateUrl: 'partials/science.html'
        })
        .state('people.faculty', {
            url: '/faculty',
            templateUrl: 'partials/faculty_staff.html'
        })
        .state('people.students', {
            url: '/students',
            templateUrl: 'partials/students_postdocs.html'
        })
        .state('publications.publications1', {
            url: '/publications1',
            templateUrl: 'partials/publications1.html'
        })
        .state('publications.presentations', {
            url: '/presentations',
            templateUrl: 'partials/presentations.html'
        });
    $urlRouterProvider.otherwise('/prisms');
}])

    .controller("NavController", function ($scope, $location, $state) {
        $scope.isActive = function (viewLocation) {
            if ($location.path().contains('about') && viewLocation.contains('about')) {
                return true;
            } else if ($location.path().contains('people') && viewLocation.contains('people')) {
                return true;
            } else if ($location.path().contains('publications') && viewLocation.contains('publications')) {
                return true;
            }
            return viewLocation === $location.path();
        };

        $scope.goTo = function (tab) {
            $state.go(tab)
        };
    })

    .controller("FrontPageController", function ($scope) {
        $scope.date = new Date();
        $scope.viewCircle = function (what) {
            $scope.info = what;
        };
    })

    .controller("AboutController", function ($scope, $location, $state) {
        console.log('about controller');
        if ($location.path() === '/about') {
            $state.go('about.science');
        }
        $scope.isActive = function (tab) {
            return tab === $location.path();
        };
    })
    .controller("PeopleController", function ($scope, $state, $location, $http) {
        $http.get('assets/img/people/faculty.json').success(function (response) {
            $scope.faculty = response;
            return response
        });
        $http.get('assets/img/people/staff.json').success(function (response) {
            $scope.staff = response;
            return response
        });
        $http.get('assets/img/people/students.json').success(function (response) {
            $scope.students = response;
            return response
        });
        $state.go('people.faculty');
        $scope.isActive = function (tab) {
            return tab === $location.path();
        };
    })
    .controller("PublicationsController", function ($scope, $state, $location) {
        $state.go('publications.publications1');
        $scope.isActive = function (tab) {
            return tab === $location.path();
        };
    });
