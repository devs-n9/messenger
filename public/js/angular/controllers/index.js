messenger.controller('IndexController', function($scope, $http) {

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