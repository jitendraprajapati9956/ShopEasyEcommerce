<?php
session_start(); 
include("Includes/db.php");
include("Functions/functions.php");
?>

<!DOCTYPE html> <!-- video 43 start -->
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
                     <a href="#" class="btn btn-success btn-sm">

                      <?php /* video 103 start */
                      if(!isset($_SESSION['customer_email'])){
                      echo "Welcome Guest";
                        } else{
                      echo "WELCOME " .$_SESSION['customer_email'] . "";}
                      ?> <!-- video 103 end -->

                     </a>
                     <a href="#">Shopping Cart Total Price:INR 100,Total Items
                     </a>
                  </div>

                  <div class="col-md-6">
                     <ul class="menu">
                         <li>
                             <a href="customer_registration.php">Register</a>
                         </li>

                         <li>
                             <a href="Customer/my_account.php">My Account</a>
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
          </div> 

            <div class="navbar navbar-default" id="navbar"> 
              <div class="container">
                 <div class="navbar-header">
                      <a class="navbar-brand home" href="bootstrap.php">
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
                                 <a href="bootstrap.php"> Home </a>
                             </li>
                             <li>
                                 <a href="shop.php"> Shop </a>
                             </li>
                             <li>
                                 <a href="Customer/my_account.php"> My Account </a>
                             </li>
                             <li>
                                 <a href="cart.php"> Shopping Cart </a>
                             </li>
                             <li>
                                 <a href="about.php"> About Us </a>
                             </li>
                             <li>
                                 <a href="services.php"> Services </a>
                             </li>
                             <li>
                                 <a href="contactus.php"> Contact Us </a>
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
                              Registration  
                          </li>
                      </ul>
                  </div>

                  <div class="col-md-3">
                      <?php
                      include("Includes/sidebar.php");
                      ?>
                  </div>
                  
                  <div class="col-md-9">
                      <div class="box">
                          <div class="box-header">
                              <center>
                                  <h2> Customer Registration </h2>
                              </center>
                          </div>
                          <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                  <label> Customer Name </label>
                                  <input type="text" name="c_name" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> Customer Email </label>
                                  <input type="text" name="c_email" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> Customer Password </label>
                                  <input type="password" name="c_password" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> Country </label>
                                  <input type="text" name="c_country" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> City </label>
                                  <input type="text" name="c_city" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> Contact Number </label>
                                  <input type="text" name="c_number" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> Address </label>
                                  <input type="text" name="c_address" required="" class="form-control">
                              </div>
                              <div class="form-group">
                                  <label> Image </label>
                                  <input type="file" name="c_image" required="" class="form-control">
                              </div>
                              <div class="text-center">
                                  <button type="submit" name="submit" class="btn btn-primary">
                                      <i class="fa fa-user-md"></i> Register
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div> <!-- video 43 end -->
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

<?php /* video 98-99-100-101 start */
if (isset($_POST['submit'])) {
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_password=$_POST['c_password'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_contact'];
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIP();

    move_uploaded_file($c_tmp_image,"Customer/Customer_Images/$c_image");//vidio 99 start
  
    $insert_customer="insert into custommers (customer_name,customer_email,customer_pass,customer_country,
    customer_city,customer_contact,customer_address,customer_image,customer_ip) values('$c_name',
    '$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image',$c_ip)";//vidio 99 end
    $run_customer=mysqli_query($con,$insert_customer);
    $sel_cart="select * from cart where ip_add='$c_ip'";
    $run_cart=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_cart);
    if($check_cart>0){
        $_SESSION['customer_email']=$c_email;
        echo "<script>alert('you have been registered successfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
         } else {
        $_SESSION['customer_email']=$c_email; 
        echo "<script>alert('you have been registered successfully')</script>";
        echo "<script>window.open('bootstrap.php','_self')</script>"; 
    }
}
?> <!-- video 98-99-100-101 end --> 