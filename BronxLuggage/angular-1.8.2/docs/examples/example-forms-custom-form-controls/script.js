(function(angular) {
  'use strict';
angular.module('form-example2', []).directive('contenteditable', function() {
  return {
    require: 'ngModel',
    link: function(scope, elm, attrs, ctrl) {
      // view -> model
      elm.on('blur', function() {
        ctrl.$setViewValue(elm.php());
      });

      // model -> view
      ctrl.$render = function() {
        elm.php(ctrl.$viewValue);
      };

      // load init value from DOM
      ctrl.$setViewValue(elm.php());
    }
  };
});
})(window.angular);