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

    $scope.createCORS = function(method, url){
        var xhr = new XMLHttpRequest();
        if('withCredentials' in xhr){
            xhr.open(method, url, true);
        }else if(typeof XDomainRequest != 'undefined'){
            var xhr = new XDomainRequest();
            xhr.open(method, url);
        }else{
            xhr = null;
        }

        if(xhr){
            xhr.onload = function( json ){
                console.log(1234);

                $scope.roles = JSON.parse( json.target.response );
                //......
            };
            var q = xhr.send();

        }

    };

//    $scope.createCORS('get', $scope.baseUrl + "/comic/index/categoryRole");

    $scope.createCORS2 = function(){
        $.ajax({
            url: $scope.baseUrl + "/comic/index/categoryRole",
            type:'get',
            xhrFields:{
                withCredentials:true
            },
            success: function( json ){

                $scope.roles = json;

            }
        });
    };
    $scope.createCORS2( );
}


