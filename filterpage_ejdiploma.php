<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>College Finder | Filter Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="main.html"><img src="assets/img/logo/lg.svg" alt=""></a>
                                </div>
                            </div>

                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li class="active" ><a href="main.php">Home</a></li>
                                                <li><a href="college.php">Colleges</a></li>
                                                <li><a href="courses.php">Courses</a>
                                                </li>
                                                <li><a href="news.php">News</a></li>
                                                <li><a href="management.php">Deemed</a></li>
                                                
                                                <!-- Button -->
                                                <li class="button-header margin-left "><a href="mainfilterpage.php" class="btn">Filter page</a></li>
                                        <li class="button-header">
                                            <a href="main.php"> &nbsp;&nbsp;<img src="assets/img/logo/userr.png" height="40" width="65" alt=""> Account</a> 
                                            <ul class="submenu">
                                                <li><a href="main.php">Dashboard</a></li>
                                                <li><a href="feedback.php">FeedBack</a></li>
                                                <li><a href="logout.php">Log out</a></li>
                                            </ul>
                                        </li>  
                                        <li><a href="vipversion.php"><img src="assets/img/gallery/computer.png" height="40" width="60" alt="">Premium</a></li>                                              
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Filter Page of Diploma </h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="mainfilterpage.php">Filter Page</a></li> 
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
     <p><br><br><p>
<?php 
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="mywebsite";

//create connection

$conn =new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error)
{
    die("Connection failed:" . $conn -> connect_error);
}
?>
<form action="filtered_ejdiploma.php" align="center" method="post">
<table width="1400" align="center" border="0" cellspacing="1" cellpadding="5">
 <tr>
   <td align="center"><h2 class="contact-title" style="font-size: 30px;" ><b><u>By Percentage</u></b></h2></td>
   <td align="center"><h2 class="contact-title" style="font-size: 30px;" ><b><u>By Location</u></b></h2></td>  
   <td align="center"><h2 class="contact-title" style="font-size: 30px;" ><b><u>By University</u></b></h2></td>
</tr>
<tr>

    <td> 
        
                <h2 class="contact-title" style="font-size: 30px;">Enter Percentage you got: </h2> 
                <input type="float" class="contact-title" style="font-size: 30px;" name="ejcap3"> 
                               <p><br></p>
                <input type="reset" style="font-size: 20px;" class="button button-contactForm boxed-btn">  
                             
              
    </td>
    <td>
        
             <h2 class="contact-title" style="font-size: 30px;">Enter Location of College: </h2> 
        <input type="text" class="contact-title" style="font-size: 30px;" name="place"> 
                               <p><br></p>
         <input type="reset" style="font-size: 20px;" class="button button-contactForm boxed-btn">  
                             
        
    </td>
    <td> 
        
                <h2 class="contact-title" style="font-size: 30px;">Enter University: </h2> 
                <input type="text" class="contact-title" style="font-size: 30px;" name="university"> 
                               <p><br></p>
                <input type="reset" style="font-size: 20px;" class="button button-contactForm boxed-btn">  
                                  
    </td>
    
 </tr>
 <tr>
     <td colspan="3" align="center">
        <br>
        <input type="submit" value="Filter Colleges" style="font-size: 30px;" class="btn">
        <!-- <a href="filterpage.php" style="font-size: 30px;" class="btn">Filter Colleges</a> -->
    </td>
 </tr>
   </table>

</form>

<p><br><br></p>



<?php
 $conn -> close();
?>

</main>
 
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->    
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>