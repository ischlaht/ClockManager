

<?php
    function reDirIndex(){
        if(!isset($_COOKIE['UserName']) && !isset($_SESSION['UserName'])){
				header('location: ../Index/Index.php');
        }
	}
    reDirIndex();
?>


<html>
    <head>
    <?php
        require('../Components/Statik/Header/Header.php');
    ?>
    </head>


    <body>
        <div id="HomePage" ng-controller="Homee">
        <input type="button" id="button" ng-click="clicked()"/>
        
        </div>
    </body>


<script>
var HomePage = angular.module('HomePage', ['ngSanitize'])
HomePage.controller('Homee', ['$scope', '$http', function ($scope, $http) {
    $scope.clicked = function(){
     alert('testig angular config');
    }
    
}]); // End of Login System and Controller...

$('#HomePage').ready( function () {
  angular.bootstrap($('#HomePage'), ['HomePage'])
});

</script>







</html>