<?php
$file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
include ($file3);  


if(!empty($_GET['sno']))
{   
     $sno = $_GET['sno'];
     $date = $_GET['date'];
     $amount = $_GET['amount'];
     $payby = $_GET['payby'];
     $mn = $_GET['datemn'];

$sql = "SELECT * FROM `staff` WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{  
    $name = $row['FIRSTNAME'].$row['LASTNAME'];
    $total = $row['TOTAL'];
    $paid = $row['PAID'];
    $paid = $paid+$amount;
    $PENDING =$total - $paid;
if($PENDING==0){
    ECHO "HII";
    $PENDING = NULL;
}

}
$sql = "UPDATE `staff` SET `PAID` = '$paid' WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE `staff` SET `lamount` = '$amount' WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);


$sql = "UPDATE `staff` SET `lpay` = '$mn' WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);


$sql = "UPDATE `staff` SET `PENDING` = '$PENDING' WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE `staff` SET `PAYBY` = '$payby'  WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);
// AND `REMARK` = '$remark'
$sql = "UPDATE `staff` SET `PAY_DATE` = '$date' WHERE `sno` = '$sno'";
$result = mysqli_query($conn, $sql);

$type  = 'Salary of'.$name.' '.$sno;
$amount = $amount;
$payby = $payby;
$date = date("d-m-y");
$month = date("m");
$year = date("y");



$sql = "INSERT INTO `expences` (`type`, `amount`, `date`, `paidby`,`month`,`year`) VALUES ('$type', '$amount', '$date', '$payby','$month','$year')";
$result = mysqli_query($conn,$sql);
 

 header("location: stafflist.php");
}

else{
    
$uno = $_GET['uno'];
$date = $_GET['date'];
$amount = $_GET['amount'];
$payby = $_GET['payby'];
$mn = $_GET['datemn'];
// $sno = $_GET['sno'];




$sql = "SELECT * FROM `users` WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{   $total = $row['TOTAL'];
    $paid = $row['PAID'];
    $paid = $paid+$amount;

    ECHO $PENDING =$total - $paid;
if($PENDING==0){
    ECHO "HII";
    $PENDING = NULL;
}

}
$sql = "UPDATE `users` SET `PAID` = '$paid' WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE `users` SET `lamount` = '$amount' WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);


$sql = "UPDATE `users` SET `lpay` = '$mn' WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);


$sql = "UPDATE `users` SET `PENDING` = '$PENDING' WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);

$sql = "UPDATE `users` SET `PAYBY` = '$payby'  WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);
// AND `REMARK` = '$remark'
$sql = "UPDATE `users` SET `PAY_DATE` = '$date' WHERE `uno` = '$uno'";
$result = mysqli_query($conn, $sql);

$uno = $_GET['uno'];

 header("location: _pendingpayment.php?uno=$uno");
}
    ?>