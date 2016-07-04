messenger.controller('IndexController', function($scope, $http) {

    $http.get('/api/messages/get').success(function(msgs){
        $scope.msgs = msgs;
    });
    
    $scope.uploadimage = function(){
        $('.avatar .uploader-image').click();
    }
    
    $scope.oncropper = function(cropper){
        console.log("cropper");
        cropper.setAspectRatio(1/1);
        $scope.saveimg = function(){
            console.log("save image");
            var img = document.getElementById('image');
            var result = cropper.getCroppedCanvas();
            $http.patch('/api/settings/avatar', { 'img': result.toDataURL() }).success(function(url){
                $('#avatar').attr('src', '/img/upload/' + url);
                $('#galleryModal').modal('hide');
            });
        }
    }
    
    
});

messenger.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: '/js/angular/views/index.html'
        }).when('/gallery', {
            templateUrl: '/js/angular/views/gallery/gallery.html'
        }).when('/music', {
            templateUrl: '/js/angular/views/music/music.html'
        }).when('/interests', {
            templateUrl: '/js/angular/views/interests/interests.html'
        }).when('/events', {
            templateUrl: '/js/angular/views/events/events.html'
        }).when('/settings', {
            templateUrl: '/js/angular/views/settings/settings.html'
        });
  }
]);