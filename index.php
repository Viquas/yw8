<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Vicky">
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
    <link href="css/typeahead.css" rel="stylesheet">

     <link href="css/yw8.css" rel="stylesheet">
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-72767972-5', 'auto');
 ga('send', 'pageview');

</script>
     <!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
mixpanel.init("f6b716b475b4939a5180bdd8bed61043");</script><!-- end Mixpanel -->

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
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="header-content">
                    <div class="header-content-inner">
                        <h1 class="header_line">Check the live waiting time at 1,800+ restaurants & bars in Bangalore</h1>
                        <!-- <div class="well"> -->
                         <form>
                        <fieldset>
                  <div class="form-group">

                 <input type="text" class="form-control input-transparent" name="query" id="new"  autocomplete="off" placeholder="Enter restaurant name"  ng-model="search" ng-change="searchRestaurant()"  ng-blur="hideDropdown()">
                 <div class="row" style="margin-top:20px;" ng-show="!isHideBrand" >
                  <p class="text-center">  Including these popular places & many more! </p>
                  <div class="col-sm-2 col-xs-4 col-sm-offset-1">
                   <img class="img-responsive brands" src="img/arbor-brewing.png">
                   </img>
                 </div>
                 <div class="col-sm-2 col-xs-4">
                   <img class="img-responsive brands b-height" src="img/toit.png">
                   </img>
                 </div>
                  <div class="col-sm-2 col-xs-4">
                   <img class="img-responsive brands" src="img/Brewsky.png">
                   </img>
                 </div>
                  <div class="col-xs-offset-2 col-xs-4 col-sm-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                   <img class="img-responsive brands" src="img/BigPitcher.png">
                   </img>
                 </div>

                  <div class=" col-sm-2 col-xs-4 ">
                   <img class="img-responsive brands" src="img/social.jpg">
                   </img>
                 </div>
                </div>
                <span class="tt-dropdown-menu" ng-show="showResult" >
                  <div class="tt-dataset-2" style="display: block;">
                    <span class="tt-suggestions" style="display: block;">
                      <div class="tt-suggestion" style="white-space: nowrap; cursor: pointer;" ng-repeat="x in suggest| limitTo:7" ng-class="{'tt-is-under-cursor': hover}" ng-mouseenter="hover = true" ng-mouseleave="hover = false" ng-click="start(x)">
                        <p style="white-space: normal;" ng-cloak>{{x}}</p>
                      </div>

                    </span>
                  </div>
                </span>

                </div>

                 </fieldset>
              </form>
          <!-- </div> -->
                <h4 class="header_subline">Earn points and win prizes by sharing the waiting time on our Android app</h4>
                <div class="container_fluid">
                  <div class="row">
                    <!--   <div class="col-xs-12">
                <a href="https://play.google.com/store/apps/details?id=com.dishq.buzz&hl=en" target='_blank'> <img src="img/logo.png" class="img-responsive logo pull-right"></img></a>
              </div> -->
                    <div class="col-xs-12">
                <a href="https://play.google.com/store/apps/details?id=com.dishq.buzz&hl=en" target='_blank'> <img src="img/playstore.png" class="img-responsive playstore"></img></a>
              </div>
              </div>
              </div>
                 <br/>
                  <br/>
                   <br/>
                    <br/>
                     <br/>
                      <br/>
                       <br/>
                        <br/>
                         <br/>
                <div class="bottom">
                <div class="row hidden-sm hidden-xs">
                 <div class="col-xs-2">
                    <a href="https://www.facebook.com/whyw8" class="black-text">
                        <p class="black-text"> Facebook </p>
                    </a>
                 </div>
                 <div class="col-xs-2">
                    <a href="prizes.php" class="black-text">
                        <p class="black-text"> Win Prizes </p>
                    </a>
                 </div>
                 <div class="col-xs-2">
                    <a href="privacy.php" class="black-text">
                        <p class="black-text"> Privacy </p>
                    </a>
                 </div>
                 <div class="col-xs-2">
                    <a href="term.php">
                        <p class="black-text" > Terms </p>
                    </a>
                 </div>
                 <div class="col-xs-2">

                        <p class="black-text" style="color:rgba(253, 253, 253, 0.6);"> help@yw8.in </p>

                 </div>
                 <div class="col-md-2">

                        <h5 class="black-text" style="color:rgba(253, 253, 253, 0.6);"> © 2017 dishq Tech Pvt. Ltd. </h5>

                 </div>
                </div>
               </div>
             </div>








                     </div>

            </div>


        </div>
    </div>
</header>









    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="modal-header greenBackground" ng-show='isOpen'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center" ng-bind="resturant_title" style="color:white"></h2>
          <h5 class="text-center" ng-bind='resturant_address' style="color:white"></h5>
        </div>
         <div class="modal-header redBackground" ng-show='!isOpen'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center" ng-bind="resturant_title" style="color:white"></h2>
          <h5 class="text-center" ng-bind='resturant_address' style="color:white"></h5>
           <p class="text-center" style="color:white">Closed Now </p>
        </div>


        <div class="modal-body text-center" ng-show="waiting_time_value == 0">
            <div ng-show='isOpen'>
                <p >Waiting Time </p>
                <h3 ng-bind="waiting_time">  </h3>
             </div>

            <div ng-show='!isOpen && isAlternate'>


                 <h5 > Alternate Restaurant: </h5>
             </div>
        </div>

        <div class="modal-body text-center " ng-show="(waiting_time_value != 0 || !isOpen) && isAlternate">
          <p ng-hide='!isOpen'>Waiting Time </p>
          <h3 ng-bind="waiting_time"  ng-hide='!isOpen'> </h3>
          <h5 ng-show='waiting_time_value != 0'> Alternate Restaurant: </h5>
          <div style='border-bottom:1px solid #ccc;'></div>
          <div class="purpleBackground">
          <h3 ng-bind="similar_resturant_title" style="color:white">  </h3>
          <h5 ng-bind="similar_resturant_address" style="color:white">  </h5>
            </div>
        </div>

      </div>
    </div>
  </div>



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
    <!-- Typeahead JavaScript
 // <script src="js/typeahead.js"></script>
-->


    <script>
         var app = angular.module('main', []);
         app.controller('searchController', function($scope, $http, $timeout) {


          var restaurant;
          var restaurant_id;
          var id = 0;
          $scope.showResult = false;
          $scope.suggest = [];
          $scope.resturant_title = '';
          $scope.resturant_address = '';
          $scope.waiting_time = '';
          $scope.similar_resturant_title = '';
          $scope.similar_resturant_address = '';
          $scope.similar_waiting_time = '';
          $scope.waiting_time_value = 0;
          $scope.isOpen = true;
          $scope.isAlternate = true;
          $scope.isHideBrand = false;
          $scope.searchterm = '';
         $scope.searchRestaurant = function(){


         var url = "https://fooshu.com/api/restaurant/suggest/?query="+$scope.search;

            $http({
                method: 'get',
                url: url
            }).
             success(function(status) {
                var data = status.data;
             // console.log(data);
             if(data.length > 0){
                 restaurant = [];
                 restaurant_id= {};
                 $.each(data,function (i,val){
                        restaurant.push(val.restaurant_name + " - " + val.restaurant_address);
                        restaurant_id[val.restaurant_name+ " - " + val.restaurant_address] = val.restaurant_id; //keep reference from name -> id
                    });
             }

              $scope.searchterm = $scope.search;
             if(id == 0){

                setTimeout(suggest(restaurant), 100 );
             }



            }).
            error(function(status) {
            // console.log(status);

            });

        }

        $scope.start= function(data){

           id = restaurant_id[data];
            $scope.search = data.value;
            if(id > 0){
                $scope.detail();

            }
                    clear();
        }

        function suggest(restaurant){
          $scope.suggest = restaurant;
          $scope.showResult = true;
          $scope.isHideBrand = true;
         }





        $scope.detail = function(){
          var res_id = id;
          var str  = $scope.search;
             $http({
                method: 'get',
                url: 'https://fooshu.com/api/restaurant/'+id+'/details/'
            }).
             success(function(status) {
                var data = status.data;
                var waitingTime = data.wait_time_data;

             if(status.response == "Success"){
                    var details = data;
                    //Clear the scope variables of similar restaurants
                    $scope.similar_resturant_title = '';
                    $scope.similar_resturant_address = '';
                    $scope.isopen = true;

                    $scope.resturant_title = details.name;
                    $scope.resturant_address = details.display_address;
                    $scope.waiting_time = waitingTime.display_text;
                    $scope.waiting_time_value = waitingTime.wait_time_in_mins;

                    $scope.isOpen = details.is_open_now;
                     $scope.addSearch($scope.resturant_title, $scope.resturant_address);
                    if(($scope.waiting_time_value != 0) || !$scope.isOpen){
                      // console.log(res_id);
                            getSimilar(res_id);
                    }else{
                       setTimeout(activateModal(restaurant), 100 );
                    }

             }


            }).
            error(function(status) {
                // console.log(status);
            });

        }

        function activateModal(){
           $scope.showResult = false;
           $scope.isHideBrand = true;
            $('#myModal').modal('show');
        }


        $('#myModal').on('hidden.bs.modal', function () {

           $scope.isHideBrand = false;
           $scope.$digest();
            clear();
          // location.reload();
        })


        function clear(){
          id = 0;
             $scope.resturant_title = '';
            $scope.resturant_address = '';
            $scope.waiting_time = '';
            $scope.search = '';
             $scope.isAlternate = true;

            id=0;
        }

        $scope.addSearch = function(rest_name,rest_add){

              $.post("post_search.php", {
                  str : $scope.searchterm,

                    restaurant: rest_name,
                    resturant_address:rest_add

  }, function(result) {

    var print = jQuery.parseJSON(result);
    if (print.status == 200) {
      // console.log(print);

} else {
  console.log(print);

}
});
        }
        $scope.hideDropdown = function(){
          $timeout(function() {
             // console.log('new');
         $scope.showResult = false;
         $scope.isHideBrand = true;
         $scope.$digest();
          }, 500);

        }


        function getSimilar(res_id){

           var similarUrl = 'https://fooshu.com/api/restaurant/'+res_id+'/similar/';
           // console.log(similarUrl);
             $http({
                method: 'get',
                url: similarUrl
            }).
             success(function(status) {
                var data = status.data;

             if(data.name != null){
                    $scope.similar_resturant_title = data.name;
                    $scope.similar_resturant_address = data.display_address;
             }else{
                $scope.isAlternate = false;
             }
              setTimeout(activateModal(restaurant), 100 );

            }).
            error(function(status) {
                // console.log(status);
            });
        }
        // $scope.$digest();
});




    </script>


    <script>

    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   $("input").focus(function() {
       $('html, body').animate({

         scrollTop: $("#new").offset().top
        }, 200);
        });

}


    </script>
</body>

</html>
