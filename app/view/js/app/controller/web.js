var eApp = angular.module('comic-app',[]);

eApp.controller('webController',['$scope', '$http', webController]);
function webController($scope, $http){

    var newsUrl = baseUrl + "/app/web/getWebsite";
    $http.get( newsUrl ).success(function( json ){
        $scope.websites = json;
    });

    $scope.changeWebsite = function(){
        console.log('change website');
    };

}

