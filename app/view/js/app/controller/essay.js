var eApp = angular.module('essay-app',[]);

eApp.controller('essayController',['$scope', '$http', essayController]);
eApp.controller('articleController',['$scope', '$http', articleController]);
eApp.controller('newsController',['$scope', '$http', newsController]);
eApp.controller('commentController',['$scope', '$http', commentController]);

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

    $scope.taobao = {
        link : 'http://shop112085443.taobao.com',
        QR_Code : baseUrl + '/app/view/images/taobao/taobao.png'
    };
}

function essayController( $scope, $http ){


}

function commentController( $scope, $http){

    var commentsUrl = baseUrl + "/app/essay/comments";
    $http.get( commentsUrl ).success(function( json ){
        $scope.comments = json;
    });

}