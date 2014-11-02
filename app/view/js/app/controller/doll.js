var eApp = angular.module('doll-app',[]);

eApp.controller('dollController',['$scope', '$http', dollController]);
function dollController(){

    console.log('玩偶页面');

}

function articleController($scope, $http){

    var articleUrl = baseUrl + "/app/doll/article";
    $http.get( articleUrl ).success(function( json ){

        $scope.articles = json;


    });

}
