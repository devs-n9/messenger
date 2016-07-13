messenger.controller('FriendsController', function($scope, $http, toaster) {
    $http.get("/api/friends/getfriends").success(function(data){
        $scope.list = data;
    });

    $scope.msg = function(msg){
        console.log("Send message to user: " + msg);
    };

    $http.get("/api/friends/getusers/").success(function(data){
        $scope.usersList = data;
    });
    
    $http.get("/api/friends/getinvites").success(function(invites){
        console.log(invites);
        invites.forEach(function(i){
            console.log(i);
            toaster.pop(
                'custom', 
                i.name + " wants to invite you.", 
                'Please invite me. <a ng-click="addfriend(' + i.id + ')" class="fa fa-check"> </a><a ng-click="delfriend(' + i.id + ')" class="fa fa-times"> </a>', 
                60000, 
                'trustedHtml'
            );
        });
        
    });
    
    $scope.invite = function(invite_id){
        console.log("invite " + invite_id);
        $http.put("/api/friends/invite/" + invite_id, function(result){
            console.log("invited");
        });
    }
    
    $scope.delfriend = function(delId){
        $http.get("/api/friends/delfriend/" + delId);
    };
    
});