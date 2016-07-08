messenger.controller('FriendsController', function($scope, $http) {
    $http.get("/api/friends/getfriends").success(function(data){
        $scope.list = data;
    });

    $scope.msg = function(msg){
        console.log("Send message to user: " + msg);
    };

    $http.get("/api/friends/getusers/").success(function(data){
        $scope.usersList = data;
    });
    
    $scope.invite = function(invite_id){
        console.log("invite " + invite_id);
        $http.put("/api/friends/invite/" + invite_id, function(result){
            console.log("invited");
        });
    }
    
    $scope.del = function(delId){
        $http.get("/api/friends/delfriend/" + delId);
    };
    
});