<div class="row" ng-app>

    <h3>Angular</h3>
    <div> guaiguai </div>

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

    function catchFood( $scope ){
        $scope.foodA = 'carrert';
        $scope.foodB = 'bread';
        $scope.foodC = 'noodle';
        $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;

        $scope.getFood = function(){

            $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;

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
    }

</script>