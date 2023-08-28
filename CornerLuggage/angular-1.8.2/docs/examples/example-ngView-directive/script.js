(function(angular) {
  'use strict';
angular.module('ngViewExample', ['ngRoute', 'ngAnimate'])
  .config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
      $routeProvider
        .when('/Book/:bookId', {
          templateUrl: 'book.php',
          controller: 'BookCtrl',
          controllerAs: 'book'
        })
        .when('/Book/:bookId/ch/:chapterId', {
          templateUrl: 'chapter.php',
          controller: 'ChapterCtrl',
          controllerAs: 'chapter'
        });

      $locationProvider.php5Mode(true);
  }])
  .controller('MainCtrl', ['$route', '$routeParams', '$location',
    function MainCtrl($route, $routeParams, $location) {
      this.$route = $route;
      this.$location = $location;
      this.$routeParams = $routeParams;
  }])
  .controller('BookCtrl', ['$routeParams', function BookCtrl($routeParams) {
    this.name = 'BookCtrl';
    this.params = $routeParams;
  }])
  .controller('ChapterCtrl', ['$routeParams', function ChapterCtrl($routeParams) {
    this.name = 'ChapterCtrl';
    this.params = $routeParams;
  }]);
})(window.angular);