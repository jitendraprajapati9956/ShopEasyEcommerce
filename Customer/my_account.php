<?php
session_start();
if(!isset($_SESSION['customer_email'])){ /* video 115 start */
    echo "<script>window.open('../checkout.php','_self')</script>";
} else{ 
include("Includes/db.php");
include("Functions/functions.php");
?> <!-- video 115 end -->

<!DOCTYPE html> <!--video 44 start-->
<html>
   <head> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="Style/style.css">
        <link rel="stylesheet" href="Tools/fonts/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script>

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.min.css"rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHS0D2xbE+QkPxCAFlNEevoEH3S10sibVcOQVnN" crossorigin="anonymous">
  </head>
      <body>
          <div id="top"> 
              <div class="container">
                  <div class="col-md-6 offer">
                     <a href="#" class="btn btn-success btn-sm">Welcome Guest
                     </a>
                     <a href="#">Shopping Cart Total Price:INR 100,Total Items
                     </a>
                  </div>

                  <div class="col-md-6">
                     <ul class="menu">
                         <li>
                             <a href="../customer_registration.php">Register</a>
                         </li>

                         <li>
                             <a href="my_account.php">My Account</a>
                         </li>

                         <li>
                             <a href="../cart.php">Go To Cart</a>
                         </li>

                         <li>
                             <a href="../login.php">Login</a>
                         </li>
                      </ul>
                  </div>
              </div>
          </div> 

          <div class="navbar navbar-default" id="navbar"> 
              <div class="container">
                 <div class="navbar-header">
                      <a class="navbar-brand home" href="../bootstrap.php">
                         <img src="Images/Desert.jpg" alt="Desert" height="50px" width="50px">
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
                                 <a href="../bootstrap.php"> Home </a>
                             </li>
                             <li>
                                 <a href="../shop.php"> Shop </a>
                             </li>
                             <li>
                                 <a href="my_account.php"> My Account </a>
                             </li>
                             <li>
                                 <a href="../cart.php"> Shopping Cart </a>
                             </li>
                             <li>
                                 <a href="../contactus.php"> Contact Us </a>
                             </li>                    
                          </ul>
                     </div>
                       <a href="cart.php" class="btn navbar-btn btn-primary right">
                          <i class="fa fa-shopping-cart"></i>
                          <span> 4 items in cart </span>
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
          </div> 

          <div class="collapse clearfix" id="search"> 
             <form class="navbar-form" method="get" action="result.php">
                 <div class="input-group">
                     <input type="text" name="user_query" placeholder="Search"
                      class="form-control" required>
                      <span class="input-group-btn"></span>
                      <button type="submit" value="Search" name="search"
                         class="btn btn-primary">
                         <i class="fa fa-search"></i>
                      </button>
                  </div>
              </form>
          </div> 

          <div id="content">
              <div class="container">
                  <div class="col-md-12">
                      <ul class="breadcrumb">
                          <li> <a href="home.php"> Home </a></li>
                          <li>
                              My Account
                          </li>
                      </ul>
                  </div> 

                  <div class="col-md-3">
                      <?php
                      include("Includes/sidebar.php");
                      ?>
                  </div> <!--video 44 end-->

                  <div class="col-md-9"> <!--video 47 start-->
                      <?php
                      if(isset($_GET['my_order'])){
                      include("my_order.php");
                      }
                      ?> <!--video 47 end-->

                      <?php /* video 51 start */
                      if(isset($_GET['pay_offline'])){
                      include("pay_offline.php");
                      }
                      ?> <!-- video 51 end -->
                      
                      <?php /* video 52 start */
                      if(isset($_GET['edit_act'])){
                      include("edit_act.php");
                      }
                      ?> <!-- video 52 end -->

                      <?php /* video 54 start */
                      if(isset($_GET['change_pass'])){
                      include("change_password.php");
                      }
                      ?> <!-- video 54 end -->

                      <?php /* video 55 start */
                      if(isset($_GET['delete_ac'])){
                      include("delete_ac.php");
                      }
                      ?> <!-- video 55 end -->
                  </div> 
              </div>
          </div> 

          <?php
          include("Includes/footer.php");
          ?> 

           <script src="Tools/js/jquery-3.6.0.min.js">
           </script> 

           <script src="Tools/js/bootstrap.min.js">
            </script>

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
            </script>

          <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> -->
          <!-- </script> -->
      </body>
</html> 
<?php   }  ?>