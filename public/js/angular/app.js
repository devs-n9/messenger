var messenger = angular.module('messenger', [
    'ngRoute',
    'toaster'
]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});
