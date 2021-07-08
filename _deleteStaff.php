<?php
    $file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
    include ($file3);  
	
	$id = $_GET['id'];
    echo "ID is:- " .$id;
    echo "<br>";


$result=mysqli_query($conn,"SELECT * FROM `users` where `staff_id` = '$id'");
echo $numRows = mysqli_num_rows($result);
if($numRows>0)
{
	header('location:staffList.php?result=false');

}
 else{
 	 if($cityDeleteQuery =mysqli_query($conn, "DELETE FROM `staff` WHERE `sno` = '$id'") or die("Could not execute query: " .mysqli_error($conn)))
 	 {
 	 	header('location:staffList.php');
 	 }	
 }
?>
