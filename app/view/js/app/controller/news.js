var eApp = angular.module('essay-app',[]);

eApp.controller('newsController',['$scope', '$http', newsController]);



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

