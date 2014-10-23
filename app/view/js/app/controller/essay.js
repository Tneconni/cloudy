var eApp = angular.module('essay-app',[]);

eApp.controller('essayController',['$scope', '$http', essayController]);
eApp.controller('articleController',['$scope', '$http', articleController]);
eApp.controller('newsController',['$scope', '$http', newsController]);

function articleController( $scope, $http ){
    $scope.articles = [];

    var articleUrl = baseUrl + "/app/essay/getArticle";
    $http.get( articleUrl ).success(function( json ){
        $scope.articles = json;
    });
}

function newsController( $scope, $http ){

    var newsUrl = baseUrl + "/app/essay/getNews";
    $http.get( newsUrl ).success(function( json ){
        $scope.news = json;
    });

}

function essayController( $scope, $http ){


}