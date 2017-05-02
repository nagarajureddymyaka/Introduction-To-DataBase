.controller('fhCtrl', ['$scope', '$stateParams', // The following is the constructor function for this page's controller. See https://docs.angularjs.org/guide/controller
// You can include any angular dependencies as parameters for this function
// TIP: Access Route Parameters for your page via $stateParams.parameterName
    function ($scope, $stateParams) {


    }])






  .controller('fhscheduleCtrl', function($scope, $state, $http,$ionicViewService, $ionicHistory,$window, $httpParamSerializerJQLike) {



    $scope.checkvailability= function (date, choice) {


    date2=date.toString().substring(4,15);
      inside.getMethod();
      $http({
        method: 'GET',
        url: 'https://api.mongolab.com/api/1/databases/umkchallreservaton/collections//timings?apiKey=TyMceVeajhESTqinai_x0zrA6MCtM4PR',

        contentType: "application/json"
      }).success(function (response) {
        var list = response;

        var count = 0;
        for (i = 0; i < list.length; i++) {

          console.log(list[i].date);
          console.log(date2);
          if (list[i].time==(choice) && list[i].date==(date2) && list[i].hall=="fh") {
            count++;
            // console.log(list[i].hall);


          }
          else {
            count = count;
          }
        }
        if (count == 0) {
          alert("slot available");
        }
        else {
          alert("slot not available");
        }
        console.log("inside block1" + count);

      })


    }





       $scope.confirmslot = function (date, choice) {
         // $state.go('home');

         console.log("inside register function   " + date);

            date1=date.toString().substring(4,15);


           inside.postMethod();

           $http({
             method: 'POST',
             url: 'https://api.mongolab.com/api/1/databases/umkchallreservaton/collections//timings?apiKey=TyMceVeajhESTqinai_x0zrA6MCtM4PR',
             data: JSON.stringify({
               date: date1,
               time: choice,
               hall: "fh"

             }),
             contentType: "application/json"
           }).success(function () {
             $scope.date = "";
      console.log(date1);
             alert("User created successfully ");
             $state.go('menu.home');

           })
       }

    })
