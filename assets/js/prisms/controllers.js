'use strict';

function FrontPageController($scope) {

}

function AboutController($scope) {

}

function NewsController($scope) {

}
function ScienceController($scope) {

}

function MaterialsCommonsController($scope) {

}

function PeopleController($scope) {

}

function PublicationsController($scope) {

}

function LinksController($scope) {

}

function NavController($scope, $location) { 
    $scope.isActive = function (viewLocation) {         
        return viewLocation === $location.path();
    }
};