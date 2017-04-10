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


<script src="js/pagination.js"></script>

<body id="page-top" ng-app="angularTable" ng-controller="listdata">

<?php
// include 'header.php'
?>


        <section id="features" class="features">
            <div class="container">
                <div class="row">

 <div class="col-lg-12 ">
                    <div role="main" class="container theme-showcase">
      <div class="" style="margin-top:90px;">
        <div class="col-lg-8">
            <div class="page-header">
                <h3 id="tables">Server Side pagination in Angular js</h3>
            </div>
            <div class="bs-component" ng-controller="listdata as data">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Full Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-show="data.users.length <= 0"><td colspan="5" style="text-align:center;">Loading new data!!</td></tr>
                        <tr dir-paginate="user in data.users|itemsPerPage:data.itemsPerPage" total-items="data.total_count">
                            <td>{{user.index}}</td>
                            <td>{{user.name}}</td>
                            <td>{{user.surname}}</td>
                            <td>{{user.fullname}}</td>
                            <td>{{user.email}}</td>
                        </tr>
                    </tbody>
                </table>
                <dir-pagination-controls
                   max-size="8"
                   direction-links="true"
                   boundary-links="true"
                   on-page-change="data.getData(newPageNumber)" >
                </dir-pagination-controls>
            </div>
        </div>
      </div>
    </div>


</div>





                    <div class="col-lg-12 text-center">
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

  var app = angular.module('angularTable', ['angularUtils.directives.dirPagination']);
app.controller('listdata',function($http){
    var vm = this;
    vm.users = []; //declare an empty array
    vm.pageno = 1; // initialize page no to 1
    vm.total_count = 0;
    vm.itemsPerPage = 10; //this could be a dynamic value from a drop down
    vm.getData = function(pageno){ // This would fetch the data on page change.
        //In practice this should be in a factory.
        vm.users = [];  $http.get("http://yw8.in/user.php").success(function(response){
            //ajax request to fetch data into vm.data
                      console.log(response);
                       vm.users = response.data;  // data to be displayed on current page.
            vm.total_count = response.total_count; // total data count.
        });
    };
    vm.getData(vm.pageno); // Call the function to fetch initial data on page load.
});



//          var app = angular.module('main', []);
//          app.controller('searchController', function($scope, $http, $timeout) {

//          var url = "http://yw8.in/count.php";

//             $http({
//                 method: 'get',
//                 url: url
//             }).
//              success(function(status) {


//                 $scope.count = status.data;
//                 $scope.user = status.user;
//             }).
//             error(function(status) {


//             });









// });




    </script>







</body>

</html>
