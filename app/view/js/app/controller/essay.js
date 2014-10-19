var eApp = angular.module('essay-app',[]);

eApp.controller('essayController',['$scope', '$http', essayController]);
eApp.controller('articleController',['$scope', '$http', articleController]);

function articleController( $scope, $http ){
    $scope.articles = [];

    var articleUrl = baseUrl + "/app/essay/getArticle";
    $http.get( articleUrl ).success(function( json ){
        $scope.articles = json;
    });
}

function essayController( $scope, $http ){


}