/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


"use strict";

angular.module('app', ['ui.bootstrap'])

  .directive('dateAfter', function () {
      
    return {
      
      require: 'ngModel',
      
      link: function (scope, element, attrs, ngModelCtrl) {
        var date, otherDate;
        scope.$watch(attrs.dateAfter, function (value) {
          otherDate = value;
          validate();
        });
        scope.$watch(attrs.ngModel, function (value) {
          date = value;
          validate();
        });
        function validate() {
          ngModelCtrl.$setValidity('dateAfter', !date || !otherDate || date >= otherDate);
        }        
      }
      
    };

  })

  .controller('Ctrl', function ($scope) {
  });