var eApp = angular.module('comic-role-app',[]);

eApp.controller('comicRoleController',['$scope', '$http', comicRoleController]);
eApp.controller('comicRoleDetailController',['$scope', '$http', comicRoleDetailController]);

function comicRoleController( $scope, $http ){

    $scope.baseUrl = 'http://stock.mankaa.com/index.php';
    $scope.getRoleData = function(){
        var indexUrl = $scope.baseUrl + "/comic/index/search";
        $http.get( indexUrl ).success(function( json ){
            $scope.roles = json;
        });


    };
    $scope.getRoleData();

}

function comicRoleDetailController( $scope, $http ){

    $scope.baseUrl = 'http://stock.mankaa.com/index.php';
    $scope.sku = document.getElementById('person_sku');
    $scope.getRoleData = function(){

        var indexUrl = $scope.baseUrl + "/comic/index/person/sku" + $scope.sku;
        $http.get( indexUrl ).success(function( json ){
            $scope.person = json;
        });
    };

    $scope.getRoleData();

}


