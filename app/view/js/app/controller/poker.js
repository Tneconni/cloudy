var eApp = angular.module('poker-app',[]);

eApp.controller('pokerController',['$scope', '$http', pokerController]);
eApp.controller('pokerSuitCtl',['$scope', '$http', pokerSuitCtl]);
eApp.controller('voteCtl',['$scope', '$http', voteCtl]);
//eApp.controller('voteCtl',['$scope', '$http', voteCtl]);



function voteCtl( $scope, $http ){

    $scope.voted = 0;
    $scope.vote = function( item ){

        var suitId = '1';
        var voteUrl = "/app/poker/vote/" + item.role_id + '/' + suitId;

        if( $scope.voted == 1 ){
            alert('你已经投过票了');
            return;
        }
        $http.get( voteUrl ).success( function( json ){

            $scope.voted = 1;
            alert(json.description);

        });

    };

}

function pokerSuitCtl( $scope, $http ){

    $scope.pokerSuit = [];
    $scope.suitPoker = [];
    var url = "/app/poker/getPokerSuit";
    $http.get( url).success( function( json ){

        var l = json.length;
        for( var i = 0;i < l; i ++ ){
            item = json[i];

            if(i== 0){

                item.activeClass = 'active';
                $scope.getPokerBySuit( item );

            }else{

                item.activeClass = '';

            }

            $scope.pokerSuit.push( item );
        }




    });

    $scope.deletePokerSuitActive = function(){

        var l = $scope.pokerSuit.length;
        for( var i = 0;i < l; i ++ ){
            $scope.pokerSuit[i].activeClass = '';
        }

    };

    $scope.getPokerBySuit = function( suit ){

        $scope.deletePokerSuitActive();
        suit.activeClass = 'active';
        var suitId = suit.poker_suit_id;
        pokerUrl = '/app/poker/getPokerBySuit/' + suitId;
        $http.get( pokerUrl ).success( function( json ){

            $scope.suitPoker = json;

        });

    };

}

function pokerController( $scope, $http ){

    var url = "/app/poker/getComic";
    $scope.comics = [];
    $http.get( url ).success(function( json ){

        var l = json.length;
        for( var i = 0;i < l; i ++ ){
            item = json[i];

            if(i== 0){

                item.activeClass = 'active';
                $scope.getComicRole( item );

            }else{

                item.activeClass = '';

            }

            $scope.comics.push( item );
        }

    });

    $scope.comicRoles = [];
    $scope.getComicRole = function(){

        $scope.deleteComicActive();
        arguments[0].activeClass = 'active';
        var comic_id = arguments[0].comic_id;
        var url = "/app/poker/getComicRole?comic_id=" + comic_id;
        $http.get( url ).success(function( json ){

            $scope.comicRoles = json;

        });
    }

    $scope.deleteComicActive = function(){

        var l = $scope.comics.length;
        for( var i = 0;i < l; i ++ ){
            $scope.comics[i].activeClass = '';
        }

    };

    var comicTypeUrl = "/app/poker/getComicType";
    $scope.comicTypes = [];
    $http.get( comicTypeUrl ).success( function( json ){

        $scope.comicTypes = json;

    });

    // 暂时用不到~
    $scope.getComicsByType = function( item ){

        var comicUrl = "/app/poker/getComicsByType";
        $scope.comicTypes = [];
        $http.get( comicUrl ).success( function( json ){

            $scope.comics = json;

        });

    };
}