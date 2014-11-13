eApp.controller('footerController',['$scope', '$http', footerController]);
function footerController($scope, $http){
    $scope.checkMenu = function(){
        var href = location.href;
        var activeMenu = href.split('/app/')[1];
        var footer = document.getElementById('footer');
        var lis = footer.getElementsByTagName('LI');
        var l = lis.length;
        var currMenu = document.getElementById(activeMenu);
        for(var i = 0; i < l; i ++){
            lis[i].className = '';
        }
        currMenu.className += ' active';
    };
    $scope.checkMenu();

}
