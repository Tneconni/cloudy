var eApp = angular.module('comic-role-app',[]);

eApp.controller('comicRoleController',['$scope', '$http', comicRoleController]);

function comicRoleController( $scope, $http ){

    $scope.baseUrl = 'http://stock.mankaa.com/index.php';
    $scope.getRoleData = function(){

        var indexUrl = $scope.baseUrl + "/comic/index/categoryRole";
        $http.get( indexUrl ).success(function( json ){
            $scope.roles = json;
        });

    };
    $scope.getRoleData();

}


