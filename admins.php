<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>College Finder | FIlter Colleges</title>
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
                                    <a href="main.php"><img src="assets/img/logo/lg.svg" alt=""></a>
                                </div>
                            </div>

                            <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                
                                        <li class="button-header"> 
                                            <a href="admin_choice.php"><img src="assets/img/logo/admin.png" height="40" width="40" alt="">ADMIN</a> 
                                            <ul class="submenu">
                                                <li><a href="admin_choice.php">DashBoard</a></li>
                                                <li><a href="admins.php">Admins</a></li>
                                                <li><a href="logout.php">Log out</a></li>
                                            </ul>
                                        </li>
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
                                <h1 data-animation="bounceIn" data-delay="0.5s">ADMINS of College Finder</h1>
                                <li class="button-header margin-left "><a href="admin_choice.php" class="btn">GO-BACK</a></li><br>
                                <li class="button-header margin-left "><a href="admin_register.php" class="btn">REGISTER</a></li><br>
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


<table width="1500" align="center" border="5" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:175%;" class="contact-title" align="center"><b><u>Sr.no</u></b></h2></td>
   <td><h2 style="font-size:175%;" class="contact-title" align="center"><b><u>Name</u></b></h2></td>  
   <td><h2 style="font-size:175%;" class="contact-title" align="center"><b><u>Email</u></b></h2></td>
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:175%;" >
<?php
$sqlid ="SELECT COUNT(*) FROM admin";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) 
    {
       $i=0;
while($i<$row["COUNT(*)"])
{
$i++;
echo "$i <br>";    
}
 }
}
else
{
    echo "Zero Result Found";
}
?>  
</h2> 
</td>
<td>
    <h2 class="contact-title" style="font-size:175%;" >
    <?php
    $sqlname ="SELECT username FROM admin";

$result =$conn->query($sqlname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["username"]."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?>
</h2>
</td>
<td>
    <h2 class="contact-title"    style="font-size:175%;" >
<?php
$sqlem ="SELECT email FROM admin";

$result =$conn->query($sqlem);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["email"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
      </tr>
   </table>
<hr>
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
