var eApp = angular.module('poker-app',[]);

eApp.controller('pokerController',['$scope', '$http', pokerController]);

function pokerController( $scope, $http ){

    var url = "/app/poker/getComic";
    $scope.comics = [];
    $http.get( url ).success(function( json ){

        $scope.comics = json;

    });
    $scope.comicRoles = [];
    $scope.getComicRole = function(){

        var comic_id = arguments[0].item.comic_id;
        var url = "/app/poker/getComicRole?comic_id=" + comic_id;
        $http.get( url ).success(function( json ){

            $scope.comicRoles = json;

        });
    }
}