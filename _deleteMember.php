<?php
    $file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
    include ($file3);  
	
	$id = $_GET['id'];
	$stateid=$_GET['stateid'];
    echo "ID is:- " .$id;
    echo "cid:-".$stateid;
	
	$sql = "SELECT * FROM `users` WHERE `userid` = '$id'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$pay = $row['PENDING'];
	}
	ECHO $pay;
	if($pay>0)
	{	echo 'hello';
		echo '1';
		header('location:MemberList.php?result=false');
		exit();
	}
	else{

	 if($cityDeleteQuery =mysqli_query($conn, "DELETE FROM `users` WHERE `userid` = '$id'") or die("Could not execute query: " .mysqli_error($conn)))
	 {	
	 mysqli_query($conn,"ALTER TABLE `attendence` DROP `$id`");
	 	echo '2';
	header('location:MemberList.php');
	 }	
}
?>
