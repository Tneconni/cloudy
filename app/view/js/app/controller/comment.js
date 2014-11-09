var eApp = angular.module('comment-app',[]);

eApp.controller('commentController',['$scope', '$http', commentController]);
eApp.controller('listController',['$scope', '$http', listController]);
function commentController(){

    console.log('动漫评论页面');

}

function listController($scope, $http){

    var comic_id = 1;
    var articleUrl = baseUrl + "/app/comment/list?comic_id=" + comic_id;
    $http.get( articleUrl ).success(function( json ){

        $scope.comments = json;


    });

}
