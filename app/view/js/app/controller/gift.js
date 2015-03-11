var eApp = angular.module('gift-app',[]);

eApp.controller('giftController',['$scope', '$http', giftController]);
function giftController($scope,$http){

    console.log('礼物页面');

    $scope.index = function(){

        var indexUrl = baseUrl + "/app/gift/index";
        $http.get( indexUrl ).success(function( json ){

            $scope.gift = json;
        });
    };

    $scope.index();
}


