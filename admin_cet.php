<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN PAGE OF MH-CET</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
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
                                            <a href="admin_cet.php"><img src="assets/img/logo/admin.png" height="40" width="40" alt=""> CET-Admin</a> 
                                            <ul class="submenu">
                                                <li><a href="admin_choice.php">Dashboard</a></li>
                                                <li><a href="adminlogin.php">Log out</a></li>
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
                                    <h1 data-animation="bounceIn" data-delay="0.2s">ADMIN PAGE OF MH-CET</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="main.php">Home</a></li> 
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
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Admin Can Perform</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__caption">
                                    <h3>Insert New College</h3>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                        <form action="insert_cet.php" method="post">
                            <p>Enter College To Add: </p> 
                            <input type="text" name="clgname">  
                            <p>Enter Location To Add: </p> 
                            <input type="text" name="place">
                            <p>Enter University To Add: </p> 
                            <input type="text" name="univer">
                            <h3><br>Computer Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="cocap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="cocap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="cocap3">
                            <h3><br>Civil Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="cvcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="cvcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="cvcap3">
                            <h3><br>Mechnical Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="mecap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="mecap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="mecap3">
                            <h3><br>Electrical Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="elcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="elcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="elcap3">
                            <h3><br>E & TC Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="ejcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="ejcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="ejcap3">
                            <h3><br>Link</h3>
                            <p>Insert College Link:  </p> 
                            <input type="text" name="links">
                            <p><br></p>
                            <table>
                                <tr>
                                  <td>    
                                    <input type="submit" class="border-btn border-btn2">
                              </td>
                              <td> 
                                <input type="reset"  class="button button-contactForm boxed-btn">  
                              </td>  
                                 </tr>
                              </table>
                                    
                        </form>     
                                    
                             </div>   </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__caption">
                                    <h3>Delete College</h3>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                        <form action="delete_cet.php" method="post">
                            <p>Enter College-ID to DELETE:</p> 
                            <input type="number" name="idi">
                            <p>Enter Location to DELETE: </p> 
                            <input type="text" name="place">
                            <p>Enter University To DELETE: </p> 
                            <input type="text" name="univer">
                            <h3><br>Computer Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="cocap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="cocap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="cocap3">
                            <h3><br>Civil Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="cvcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="cvcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="cvcap3">
                            <h3><br>Mechnical Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="mecap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="mecap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="mecap3">
                            <h3><br>Electrical Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="elcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="elcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="elcap3">
                            <h3><br>E & TC Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="ejcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="ejcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="ejcap3">
                            <h3><br>Link</h3>
                            <p>Delete College Link:  </p> 
                            <input type="text" name="links"> 
                            <p><br></p>
                            <table>
                                <tr>
                                  <td>    
                                    <input type="submit" class="border-btn border-btn2">
                              </td>
                              <td> 
                                <input type="reset" class="button button-contactForm boxed-btn">  
                              </td>  
                                 </tr>
                              </table>
                                    
                        </form>     
                                    
                             </div>   </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="properties properties2 mb-30">
                            <div class="properties__card">
                                <div class="properties__caption">
                                    <h3>Update College</h3>
                                    <div class="properties__footer d-flex justify-content-between align-items-center">
                        <form action="update_cet.php" method="post">
                            <p>Enter College-ID to Add:</p> 
                            <input type="number" name="idi">  
                            <p>Enter Location to UPDATE: </p> 
                            <input type="text" name="place">
                            <p>Enter University To UPDATE: </p> 
                            <input type="text" name="univer">
                            <h3><br>Computer Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="cocap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="cocap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="cocap3">
                            <h3><br>Civil Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="cvcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="cvcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="cvcap3">
                            <h3><br>Mechnical Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="mecap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="mecap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="mecap3">
                            <h3><br>Electrical Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="elcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="elcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="elcap3">
                            <h3><br>E & TC Branch</h3>
                            <p>Enter Cap1-Cut-off:  </p> 
                            <input type="float" name="ejcap1">
                            <p>Enter Cap2-Cut-off:  </p> 
                            <input type="float" name="ejcap2">
                            <p>Enter Cap3-Cut-off:  </p> 
                            <input type="float" name="ejcap3"> 
                            <h3><br>Link</h3>
                            <p>Update College Link:  </p> 
                            <input type="text" name="links">
                            <p><br></p>
                            <table>
                                <tr>
                                  <td>    
                                    <input type="submit" class="border-btn border-btn2">
                              </td>
                              <td> 
                                <input type="reset"  class="button button-contactForm boxed-btn">  
                              </td>  
                                 </tr>
                              </table>
                                    
                        </form>     
                                    
                             </div>  
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- No change -->
                
                 </div>
                 <hr>
             </div>
             <h2 align="center" style="font-size: 40px;">COMPUTER DATABASE</h2> 
        </div>
        <!-- Courses area End -->
        <!--? top subjects Area Start -->
       <!-- DATABASE -->
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

    <table width="100%" align="center" border="20" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:120%;" class="contact-title" ><b><u>Id</u></b></h2></td>
   <td><h2 style="font-size:100%;" class="contact-title" align="center"><b><u>College Name</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-1</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-2</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-3</u></b></h2></td>  
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>Location</u></b></h2></td>
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>University</u></b></h2></td>  
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqlid ="SELECT Id FROM cet_colleges";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Id"] ."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlclgname ="SELECT College_Name FROM cet_colleges";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["College_Name"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT cocap1 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["cocap1"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT cocap2 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["cocap2"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT cocap3 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["cocap3"]."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT Location FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Location"] ."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT University FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["University"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
</td>
      </tr>
   </table>
   <br><br>
   <h2 align="center" style="font-size: 40px;">CIVIL DATABASE</h2> 
   <br>
   <table width="100%" align="center" border="20" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:120%;" class="contact-title" ><b><u>Id</u></b></h2></td>
   <td><h2 style="font-size:100%;" class="contact-title" align="center"><b><u>College Name</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-1</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-2</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-3</u></b></h2></td>  
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>Location</u></b></h2></td>
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>University</u></b></h2></td>  
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqlid ="SELECT Id FROM cet_colleges";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Id"] ."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlclgname ="SELECT College_Name FROM cet_colleges";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["College_Name"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT cvcap1 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["cvcap1"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT cvcap2 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["cvcap2"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT cvcap3 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["cvcap3"]."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT Location FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Location"] ."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT University FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["University"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
</td>
      </tr>
   </table>
   <br><br>
   <h2 align="center" style="font-size: 40px;">MECHANICAL DATABASE</h2> 
   <br>
   <table width="100%" align="center" border="20" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:120%;" class="contact-title" ><b><u>Id</u></b></h2></td>
   <td><h2 style="font-size:100%;" class="contact-title" align="center"><b><u>College Name</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-1</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-2</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-3</u></b></h2></td>  
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>Location</u></b></h2></td>
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>University</u></b></h2></td>  
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqlid ="SELECT Id FROM cet_colleges";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Id"] ."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlclgname ="SELECT College_Name FROM cet_colleges";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["College_Name"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT mecap1 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["mecap1"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT mecap2 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["mecap2"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT mecap3 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["mecap3"]."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT Location FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Location"] ."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT University FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["University"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
</td>
      </tr>
   </table>
   <br><br>
   <h2 align="center" style="font-size: 40px;">ELECTRICAL DATABASE</h2> 
   <br>
   <table width="100%" align="center" border="20" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:120%;" class="contact-title" ><b><u>Id</u></b></h2></td>
   <td><h2 style="font-size:100%;" class="contact-title" align="center"><b><u>College Name</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-1</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-2</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-3</u></b></h2></td>  
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>Location</u></b></h2></td>
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>University</u></b></h2></td>  
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqlid ="SELECT Id FROM cet_colleges";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Id"] ."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlclgname ="SELECT College_Name FROM cet_colleges";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["College_Name"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT elcap1 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["elcap1"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT elcap2 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["elcap2"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT elcap3 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["elcap3"]."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT Location FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Location"] ."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT University FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["University"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
</td>
      </tr>
   </table>
   <br><br>
   <h2 align="center" style="font-size: 40px;">E&TC DATABASE</h2> 
   <br>
   <table width="100%" align="center" border="20" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:120%;" class="contact-title" ><b><u>Id</u></b></h2></td>
   <td><h2 style="font-size:100%;" class="contact-title" align="center"><b><u>College Name</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-1</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-2</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>CAP-3</u></b></h2></td>  
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>Location</u></b></h2></td>
   <td><h2 style="font-size:120%;" class="contact-title"><b><u>University</u></b></h2></td>  
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqlid ="SELECT Id FROM cet_colleges";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Id"] ."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlclgname ="SELECT College_Name FROM cet_colleges";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["College_Name"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT ejcap1 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["ejcap1"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT ejcap2 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["ejcap2"]."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlcutoff ="SELECT ejcap3 FROM cet_colleges";

$result =$conn->query($sqlcutoff);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["ejcap3"]."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT Location FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Location"] ."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT University FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["University"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
</td>
      </tr>
   </table>
<h2 align="center" style="font-size: 40px;">LINKS DATABASE</h2> 
   <br>
   <table width="100%" align="center" border="20" cellspacing="1" cellpadding="3">
    
 <tr>
   <td><h2 style="font-size:120%;" class="contact-title" ><b><u>Id</u></b></h2></td>
   <td><h2 style="font-size:100%;" class="contact-title" align="center"><b><u>College Name</u></b></h2></td>  
   <td><h2 style="font-size:80%;" class="contact-title"><b><u>LINKS</u></b></h2></td>    
</tr>
      <tr>
   <td>
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqlid ="SELECT Id FROM cet_colleges";

$result =$conn->query($sqlid);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["Id"] ."<br>";
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
    <h2 class="contact-title" style="font-size:90%;" >
    <?php
    $sqlclgname ="SELECT College_Name FROM cet_colleges";

$result =$conn->query($sqlclgname);
   if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["College_Name"]."<br>";
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
    <h2 class="contact-title"    style="font-size:90%;" >
<?php
$sqllocation ="SELECT links FROM cet_colleges";

$result =$conn->query($sqllocation);
 if($result->num_rows > 0)
{
    while($row =$result->fetch_assoc())
    {
    echo $row["links"] ."<br>";
    }
}
else
{
    echo "Zero Result Found";
}
?> 
</h2> 
</td>
      </tr>
   </table>


   <?php
 $conn -> close();
?>
    </main> 
      <!-- Scroll Up -->
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
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
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