<?php echo $header;?>
<div ng-app="comic">

    <ul class="comic-list">
        <?php foreach($products as $product){ ?>
        <li>
            <div>
                <a href="<?php echo $product['link'];?>">
                    <image src="<?php echo $product['image'];?>"/>
                </a>
            </div>
        </li>
        <?php }?>

    </ul>

    <div ng-controller='comic-Controller'>




        <ul id="comic" >
            <li ng-repeat="comic in comics" ng-click="addSearchItem( comic )"> {{ comic }} </li>
        </ul>
        <input ng-model="newComic" value="" />
        <span class="tips" >{{ comicTips }}</span>
        <button class="add-comic" ng-click="addComic()" >Add Comic</button>


        <div class="search-filter" ng-model="searchComics">

            <span>你的选择 是什么呢...</span>
            <span class="" ng-repeat="comic in searchComics" ng-click='deleteComic(comic)' >{{ comic }}</span>

        </div>

        <a id="search" link="<?php echo $searchLink;?>" ng-click="comicGo()">漫画查询</a>

    </div>




</div>

<script>

    var myApp = angular.module('comic', []);

    myApp.controller('comic-Controller', ['$scope', function( $scope ) {

        $scope.comics = ['Narutom', 'One piece', 'Others'];
        $scope.searchComics = [];
        $scope.comicTips = '';
        $scope.newComic = '';

        $scope.addComic = function(){

            $scope.newComic = $scope.newComic.replace(/^(\s+)|(\s+)$/,'');

            if( $scope.newComic == ''){

                $scope.comicTips = '漫画名称不能为空哦...';

            }else{

                $scope.comicTips = '';
                $scope.comics.push( $scope.newComic );
                $scope.newComic = '';

            }

        };

        $scope.addSearchItem = function( comic ){

            var l = $scope.searchComics.length;

            for(var i = 0; i < l; i ++){

                if( comic == $scope.searchComics[i] ){
                    return false;
                }

            }


            $scope.searchComics.push( comic );


        };

        $scope.comicGo = function(){

            var searchComics = $scope.searchComics;

            var l = searchComics.length;

            var comicStr = '';
            for( var i = 0; i < l; i ++ ){

                comicStr += searchComics[i] + '|';

            }

            var searchButton = document.getElementById('search');

            var searchLink = angular.element( searchButton ).attr('link');

            comicStr = comicStr.replace( /(\|+)$/, '');

            if( comicStr.length > 0 ){
                searchLink += '&comicFilter=' + comicStr;
            }

            location = searchLink;

        };

        $scope.deleteComic = function( comic ){

            var l = $scope.searchComics.length;

            for( var i = 0; i < l; i ++ ){

                if( typeof $scope.searchComics[i] != 'undefined' && $scope.searchComics[i] == comic ){

                    $scope.searchComics.splice(i,1);

                }

            }

        };

    }]);

</script>
<?php echo $footer;?>