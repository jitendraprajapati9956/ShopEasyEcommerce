<div id="footer"> <!--video 19 start-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4> Pages </h4>
              <ul>
                 <li> <a href="cart.php"> Shopping Cart </a></li>
                 <li> <a href="contact.php"> Contact Us </a></li>
                 <li> <a href="shop.php"> Shop </a></li>
                 <li> <a href="checkout.php"> My Account </a></li>
              </ul>
                <hr>
                <h4> User Section </h4>
              <ul>
                 <li> <a href="checkout.php"> Login </a></li>
                 <li> <a href="customer_registration.php"> Register </a></li>
              </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
          </div>

          <div class="col-md-3 col-sm-6">
              <h4> Top Product Categories </h4>
              <ul> <!-- video 71 start -->
              <?php
                $get_p_cats="select * from product_categories";
                $run_p_cats=mysqli_query($con,$get_p_cats);
                while ($row_p_cat=mysqli_fetch_array($run_p_cats)){
                $p_cat_id=$row_p_cat['p_cat_id'];
                $p_cat_title=$row_p_cat['p_cat_title'];
                echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title</a></li>";
                }
                
                ?>
              </ul> <!-- video 71 end -->
              <hr class="hidden-md hidden-lg">
          </div>

          <div class="col-md-3 col-sm-6">
              <h4> Where To Find Us </h4>
              <p>
                  <strong> shoppy com </strong>
                  <br> Chirag
                  <br> Deesa
                  <br> Gujarat
                  <br> chirag20019@gmail.com
                  <br> +91 9328843957
              </p>
              <a href="contact.php"> Goto Contact Us Page </a>
              <hr class="hidden-md hidden-lg">
          </div>

          <div class="col-md-3 col-sm-6">
              <h4> Get The News </h4>
              <p class="text-muted">
                  Subscribe Here For Getting News Of Chirag Deesa
              </p>
              <form action="" method="post">
                  <div class="input-group">
                      <input type="text" name="email" class="form-control">
                      <span class="input-group-btn">
                          <input type="submit" class="btn btn-default" value="Subscribe">
                      </span>
                  </div>
              </form> <!-- video 19 end-->
              <hr> <!-- video 20 start-->
              <h4> Stay In Touch </h4>
              <p class="social">
                  <a href="#"> <i class="fa fa-facebook"> </i></a>
                  <a href="#"> <i class="fa fa-instagram"> </i></a>
                  <a href="#"> <i class="fa fa-whatsapp"> </i></a>
                  <a href="#"> <i class="fa fa-twitter"> </i></a>
              </p>
          </div>
      </div>
  </div>
</div> <!-- video 20 end -->

<div id="copyright"> <!--video 21 start -->
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; 2022 Mr.Chirag Modi
            </p>
        </div>

        <div class="col-md-6">
            <p class="pull-right">
                Tamplate By: <a href="www.shoppy.com"> Shoppy.com </a>
            </p>
        </div>
    </div>
</div> <!-- video 21 end -->