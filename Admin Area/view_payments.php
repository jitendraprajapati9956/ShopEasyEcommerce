<?php /* video 176 start */
  
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
                  dashboard/view  payments
          </li>
 </ol>
      
     </div>
</div>

<div class="row">
       <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                      <i class="fa fa-money fa-fw"></i> View payments
                  </h3>

               </div>

               <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead>
                          <tr>
                            <th>payment no</th>
                            <th> invoice no</th>
                            <th> amount paid</th>
                            <th>payment method</th>
                            <th>reference no </th>
                            <th>payment  code</th>
                            <th>payment  date</th>
                            <th>delete payment</th>
                          </tr>
                    </thead>
                    <tbody>
                       <?php   
                         $i=0;
                         $get_payments="select * from payments";
                         $run_payments=mysqli_query($con,$get_payments);

                         while($row_payments=mysqli_fetch_array($run_payments)){

                           $payment_id=$row_payments['payment_id'];
                           $invoice_no=$row_payments['invoice_no'];
                           $amount=$row_payments['amount'];
                           $payment_mode=$row_payments['payment_mode'];
                           $ref_no=$row_payments['ref_no'];
                           $code=$row_payments['code'];
                           $payment_date=$row_payments['payment_date'];
                         ?>

                         <tr>
                             <td><?php   echo $i;   ?>   </td>
                             <td bgcolor="yellow"><?php   echo $invoice_no;   ?>   </td>
                             <td>INR<?php   echo $amount;   ?>   </td>
                             <td><?php   echo $payment_mode;   ?>   </td>
                             <td><?php   echo $ref_no;   ?>   </td>
                             <td><?php   echo $code;   ?>   </td>
                             <td><?php   echo $payment_date;   ?>   </td>

                             <td>
                             <a href="index.php?payment_delete= <?php   echo $payment_id;   ?>">
                               <i class="fa fa-trash-o"></i>delete
                            
                            </a>    
                             
                               </td>

                         </tr>
<?php   }    ?>
                    </tbody>
                  </table>
                </div>
               </div>
           </div>
       </div>
</div>
<?php  }   ?>
</tbody> <!-- video 176 end -->