(function(angular) {
  'use strict';
angular.module('docsTransclusionDirective', [])
  .controller('Controller', ['$scope', function($scope) {
    $scope.name = 'Tobias';
  }])
  .directive('myDialog', function() {
    return {
      restrict: 'E',
      transclude: true,
      scope: {},
      templateUrl: 'my-dialog.php'
    };
  });
})(window.angular);