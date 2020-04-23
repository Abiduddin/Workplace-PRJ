
/// <reference path="../angular.min.js" />


var myApp = angular
    .module("myModule", [])
    .controller("myController",
        function ($scope) {
            var employee = {
                firstName: "Kalim",
                lastName: "Amjad",
                gender: "Male"
            };

            $scope.employee = employee;

        });
               