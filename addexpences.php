
<?php
error_reporting(0);
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
 include($file1);
 echo '
 <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />';
?>
<?php
$id = $_GET['id'];
if(!empty($id))
{

    mysqli_query($conn,"DELETE FROM `expences` WHERE `s_no` = '$id'");
    header("location:expences.php");
    exit();
}
?>
<style>
  body {
    overflow-y: auto;
    position: relative;
    
}
 div.container{
     
     position:relative; 
}

  </style>  

<br>
 <h3>Home >> Payment</h3>
 <a class="btn btn-success mx-2" href="/gujratsports/payment.php">Add Payment<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/_pendingpayment.php">Pending Payment<span class="sr-only">(current)</span></a>

 <a class="btn btn-primary mx-2" href="/gujratSports/Expences.php">Expences List<span class="sr-only">(current)</span></a>

 
 <a class="btn btn-success mx-2" href="/Sportsclub/client/user/signup.php">Total Revanue<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/package.php">Packages<span class="sr-only">(current)</span></a>


 <div class="container">

<?php

        echo '<form action="_handleExpence.php" method="post">



        <div class="form-group my-4 col-md-4"  style="display:snone">
        <label class="control-label">Type Of Expence :</label>
    <input type="text" class="form-control" name="type" maxlength="20" required> 
   </div>
        <div class="form-group my-4 col-md-4">
        
          <label for="exampleInputEmail1">Payment Amount (Rs.)</label>
          <input type="text" class="form-control" name="amount" maxlength="30">
        </div>
        <div class="form-group my-4 col-md-4"  style="display:snone">
          <label class="control-label">Paid By :</label>
          
          <select class="input-large m-wrap form-control" name="payby" required>			<option value="">Select...</option>
                    <option value="Cash">Cash</option>			  
                    <option value="Check">Check</option>		
                    <option value="Internet Banking">Internet Banking</option>
                     <option value="Debit Card">Debit Card</option>
                              <option value="Credit Card">Credit Card</option>
                             <option value="paytm">Paytm</option>
                             <option value="googlepay">Google Pay</option>
                             
                             <option value="phonepay">Phone Pay</option>
                             <option value="bhimapp">Bhim App</option>
                    </select> 
          </div>
        <input type="hidden" name="date" value="'.date("d-m-y").'" >
        <input type="hidden" name="MONTH" value="'.date("m").'" >
        <input type="hidden" name="YEAR" value="'.date("y").'" >

        
         <input type="hidden" name="uno" value="'.$userno.'">
        <button type="submit" class="btn btn-success " required>Submit</button>';
        // $_POST['uno'] = NULL;

    

?>


  

</form>
 </div>