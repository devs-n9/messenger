messenger.controller('FriendsController', function($scope, $http) {
    $http.get("/api/friends/get").success(function(data){
        console.log(data);
        $scope.list = data;
    });
});