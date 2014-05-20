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
            <li ng-repeat="comic in comics"> {{ comic }} </li>
        </ul>
        <input ng-model="newComic" value="" />
        <span class="tips" ng-model="comicTips" ></span>
        <button class="add-comic" ng-click="addComic()" >Add Comic</button>

    </div>


</div>

<script>

    var myApp = angular.module('comic', []);

    myApp.controller('comic-Controller', ['$scope', function( $scope ) {

        $scope.comics = ['Narutom', 'One piece', 'Others'];

        $scope.addComic = function(){

            $scope.newComic = $scope.newComic.replace(/[^(\s+)|(\s+)$]/,'');

            if( $scope.newComic == ''){

                $scope.comicTips = '漫画名称不能为空哦...';

            }else if( $scope.newComic in $scope.comics ){


            }else{

                $scope.comics.push( $scope.newComic );
                $scope.newComic = '';

            }


        };

    }]);

</script>
<?php echo $footer;?>