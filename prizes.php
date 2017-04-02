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

</head>




<body id="page-top" ng-app="main" ng-controller="searchController">

<?php
// include 'header.php'
?>


        <section id="features" class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2>Win Prizes!</h2>
                            <p class="text-muted">Earn Points, Collect Badges & Win Prizes For Giving Waiting Times!</p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="device-container">
                            <div class="device-mockup iphone6_plus portrait white">
                                <div class="device">

                                        <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                        <img src="img/mobile.png" class="img-responsive" alt="">
                                        <div class="button">
                                        <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center">Every time you give the waiting time to our community you earn points which help you collect badges.</h3>

                                </div>
                                <div class="col-md-12">
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                     <img src="img/badges.png" class="img-responsive "  alt="badges">
                                     <br/>
                                     <br/>
                                     <br/>
                                     <br/>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pad-top-down">
                                        <h3>You can earn DOUBLE and even TRIPLE points on certain days and times:</h3>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop waiting.<br>Start Living.</h2>
                <a href="https://play.google.com/store/apps/details?id=com.dishq.buzz&hl=en" class="btn btn-outline btn-xl page-scroll">Download now</a>
            </div>
        </div>
        <div class="overlay"></div>
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







</body>

</html>
