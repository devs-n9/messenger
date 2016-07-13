var messenger = angular.module('messenger', [
    'ngRoute',
    'ngAnimate',
    'toaster'
]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});
