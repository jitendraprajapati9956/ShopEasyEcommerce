<?php /* video 58 start */
session_start();
include("Includes/db.php");
include("Functions/functions.php");
?> <!-- video 58 end -->

<!DOCTYPE html> 
<html>
   <head> 

   
<link rel="stylesheet" href="Style/style.css">
<link rel="stylesheet" href="Tools/fonts/css/font-awesome.min.css">
   
  </head>
      <body>
          <div id="top"> <!--video-6 start-->
              <div class="container">
                  <div class="col-md-6 offer">
                     <a href="#" class="btn btn-success btn-sm">

                      <?php
                      if(!isset($_SESSION['customer_email'])){
                      echo "Welcome Guest";
                        } else{
                      echo "WELCOME " .$_SESSION['customer_email'] . "";
                        }

                        ?>

                     </a>
                     <a href="#">Shopping Cart Total Price:<?php totalPrice(); ?>,Total Items <?php items(); ?>
                     </a>
                  </div>

                  <div class="col-md-6">
                     <ul class="menu">
                         <li>
                             <a href="customer_registration.php">Register</a>
                         </li>

                         <li>
                             <?php
                             if(!isset($_SESSION['customer_email'])){
                             echo "<a href='checkout.php'>My Account</a>";

                             } else{
                             echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                             }
                             ?>
                         </li>

                         <li>
                             <a href="cart.php">Go To Cart</a>
                         </li>

                         <li>
                            <?php
                             if(!isset($_SESSION['customer_email'])){
                             echo "<a href='checkout.php'>LOGIN</a>";
                             } else{
                             echo "<a href='logout.php'>LOGOUT</a>";
                             }
                             ?>
                         </li>
                      </ul>
                  </div>
              </div>
          </div> <!--video-6 end-->            

            <div class="navbar navbar-default" id="navbar"> <!--video 7-8 start-->
              <div class="container">
                 <div class="navbar-header">
                      <a class="navbar-brand home" href="bootstrap.php">
                         <img src="Images/logo.jpg" alt="logo">
                         <!--<img src="Images/Hydrangeas.jpg" alt="Hydrangeas" class="visible-xs">-->
                      </a>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                         <span class="sr-only"> Toggle Navigation </span>
                         <i class="fa fa-align-justify"></i>
                      </button>

                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                         <span class="sr-only"></span>
                         <i class="fa fa-search"></i>
                      </button>
                  </div>

                 <div class="navbar-collapse collapse" id="navigation">
                     <div class="padding-nav">
                         <ul class="nav navbar-nav navbar-left">
                             <li class="active">
                                 <a href="bootstrap.php"> Home </a>
                             </li>
                             <li>
                                 <a href="shop.php"> Shop </a>
                             </li>
                             <li>
                                 <?php
                                 if(!isset($_SESSION['customer_email'])){
                                 echo "<a href='checkout.php'>My Account</a>";

                                 } else{
                                 echo "<a href='customer/my_account.php?my_order'>My Account</a>";
                                 }
                                 ?>
                             </li>
                             <li>
                                 <a href="cart.php"> Shopping Cart </a>
                             </li>
                             <li>
                                 <a href="contactus.php"> Contact Us </a>
                             </li>                    
                          </ul>
                     </div>
                       <a href="cart.php" class="btn navbar-btn btn-primary right">
                          <i class="fa fa-shopping-cart"></i>
                          <span> <?php items(); ?> items in cart </span>
                      </a>

                     <div class="navbar-collapse collapse right">
                          <button class="btn btn-primary navbar-btn" type="button"
                             data-toggle="collapse" data-target="#search">
                             <span class="sr-only"> Toggle Search </span>
                             <i class="fa fa-search"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div> <!--video 7-8 end-->

          <div class="collapse clearfix" id="search"> <!--video 9 start-->
             <form class="navbar-form" method="get" action="result.php">
                 <div class= "input-group">
                     <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                         <span class="input-group-btn">
                              <button type="submit" value="Search" name="search" class="btn btn-primary">
                                 <i class="fa fa-search"></i>
                              </button>
                          </span>
                      </input>
                  </div>
              </form>
          </div> <!--video 9 end-->

          <div class="container" id="slider"> <!--video 12-13 start-->
              <div class="col-md-12">
                  <div class="carousel slide" id="myCarousel" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                      </ol>
                      <div class="carousel-inner">
                          <?php /* video 59 start */
                          $get_slider= "select * from slider LIMIT 0,1";
                          $run_slider= mysqli_query($con,$get_slider);
                          while ($row=mysqli_fetch_array($run_slider)) {
                              $slider_name=$row['slider_name'];
                              $slider_image=$row['slider_image'];
                              echo "
                              <div class='item active'>
                              <img src='Admin Area/Slider Images/$slider_image'>
                              </div>
                              ";
                          }
                          ?> <!-- video 59 end -->

                          <?php /* video 60 start */
                          $get_slider= "select * from slider LIMIT 1,3";
                          $run_slider= mysqli_query($con,$get_slider);
                          while ($row=mysqli_fetch_array($run_slider)) {
                              $slider_name=$row['slider_name'];
                              $slider_image=$row['slider_image'];
                              echo "
                              <div class='item'>
                              <img src='Admin Area/Slider Images/$slider_image'>
                              </div>
                              ";
                          }
                          ?> <!-- video 60 end -->
                      </div>
                      <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left"></span>
                         <span class="sr-only">Previous</span>
                      </a>

                      <a href="#myCarousel" class="right carousel-control" data-slide="next">
                         <span class="glyphicon glyphicon-chevron-right"></span>
                         <span class="sr-only"></span>
                      </a>
                  </div>
              </div>
          </div> <!--video 12-13 end-->

          <div id="advantage"> <!--video 15 start-->
             <div class="container">
                 <div class="same-height-row">
                     <div class="col-sm-4">
                         <div class="box same-height">
                             <div class="icon">
                                 <i class="fa fa-heart"></i>
                             </div>
                             <h3><a href="#"></a> Best Prices </h3>
                                <p> We Will Give You Best Price In The World </p>
                         </div>
                     </div>

                     <div class="col-sm-4">
                         <div class="box same-height">
                             <div class="icon">
                                 <i class="fa fa-heart"></i>
                             </div>
                             <h3><a href="#"></a> 100% Guranteed From Us </h3>
                                <p> Free Returns On Every Items For 1 Week </p>
                         </div>
                     </div>

                     <div class="col-sm-4">
                         <div class="box same-height">
                             <div class="icon">
                                 <i class="fa fa-heart"></i>
                             </div>
                             <h3><a href="#"></a> Best Services </h3>
                                <p> We Will Give Best Services To Our Customer </p>
                         </div>
                     </div>
                 </div>
             </div>
          </div> <!--video 15 end-->

          <div id="hot"> <!--video 17 start-->
              <div class="box">
                  <div class="container">
                      <div class="col-md-12">
                          <h2> latest this Week </h2>
                      </div>
                  </div>
              </div>
          </div> <!--video 17 end-->

          <div id="content" class="container"> <!--video 18 start -->
              <div class="row">
                <?php
                getPro();
                ?>  
              </div>
          </div> 

          <?php
          include("Includes/footer.php");
          ?> <!--video 19 end -->
</body>
</html>