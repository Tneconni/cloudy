var eApp = angular.module('comic-app',[]);

eApp.controller('webController',['$scope', '$http', webController]);
function webController($scope, $http){

    var newsUrl = baseUrl + "/app/web/getWebsite";
    $http.get( newsUrl ).success(function( json ){
        $scope.websites = json;
    });

    $scope.changeWebsite = function( website ){
        console.log('change website');
        var l = $scope.websites.length;
        for( var i = 0; i < l; i ++){
            $scope.websites[i].active = '';
        }
        website.active = 'active';
    };

}

