messenger.controller('EventsController', function($scope, $http) {
    $http.get("/api/events/get").success(function(data){
        
        $scope.events = data;
    });

    $scope.show = function (item) {
        console.log(item);
    }
    
    
});
