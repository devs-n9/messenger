var messenger = angular.module('messenger', [
    'ngRoute'
]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});
