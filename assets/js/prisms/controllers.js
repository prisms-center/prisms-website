'use strict';

function FrontPageController($scope) {

}

function AboutController($scope) {

}

function NewsController($scope) {

}

function MaterialsCommonsController($scope) {

}

function PeopleController($scope) {

}

function PublicationsController($scope) {

}

function ResourcesController($scope) {

}

function NavController($scope, $location) { 
    $scope.isActive = function (viewLocation) {         
        return viewLocation === $location.path();
    }
};