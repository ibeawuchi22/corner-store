(function(angular) {
  'use strict';
angular.module('heroApp').component('heroDetail', {
  templateUrl: 'heroDetail.php',
  bindings: {
    hero: '='
  }
});
})(window.angular);