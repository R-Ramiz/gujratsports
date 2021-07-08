<?php 
$file1 = 'C:xampp\htdocs\gujratSports\part\_nav.php';
include($file1);

$file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
 include ($file3); 


$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM `users` WHERE `package` = '$id'");
 ECHO "SELECT * FROM `users` WHERE `package` = '$id'";
$row = mysqli_fetch_assoc($result);
if($row>=1)
{
    header("location: package.php?result=false");
}
else{
$sql = "DELETE FROM `package` WHERE `sr_no` = '$id'";
$result = mysqli_query($conn, $sql);


header("location: package.php");
}
?>

