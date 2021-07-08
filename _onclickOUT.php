<?php
$file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
include ($file3);  

echo $uno = $_GET['uno'];

echo $outtime = $_GET['outtime'];
// $outtime = $_GET['outtime'];


$sql = "UPDATE `users` SET `outtime` = '$outtime' WHERE `uno`= $uno";
$result = mysqli_query($conn, $sql);
$sql = "UPDATE `users` SET `status` = 'Not Active' WHERE `uno`= $uno";
$result = mysqli_query($conn, $sql);

header("location:Activemember.php");

?>