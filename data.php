<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="icon" type="png" href="img/logo.png" />
    <title>YW8 - Live Waiting Times</title>

    <!-- Bootstrap Core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.css" rel="stylesheet">
     <!-- Theme CSS -->
     <link href="css/yw8.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>


</head>




<body id="page-top" ng-app="main" ng-controller="searchController">

<?php
// include 'header.php'
?>


        <section id="features" style="padding-bottom:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 text-center">
                        <div class="section-heading">
                            <h2>User data</h2>
                            <hr>

                             <table class="table">
    <thead>
      <tr >
        <th class='text-center' colspan="2" >Count data started on 3rd April 2017</th>


      </tr>
    </thead>
    <tbody>

      <tr class="success">
        <td>Search made</td>
        <td class='text-left'><b>{{count}}</b></td>
      </tr>
      <tr class="danger">
        <td>Users</td>
        <td class='text-left'><b>{{user}}</b></td>
      </tr>
     <!--  <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
        <td>bo@example.com</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
        <td>act@example.com</td>
      </tr> -->
    </tbody>
  </table>
                        </div>
                      <!--   <a href="mail.php" class="btn btn-info" role="button" ng-click="sendMail()">Get Email</a>
                        <br/>
                         <div class="alert alert-success" style="display:none" id="myAlert">
                <strong>Success!</strong> This alert box could indicate a successful or positive action. -->
                    </div>
                    </div>
                </div>

                </div>
            </div>
        </section>

         <section id="features" style="padding-top:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12  text-center">
                        <div class="section-heading">
                           <!--  <h3>Search list made on {{date}}</h3>
 -->
                            <h3> Select Date to filter results </h3> <input type="date" ng-model="filter" ng-change="newData()" min="2017-04-03" ></input>
                            <hr>
                            <h3> <b> Summary: </b> {{s_user}} users made {{s_search}} searches</h3>

                             <table class="table">
    <thead>
      <tr >
        <th class='text-center'> Time</th>
         <th class='text-center'> User IP</th>
          <th class='text-center'> Search Term</th>
           <th class='text-center'> Restaurant</th>
            <th class='text-center'> Restaurant Address</th>
      </tr>
    </thead>
    <tbody>

      <tr class="success" ng-repeat="data in dateResult">

        <td ><b>{{data.time}}</b></td>
         <td ><b>{{data.user}}</b></td>
          <td ><b>{{data.search}}</b></td>
           <td ><b>{{data.restaurant}}</b></td>
            <td ><b>{{data.restaurant_address}}</b></td>
      </tr>

    </tbody>
  </table>
                        </div>
                        <a href="mail.php" class="btn btn-info" role="button" ng-click="sendMail()">Get Email</a>
                        <br/>
                         <div class="alert alert-success" style="display:none" id="myAlert">
                <strong>Success!</strong> This alert box could indicate a successful or positive action.
                    </div>
                    </div>
                </div>

                </div>
            </div>
        </section>


<footer class=" visible-sm visible-xs">
    <div class="container">
        <p>&copy; 2017 Dishq Tech Pvt Ltd.</p>
        <p> help@wy8.in </p>
        <ul class="list-inline">
             <li>
                <a href="https://www.facebook.com/whyw8">Facebook</a>
            </li>
            <li>
                <a href="prizes.php">Win Prizes</a>
            </li>
            <li>
                <a href="privacy.php">Privacy</a>
            </li>
            <li>
                <a href="terms.php">Terms</a>
            </li>
            <li>
                <a href="#">FAQ</a>
            </li>
        </ul>
    </div>
</footer>




  <?php
  include 'footer.php';
  ?>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

  <script>
         var app = angular.module('main', []);
         app.controller('searchController', function($scope, $http, $filter) {

         var countData = "http://yw8.in/count.php";
         var dateData = "http://yw8.in/date.php";
         var D = new Date(Date.now() - 86400000).toString().split(" ");
         var newDate = $filter('date')(Date.now(), "yyyy/MM/dd");
         // $scope.today = $filter('date')(Date.now(), "yyyy-MM-dd");

         $scope.filter = new Date();


         console.log($scope.date);
         $scope.dateResult = '';
            $http({
                method: 'get',
                url: countData,
                // params: {date: }
            }).
             success(function(status) {


                $scope.count = status.data;
                $scope.user = status.user;
            }).
            error(function(status) {


            });

            fetch(newDate);
            $scope.newData = function(){
                 var raw = $scope.filter.toString().split(" ");

                  var dateFormat = $filter('date')($scope.filter, "yyyy/MM/dd");
                  fetch(dateFormat);
                  console.log(dateFormat);
            }


            function fetch(newDate){
              $scope.date = newDate;
              $http({
                method: 'get',
                url: dateData,
                params: {date:newDate}
            }).
             success(function(response) {
              console.log(response);
              $scope.dateResult = response.data;
              $scope.s_user = response.user;
              $scope.s_search = response.search;


            }).
            error(function(status) {


            });
            }




});



    </script>







</body>

</html>
