messenger.controller('FriendsController', function($scope, $http) {
    $http.get("/api/friends/getfriends").success(function(data){
        $scope.list = data;
    });

    $scope.msg = function(msg){
        console.log("Send message to user: "+msg);
    };

    //$scope.searchUser = function(search){
    $http.get("/api/friends/getusers/").success(function(data){
            $scope.usersList = data;
        });
    // };
    
    $scope.del = function(delId){
        $http.get("/api/friends/delfriend/"+delId);
    };
    
});