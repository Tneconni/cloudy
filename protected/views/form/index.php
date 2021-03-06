<div class="row" ng-app="fisher"  ng-controller="fish">

    <h3>FISHER</h3>
    <span> test git checkout function </span>

    <span> commit after stash </span>

    <span> test stash ~ </span>

    <span> test stash again </span>
    <div ng-controller="fishType">
        <h3>Fish Type</h3>
        <div  class="fish-type">
            <div class="fish-type-single" ng-repeat=" type in fishType ">
                <span class="type-id" style="display:none">{{type.id}}</span>
                <input type="text" class="type-name" ng-model="type.name" >
                <a ng-click="delFishType()">del</a>
            </div>
            <a ng-click="addFishType()">Add Fish Type</a>
        </div>

        <h3>选择你自己的鱼</h3>
        <select ng-model="myFish" ng-options="type.name for type in fishType"></select>
        <div>
            你最终的决定：{{myFish.name}}
        </div>
    </div>


    <div ng-controller="catchFood">
        <div>
            <input type="text" ng-keyup="getFood()" name="food[]" ng-model="foodA" value="" />
            <input type="text" name="food[]" ng-model="foodB" value="" />
            <input type="text" name="food[]" ng-model="foodC" value="" />
        </div>

        <div>
            你现在得到的食物是 {{ allFood }}
        </div>
    </div>

    <div class="blank20"></div>
    <div ng-controller="growUp">

        <div>
            <button ng-click="levelUp()">
                level up
            </button>
            <button ng-click="levelDown()">
                level down
            </button>
            <span>生存等级： </span>
            <span> {{level}} </span>
        </div>
    </div>
</div>


<script>

    //todo try code a service
    var app = angular.module("fisher", []);
    app.factory('searchFisher', function(){

        var fishTypeDom = angular.element('.fish-type');
        var fishTypes = [];

        // not get the fish type , because the type has not load at this time
        angular.forEach( fishTypeDom, function( dom, index ){

            var typeDom = angular.element( dom );
            var singleType = {
                id : typeDom.find('span').eq(0).html(),
                name : typeDom.find('span').eq(1).html()
            };
            fishTypes.push = singleType;

        } );
        var ret = {
            'food' : 'asd',
            'fisher' : 'esc',
            getFishType : function( ){
                return {
                    count : 3,
                    type : fishTypes
                };
            }
        };

        return ret;

    });


    function fishType( $scope ){
        $scope.fishType = [
            {
                id : 1,
                name : 'liyu'
            },
            {
                id : 3,
                name : 'jinyu'
            },
            {
                id : 2,
                name : 'caoyu'
            }
        ];
        $scope.singleFishType = {
            id : '',
            name : ''
        };

        $scope.addFishType = function(){

            $scope.fishType.push({
                id: $scope.fishType.length,
                name : ''
            });

        };
        $scope.delFishType = function( index ){

            $scope.fishType.splice( index, 1 );

        };

    }

    app.controller("fish", ['$scope', 'searchFisher', function($scope, searchFisher ){

        var type = searchFisher.getFishType();
        console.log( type );
        $scope.$on("changeFoodA", function( event, msg ){
            console.log( 'changeFoodA', msg);

            $scope.$broadcast("sendFoodA", msg);
        });

    }]);

    function catchFood( $scope ){
        $scope.foodA = 'carrert';
        $scope.foodB = 'bread';
        $scope.foodC = 'noodle';
        $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;

        $scope.getFood = function(){

            $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;

            //todo emit a change to parent controller
            $scope.$emit( "changeFoodA", $scope.foodA );

        };



    }

    function growUp( $scope ){

        $scope.level = '0';
        $scope.levelUp = function(){
            $scope.level ++;
        };
        $scope.levelDown = function(){
            if( $scope.level > 1 ){
                $scope.level --;
            }else{
                $scope.level  = 0;
            }

        };

        $scope.$on( "sendFoodA", function( event, msg ){
            console.log( event );
            console.log("get the newest foodA", msg);
        });
    }

</script>