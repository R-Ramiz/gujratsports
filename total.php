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
 <a class="btn btn-success mx-2" href="/gujratsports/payment.php">Add Payment<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/_pendingpayment.php">Pending Payment<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/Expences.php">Expences<span class="sr-only">(current)</span></a>

 
 <a class="btn btn-success mx-2" href="/gujratSports/package.php">Packages<span class="sr-only">(current)</span></a>
 <a class="btn btn-primary mx-2" href="/gujratSports/total.php">Total Revanue<span class="sr-only">(current)</span></a>


 <div class="container">

 <form action="total.php" method="GET" 
enctype="multipart/form-data">

<div class="form-group my-4 col-md-4">

  <p>Select Month & Year</p>
  

<select class="form-control" name="total" > 
<option value="11">11 - 20</option>


<select>


<button type="submit" class="btn btn-success " href="">
  <i class="fa fa-search" aria-hidden="true"></i></button></p>
</div>   
</div>

</form>

<div class="container">
<?php 
 $h = $_GET['total'];

 $sql = "SELECT  SUM(lamount) FROM `users` WHERE `lpay` = '$h'";
 $result = mysqli_query($conn,$sql);
 while ($row = mysqli_fetch_assoc($result)) 
 {
    
 $r1 = $row['SUM(lamount)'];

 }
 echo 'Total Fees :- '.$r1;
 echo '<br>';


 ?>
 
<?php 
$h = $_GET['total'];

$sql = "SELECT SUM(amount) FROM `expences` WHERE `month` = '$h'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) 
{
    
$r2 = $row['SUM(amount)'];
$r3 = $r1 - $r2;
}
echo 'Total Expence : '.$r2;
echo '<br>';
echo ' Income :  '.$r3;

 ?>
 </div>