<?php
if(!isset($_SESSION['admin_email'])){
echo "<script>window.open('login.php','_self')</script>"; 
} else{
?>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background: black"> <!-- video 129-130-131 start -->
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle Navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
    </button>
   <a href="index.php?dashboard" class="navbar-brand"> Admin panel</a>
</div>
   <ul class="nav navbar-right top-nav">
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"> </i> <?php echo $admin_name ?>
          </a>
         <ul class="dropdown-menu">
            <li>
               <a href="index.php?user_profile?id=<?php echo $admin_email ?>">
                 <i class="fa fa-fw-user"> </i> PROFILE
               </a>
            </li>
            <li>
             <a href="index.php?view_product">
               <i class="fa fa-fw-envelope"> </i> PRODUCTS
               <span class="badge"><?php echo $count_pro ?></span>
             </a>
           </li>
           <li>
             <a href="index.php?view_customer">
               <i class="fa fa-fw-users"> </i> CUSTOMER
               <span class="badge"><?php echo $count_cust ?></span>
             </a>
           </li>
           <li>
             <a href="index.php?pro_cat">
               <i class="fa fa-fw-gear"> </i> PRODUCT CATEGORIES
               <span class="badge"><?php echo $count_p_cat ?></span>
             </a>
           </li> <!-- video 129-130-131 end -->
           <li class="divider"> <!-- video 133-134 start -->

           </li> 
           <li>
             <a href="logout.php">LOG OUT
               <i class="fa fa-fw fa-power-off"></i>
             </a>
          </li>
       </ul>
     </li>
   </ul>
  
<div class="collapse navbar-collapse navbar-exl-collapse ">
  <ul class="nav navbar-nav side-nav">
      <li>
          <a href="index.php?dashboard">
              <i class="fa fa-fw fa-dashboard"></i> DashBoard
          </a>
      </li>
      <li>
          <a href="#" data-toggle="collapse" data-target="#products">
           <i class="fa fa-fw fa-tag"></i>PRODUCT 
           <i class="fa fa-fw fa-caret-down"></i>
          </a>
           
         <ul id="products" class="collapse">
           <li>
             <a href="index.php?insert_product">INSERT PRODUCT</a>
           </li>
           <li>
             <a href="index.php?view_product">VIEW PRODUCT</a>
           </li>
         </ul>
       </li>
       <li>
          <a href="#" data-toggle="collapse" data-target="#product_cat">
            <i class="fa fa-fw fa-edit"></i>PRODUCT CATEGORIES 
            <i class="fa fa-fw fa-caret-down"></i>
          </a>
      
         <ul id="product_cat" class="collapse">
           <li>
             <a href="index.php?insert_product_cat">INSERT PRODUCT CATEGORIES</a>
           </li>
           <li>
             <a href="index.php?view_product_cat">VIEW PRODUCT CATEGORIES</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="#" data-toggle="collapse" data-target="#category">
           <i class="fa fa-fw fa-book"></i> CATEGORIES 
           <i class="fa fa-fw fa-caret-down"></i>
         </a>
      
         <ul id="category" class="collapse">
           <li>
             <a href="index.php?insert_categories">INSERT CATEGORIES</a>
           </li>
           <li>
             <a href="index.php?view_categories">VIEW CATEGORIES</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="#" data-toggle="collapse" data-target="#slider">
           <i class="fa fa-fw fa-gear"></i> Slider 
           <i class="fa fa-fw fa-caret-down"></i>
         </a>
            
          <ul id="slider" class="collapse">
           <li>
             <a href="index.php?insert_slider">INSERT SLIDER</a>
           </li>
           <li>
             <a href="index.php?view_slider">VIEW SLIDER</a>
           </li>
         </ul>
       </li> 
       <li>
         <a href="index.php?view_customer">
           <i class="fa fa-fw fa-users"></i> VIEW CUSTOMER
         </a>
       </li>
       <li>
         <a href="index.php?view_order">
           <i class="fa fa-fw fa-book"></i> VIEW  ORDER
         </a>
       </li>
       <li>
         <a href="index.php?view_payments">
           <i class="fa fa-fw fa-money"></i> VIEW PAYMENTS
         </a>
       </li>
       <li>
         <a href="#" data-toggle="collapse" data-target="#users">
           <i class="fa fa-fw fa-users"></i> USER 
           <i class="fa fa-fw fa-caret-down"></i>
          </a>
      
         <ul id="users" class="collapse">
           <li>
             <a href="index.php?insert_user">INSERT USER</a>
           </li>
           <li>
             <a href="index.php?view_user">VIEW USER</a>
           </li>
           <li>
             <a href="index.php?user_profile?id=<?php echo $admin_id; ?>">EDIT PROFILE</a>
           </li>
         </ul>
       </li>
       <li>
         <a href="logout.php">
           <i class="fa fa-fw fa-power-off"></i> Logout
         </a>
       </li>
   </ul>
</div> <!-- video 133-134 end -->
</nav>      
<?php } ?>    
