<?php
$file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
include ($file3);  

        $url = $_SERVER['HTTP_REFERER']; //will give you incomplete url.
    if(strstr("$url","addpackage"))
    {
$name = $_POST['package'];
$price = $_POST['price'];

$sql = "INSERT INTO `package` (`name`, `price`) VALUES ( '$name','$price')
";
$result = mysqli_query($conn, $sql);
    }
header("location: package.php");

    ?>