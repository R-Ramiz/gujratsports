<?php
 
    $file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
    include ($file3);  
    
    
   echo $type = $_POST['type'];
   echo $amount= $_POST['amount'];
   echo $payby= $_POST['payby'];
   echo $date= $_POST['date'];
   echo $month = $_POST['MONTH'];
   echo $year = $_POST['YEAR'];
   
   $sql = "INSERT INTO `expences` (`type`, `amount`, `date`, `paidby`,`month`,`year`) VALUES ('$type', '$amount', '$date', '$payby','$month','$year')";
    $result = mysqli_query($conn,$sql);
header("location:Expences.php");

 ?>