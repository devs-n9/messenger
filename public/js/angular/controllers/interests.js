messenger.controller('InterestsController', function($scope, $http) {
    $http.get("/api/interests/get").success(function(data){
        console.log(data);
        $scope.list = data;
    });
});