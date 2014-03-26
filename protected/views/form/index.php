<div class="row" ng-app>

    <h3>Angular</h3>
    <div> guaiguai </div>

    <div ng-controller="catchFood">

        <input type="text" ng-keyup="getFood" name="food[]" ng-model="foodA" value="" />
        <input type="text" name="food[]" ng-model="foodB" value="" />
        <input type="text" name="food[]" ng-model="foodC" value="" />
        <div>
            你现在得到的食物是 {{ allFood }}
        </div>
    </div>

</div>


<script>

    function catchFood( $scope ){
        $scope.foodA = 'carrert';
        $scope.foodB = 'bread';
        $scope.foodC = 'noodle';
        $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;

        $scope.getFood = function(){ console.log(123);
            $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;
        };

        /*this.getAllFood = function(){

            $scope.allFood = $scope.foodA + $scope.foodB + $scope.foodC;

        };
        var t = this;
        var timer = setInterval(function() {

            $scope.$apply( t.getAllFood() );

        }, 200);*/

    }

</script>