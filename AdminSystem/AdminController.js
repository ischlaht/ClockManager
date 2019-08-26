// import { Component } from "react"

// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------

var AdminSystem = angular.module("AdminSystemOne", ["ngSanitize"]);
AdminSystem.controller("EditAccount", [
  "$scope",
  "$http",
  function($scope, $http) {
    // document.addEventListener("click", function(event) {
    // $(document).click(function() {
    //   // $scope.EditUserName = false;
    //   alert($scope.EditUserName);
    //   // $event.preventDefault();
    // });

    //   -------------------------------------------------------
    //   -------------------------------------------------------
    //   -------------------------------------------------------
    //   -------------------------------------------------------

    ($scope.InitAccountListing = function() {
      $http({
        method: "get",
        url: "./AdminController.php?VariableSetter=true",
      }).then(function(response, data) {
        console.log("User Data Initialized");
        $scope.Records = response.data;

        if (response.data.IsAdmin == "true") {
          $scope.ShowAdminDetails = true;
        } else {
          $scope.ShowAdminDetails = false;
        }
      });
    }),
      //   -------------------------------------------------------
      //   -------------------------------------------------------
      //   -------------------------------------------------------
      //   -------------------------------------------------------

      ($scope.EditAccount = function(EditThis, event) {
        var FD = new FormData();

        var Edit = EditThis;
        var newValue = $scope.EditAccountValue;

        FD.append("Edit", Edit);
        FD.append("newValue", newValue);

        $http({
          method: "POST",
          url: "./AdminController.php?UpdateAccount=true",
          data: FD,
          headers: {
            "Content-Type": undefined,
          },
        }).then(function(response, data) {
          // console.log("Profile Updated");
          console.log(response.data);
          $scope.UpdateAccountMessage = response.data;
          // $scope.EditUserName = false;
        });
        // event.preventDefault();
        // event.stopPropagation();
      });
  },
]); // End of Login System and Controller...

//   -------------------------------------------------------
//   -------------------------------------------------------
//   -------------------------------------------------------
//   -------------------------------------------------------

$("#AdminSystem").ready(function() {
  angular.bootstrap($("#AdminSystem"), ["AdminSystemOne"]);
});

// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------

// Initializing Collapsables for materialize
document.addEventListener("DOMContentLoaded", function() {
  var elems = document.querySelectorAll(".collapsible");
  var instances = M.Collapsible.init(elems);
});

// Or with jQuery

$(document).ready(function() {
  $(".collapsible").collapsible();
});