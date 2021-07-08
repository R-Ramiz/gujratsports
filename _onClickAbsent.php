<?php
$file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
include ($file3);  

echo $uno = $_GET['uno'];
$user_id = $_GET['uid'];
// $outtime = $_GET['outtime'];

date_default_timezone_set('Asia/Calcutta');
$too = DATE('h:i');
ECHO  $day = date('d');
ECHO  $month = date('m');
ECHO  $year = date('y');





date_default_timezone_set('Asia/Calcutta');
$too = DATE('d-m-y');


$sql = "UPDATE `users` SET `status` = 'Not Active' WHERE `uno`= $uno";
$result = mysqli_query($conn, $sql);


 $sql = "UPDATE `users` SET `MemStatus` = 'Absent' WHERE `uno`= $uno";
 $result = mysqli_query($conn, $sql);

$sql = "UPDATE `attendence` SET `$user_id` = '0' WHERE `day` = '$day' AND `month` = '$month' AND `year` = '$year'";
$result = mysqli_query($conn, $sql);


$sql = "UPDATE `users` SET `labsent` = '$too' WHERE `uno`= $uno";
$result = mysqli_query($conn, $sql);


header("location:Attendance.php");

?>