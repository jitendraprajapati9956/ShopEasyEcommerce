<?php /* video 171 start */
  
  if(!isset($_SESSION['admin_email'])){
   echo "<script>window.open('login.php','_self')</script>"; 
  } 
  else{

?>

<div class="row"><!--row start-->
      <div class="col-lg-12"><!--col-lg-12 start-->
          <ol class="breadcrumb"><!--breadcrumb start-->
          <li class="active">
          <i class="fa fa-dashboard"></i>
                  dashboard/view  customers
          </li>
 </ol>
      
     </div>
</div>

<div class="row">
       <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                      <i class="fa fa-money fa-fw"></i> View customers
                  </h3>

               </div>

               <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                          <tr>
                            <th> customer NO</th>
                            <th>  customer name</th>
                            <th> customer email</th>
                            <th>customer  image</th>
                            <th>customer  country </th>
                            <th> customer city</th>
                            <th> customer phone number</th>
                            <th>customer delete</th>
                          </tr>
                    </thead>
                  <tbody>
                      <?php
                          
                          $i=0;
                          $get_c="select * from custommers";
                          $run_c=mysqli_query($con,$get_c);

                          while($row_c=mysqli_fetch_array($run_c)){

                            $c_id=$row_c['customer_id'];
                            $c_name=$row_c['customer_name'];
                            $c_email=$row_c['customer_email'];
                            $c_image=$row_c['customer_image'];
                            $c_country=$row_c['customer_country'];
                            $c_city=$row_c['customer_city'];
                            $c_contact=$row_c['customer_contact'];
                            $i++;
                            
                            ?>

                          <tr> 

                                   <td><?php   echo $i;   ?>   </td>
                                   <td><?php   echo $c_name;   ?>   </td>
                                   <td><?php   echo $c_email;   ?>   </td>
                                    <td><img src="Customer/Customer Images/<?php   echo $c_image;  ?>" width="60" height="60"></td>
                                   <td><?php   echo $c_country;   ?>   </td>
                                   <td><?php   echo $c_city;   ?>   </td>
                                   <td><?php   echo $c_contact;   ?>   </td>
                                   <td>
                                       <a href="index.php?customer_delete=<?php   echo $c_id;   ?>" > 
                                      <i class="fa fa-trash-o"></i> delete
                                       </a>
                                    </td>

                          </tr>
     <?php            }           ?>

                  </tbody>
          </table>
                </div>
               </div>
           </div>
       </div>
</div>
<?php    }   ?> <!-- video 171 end -->