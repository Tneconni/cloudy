var eApp = angular.module('gift-app',[]);

eApp.controller('giftController',['$scope', '$http', giftController]);
eApp.controller('giftDetailController',['$scope', '$http', giftDetailController]);
eApp.controller('squadController',['$scope', '$http', squadController]);
eApp.controller('squadListController',['$scope', '$http', squadListController]);

function giftDetailController($scope,$http){

    $scope.taoId = document.getElementById('tao-id').value;
    $scope.getTaoDetail = function(){

        var indexUrl = baseUrl + "/app/gift/single/"+ $scope.taoId;
        $http.get( indexUrl ).success(function( json ){

            $scope.tao = json;
            $scope.imgShow = $scope.tao.imgGroup[0].big;
        });

    };
    $scope.getTaoDetail();

    $scope.selectImg = function( itemImg ){

        $scope.imgShow = itemImg.big;

    };
}

function giftController($scope,$http){

    $scope.moreTurn = 1;

    $scope.index = function(){

        var indexUrl = baseUrl + "/app/gift/index?page="+$scope.moreTurn;
        $http.get( indexUrl ).success(function( json ){

            $scope.gift = json;
        });
    };

    $scope.index();
    $scope.moreStatuses = ['点击加载更多','正在加载','没有更多'];
    $scope.moreStatus = {
        busy : 0,
        text : $scope.moreStatuses[0]
    };
    $scope.setMoreStatus = function( moreStatus ){
        $scope.moreStatus.busy = moreStatus;
        $scope.moreStatus.text = $scope.moreStatuses[moreStatus];
    };
    $scope.getMoreStatus = function(){ return $scope.moreStatus.busy; };

    $scope.getMoreGift = function(){
        if($scope.getMoreStatus() != 0){
            return;
        }
        $scope.setMoreStatus(1);
        $scope.moreTurn ++;
        var getMoreUrl = baseUrl + "/app/gift/index?page=" + $scope.moreTurn;
        $http.get( getMoreUrl).success(function( json ){
            var l = json.length;
            $scope.setMoreStatus( l < 12 ? 2 : 0 );
            for( var i = 0;i <l; i ++) {
                $scope.moreBtnBusy = 0;
                $scope.gift.push( json[i] );
            }
        });


    };


}

function squadController($scope,$http){

    $scope.squadId = document.getElementById('squad-id').value;
    var url = baseUrl + "/app/gift/squad/single/" + $scope.squadId;
    $http.get( url ).success(function( json ){
        $scope.taos = json.taos;
        $scope.squad = json.squad;
    });

}

function squadListController($scope,$http){

    var url = baseUrl + "/app/gift/squad-list/json";
    $http.get( url ).success(function( json ){
        $scope.squadList = json;
    });

}

