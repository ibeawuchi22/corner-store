(function(angular) {
  'use strict';
angular.module('includeExample', ['ngAnimate'])
  .controller('ExampleController', ['$scope', function($scope) {
    $scope.templates =
      [{ name: 'template1.php', url: 'template1.php'},
       { name: 'template2.php', url: 'template2.php'}];
    $scope.template = $scope.templates[0];
  }]);
})(window.angular);