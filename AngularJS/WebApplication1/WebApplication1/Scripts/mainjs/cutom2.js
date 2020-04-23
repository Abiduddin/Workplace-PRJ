
/// <reference path="../angular.min.js" />


var app = angular
    .module("myModule", [])
    .controller("myController",
        function($scope) {

            var technologies = [
                { name: "C#", likes: 0, dislikes: 0 },
                { name: "ASP.NET", likes: 0, dislikes: 0 },
                { name: "SQL", likes: 0, dislikes: 0 },
                { name: "AngularJs", likes:0, dislikes:0}
            ];

            $scope.technologies = technologies;

            $scope.incrementLikes = function(technology) {
                technology.likes++;
            };

            $scope.incrementDislikes = function (technology) {
                technology.dislikes++;
            };

        });
