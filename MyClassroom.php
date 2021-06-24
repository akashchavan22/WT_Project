<?php session_start(); 
// if(isset($_SESSION['email']))
// {
//     header('location:index.php');
//     }
 // include('config.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admina Bootstrap Admin. This is the demo of Admina. You need to purchase a license for legal use!">
    <meta name="author" content="DownTown Themes">
    <link rel="shortcut icon" href="assets/img/icon3.png">

    <title>MyClassroom</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--form validation-->
    <script type="text/javascript" src="assets/plugins/jquery.validate/jquery.validate.min.js"></script>
    <!--form validation init-->
    <script src="assets/plugins/jquery.validate/form-validation-init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- <script type="text/javascript">
			$(document).ready(function() {
				$('#datatable').dataTable();
			}); -->
		</script>

    <style>
      d {
        /* border: 1px solid black; */
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 0px;
         margin-left: 250px;
        /* background-color: lightblue; */
      }

      body{
        background-image: url('photos/myimg.png');
        background-repeat: no-repeat;
        background-size: cover;
      }

      .bg-image {
        /* The image used */
        background-image: url("photos/Sandip-foundatinn_1-02.jpeg");
        /* Center and scale the image nicely */
        background-position: center;
        position: relative;
      }

      .imgcontainer {
        text-align: center;
        margin: 0px 0 0px 0;
      }

      .carousel-inner img {
        -webkit-filter: grayscale(30%);
        filter: grayscale(30%); /* make all photos black and white */ 
        width: 1100px;
        alignment: center;
        padding-top: 25px;
        padding-left: 50px;
      }

      .carousel-caption h3 {
        color: #fff !important;
      }
      
     .header {
        padding: 30px;
        font-family: cursive;
        font-variant: small-caps;
        font-style: italic;
        padding-top: 10px;
        text-align: center;
      }
      
      .header h1 {
        background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);   
        -webkit-background-clip: text;
        color: transparent;
      }
    </style>
    <!-- <script language="javascript" type="text/javascript">
      window.history.forward();
    </script> -->
  </head>

<body>
  <!-- Navbar -->
  <?php include('include/navbar.php'); ?>
</body>

   
<body>

  <div class="header">
    <h1>MyClassroom</h1>
    <p>By. Akash Chavan</p>
  </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
		              <div class="item active">
               <div class="bg-image" title="banner">
                  <div class="container">
                     <div class="col-sm-5 mt30 slider-caption wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                        <p>Awarded as</p>
                        <h2>When you're educated, it allows you to be more worldly. It's more than just what happens in a classroom.</h2>                        <span class="orange-border"></span>
                                                                     </div>
                     <div class="col-sm-7 fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;" >
                        <img src="photos/classmates.jpg" alt="" title="" class="img-responsive slider-img-left">
                     </div>
                  </div>
               </div>
            </div>
		              <div class="item">
               <div class="bg-image" title="banner">
                  <div class="container">
                     <div class="col-sm-5 mt30 slider-caption wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                        <p>Career &amp; Opportunities</p>
                        <h2>Events in our classrooms today will prompt world events tomorrow.</h2>                        <span class="orange-border"></span>
                        <p>Apply for admissions  </p>                        <a href="http://www.sanjivanicoe.org.in/files/coeweb/landing-page/college-of-engineering-in-kopargaon-admission-2020.html" class="Avail-this-offer ">Apply online <img src="/images/read-more-arrow2.png" alt="" title=""></a>                     </div>
                     <div class="col-sm-7 fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;" >
                        <img src="photos/classmates2..jpg" alt="" title="" class="img-responsive slider-img-left">
                     </div>
                  </div>
               </div>
            </div>
		              <div class="item">
               <div class="bg-image" title="banner">
                  <div class="container">
                     <div class="col-sm-5 mt30 slider-caption wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                        <p>Career &amp; Opportunities</p>
                        <h2>The classroom should be an entrance into the world, not an escape from it.</h2>                        <span class="orange-border"></span>
                        <p>Apply for admissions  </p>                        <a href="http://www.sanjivanicoe.org.in/files/coeweb/landing-page/college-of-engineering-in-kopargaon-admission-2020.html" class="Avail-this-offer ">Apply Online <img src="/images/read-more-arrow2.png" alt="" title=""></a>                     </div>
                     <div class="col-sm-7 fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;" >
                        <img src="photos/classmates2..jpg" alt="" title="" class="img-responsive slider-img-left">
                     </div>
                  </div>
               </div>
            </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</body>

</html>