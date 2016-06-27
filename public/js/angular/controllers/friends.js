messenger.controller('FriendsController', function($scope, $http) {
    $http.get("/api/friends/getfriends").success(function(data){
        console.log(data);
        $scope.list = data;
    });

    $scope.msg = function(msg){
        console.log("Send message to user: "+msg);
    };

    $scope.del = function(delId){
        console.log("delete user: "+delId);
        $http.get("/api/friends/delfriend/"+delId).success(function(data){
           console.log(data);
        });
    };

    

});