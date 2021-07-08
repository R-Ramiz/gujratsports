<?php
error_reporting(0);
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
 include($file1);
 echo '
 <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />';
?>
<style>
  body {
    overflow-y: auto;
    position: relative;
    
}
 div.container{
     
     position:relative; 
    /* display:flex;  */
}

  </style>  

<br>
 <h3>Home >> Payment</h3>
 <a class="btn btn-primary mx-2" href="/gujratsports/payment.php">Add Payment<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/_pendingpayment.php">Pending Payment<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/Expences.php">Expences<span class="sr-only">(current)</span></a>

 
 <a class="btn btn-success mx-2" href="/gujratSports/total.php">Total Revanue<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/package.php">Packages<span class="sr-only">(current)</span></a>


 <div class="container">

 <form action="Payment.php" method="GET" >

<div class="form-group my-4 col-md-4">

  <p>Enter User No. or Mobile No.</p>
  <p><input type="text" class="form-control" id="signupEmail" name="uno" maxlength="20" autocomplete="off">
  <button type="submit" class="btn btn-success " href="">
  <i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">(current)</span></button></p>
</div>
</form>
<?php
if(!empty($_GET['sno']))
{
  
  $sno = $_GET['sno'];
  $sql ="SELECT * FROM (staff) where (sno = '$sno')";  
  $result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_assoc($result))
        {  
            

          echo 'Unser No.: ';
          echo $sno = $row['sno']."<br><br>";

          echo "Name :  ";
          echo $userid = $row['FIRSTNAME'].' '.$row['LASTNAME']."<br><br>";
          
          echo "Mobile No :  ";
          echo $username = $row['MOBILE']."<br><br>";

         
          echo 'Total:    ';
          echo $total = $row['TOTAL']."<br><br>";
          
          echo 'Paid:    ';
          echo $paid = $row['PAID']."<br><br>";
          
          echo 'Pending: ';
          echo $Pending = $row['PENDING']."<br><br>";
          
          
        }

        echo '<form action="_addPayment.php" method="GET">



        <div class="form-group my-4 col-md-4">
        
          <label for="exampleInputEmail1">Payment Amount (Rs.)</label>
          <input type="text" class="form-control" name="amount" maxlength="20" autocomplete="off">
        </div>
        <div class="form-group my-4 col-md-4"  style="display:snone">
          <label class="control-label">Paid By :</label>
          
          <select class="input-large m-wrap form-control" name="payby">			<option value="">Select...</option>
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
<input type="hidden" name="type" value="Salary of '.$userid.'">

<input type="hidden" name="date" value="'.date("d-m-y").'">
<input type="hidden" name="datemn" value="'.date("m").'">
<input type="hidden" name="dateyr" value="'.date("y").'">

<input type="hidden" name="sno" value="'.$sno.'">
<button type="submit" class="btn btn-success ">Submit</button>';
}
// --------------------------------------------------------------------
else{


if(!empty($_GET['uno']))
{
$t = $_GET['uno'];
$sql ="SELECT * FROM (users) where (uno = '$t') OR (MOBILE  = '$t')";
$result = mysqli_query($conn,$sql);
$numRows = mysqli_num_rows($result);
if($numRows==0)
{
    echo "Please enter valid number";
}
else{
    
        while($row = mysqli_fetch_assoc($result))
        {  
            

          echo 'Unser No.: ';
          echo $userno = $row['uno']."<br><br>";

          echo "Name :  ";
          echo $userid = $row['FIRSTNAME']."<br><br>";
          
          echo "Mobile No :  ";
          echo $username = $row['MOBILE']."<br><br>";

          
          echo 'Package Type:    ';
          echo $total = $row['package']."<br><br>";
         
          echo 'Total:    ';
          echo $total = $row['TOTAL']."<br><br>";
          
          echo 'Paid:    ';
          echo $paid = $row['PAID']."<br><br>";
          
          echo 'Pending: ';
          echo $Pending = $row['PENDING']."<br><br>";
          
          
        }



        echo  $_POST['uno'];
        echo '<form action="_addPayment.php" method="GET">



        <div class="form-group my-4 col-md-4">
        
          <label for="exampleInputEmail1">Payment Amount (Rs.)</label>
          <input type="text" class="form-control" name="amount" maxlength="20" autocomplete="off">
        </div>
        <div class="form-group my-4 col-md-4"  style="display:snone">
          <label class="control-label">Paid By :</label>
          
          <select class="input-large m-wrap form-control" name="payby">			<option value="">Select...</option>
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
<input type="hidden" name="date" value="'.date("d-m-y").'">
<input type="hidden" name="datemn" value="'.date("m").'">

<input type="hidden" name="uno" value="'.$userno.'">
        <button type="submit" class="btn btn-success ">Submit</button>';
    }
  }
}
?>
</form>
 </div>
