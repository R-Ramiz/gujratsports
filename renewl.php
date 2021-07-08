<?php
session_start();
//error_reporting(0);
$file3 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include ($file3); 

  $id = $_GET['id'];
$day = date('d');
$month = date('m');
$year = date('y');

$date = date('Y-m-d');

$diff = date('Y-m-d', strtotime($date. ' + 30 days'));

$eday = date('d', strtotime($diff));
$emonth = date('m', strtotime($diff));
$eyear = date('y', strtotime($diff));

// if($month==12) 
//     {   
//         $month = 0;

//         $emonth = $month +1;
//         $eyear  = $year+1;
//         if($day=31)
//         {
//             $day = 30;
//             $eday = $day;
//         }
//             $month = 12;            
//     }
    
//     else
//     {  
//        $eyear  = $year;
//        $emonth = $month + 1;
//        if($day==31)
//         {
//             $day = 30;
//             $eday = $day;
//         }
//         else
//         {
//             $eday = $day;
//         }

//     }

$f1 = $_GET['id'];
$result =  mysqli_query($conn,"SELECT * FROM `users` where `userid` = '$f1'");  
while($row = mysqli_fetch_assoc($result))
{  $pending = $row['PENDING'];
   $pak = $row['package'];
}
if($pending>0)
{

    header("location: expirymem.php?result=false");

}
else{

$result =  mysqli_query($conn,"SELECT * FROM `package` where `sr_no` = '$pak'");  
while($row = mysqli_fetch_assoc($result))
{
   $pay = $row['price'];
}
mysqli_query($conn,"UPDATE `users` SET `total`='$pay', `PAID` = '0',`PENDING` = '0',`day` = '$day',`month`='$month',`year`='$year',`eday` = '$eday',`emonth` = '$emonth',`eyear` = '$eyear',`MemStatus` = 'Active' , `PENDING` = '$pay' WHERE `users`.`userid` = $f1");
              
header("location:userProfile.php?id=$id");
}
?>