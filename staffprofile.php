<?php
error_reporting(0);
   if(session_id() == '')
{
session_start();
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicUpper.php';
include($file1);

$stt = date('d-m-y');
    $edy = substr($stt,0,2);//day
    $month = substr($stt,-5,2);//month
    $yr = substr($stt,-2,5);//year
    
}

   $url = $_SERVER['HTTP_REFERER']; //will give you incomplete url.
 if(strstr("$url","login"))
 {
?>
<?php
}

$t = $_GET['uno'];
$sql ="SELECT * FROM `staff` where sno = '$t'";
$result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result))
        { 
          echo '<div class="container">';
          echo "<hr width='150px' align='left'/>";
          
           echo "<hr width='150px' align='left'/>";
          echo "User ID :  ";
          echo $userid = $row['staffid'];
          echo "<hr width='150px' align='left'/>";
          
          echo "Name :  ";
          echo $username = $row['FIRSTNAME'];
          echo "&nbsp;";
          echo $row['LASTNAME'];
          echo "<hr width='150px' align='left'/>";
          
                    echo "MOBILE :  ";
          echo $username = $row['MOBILE'];
          echo "<hr width='150px' align='left'/>";

          echo "HOME :  ";
          echo $username = $row['HOME'];
          echo "<hr width='150px' align='left'/>";

          echo "DOCTOR :  ";
          echo $username = $row['DOCTOR'];
          echo "<hr width='150px' align='left'/>";

          echo "Address :  ";
          echo $username = $row['Address'];
          echo "<hr width='150px' align='left'/>";

          echo "Date of Birth :  ";
          echo $username = $row['birthDate'];
          echo "<hr width='150px' align='left'/>";

          echo "Date of Join :  ";
          echo $row['joinDate'];
          echo "<hr width='150px' align='left'/>";
         
          echo "End of Month : ";
          echo $row['nextPay'];
          echo "<hr width='150px' align='left'/>";
         
          echo "Total : ";
          echo $p = $row['TOTAL'];
          echo "<hr width='150px' align='left'/>";
          
          echo "Paid :  ";
          echo $p = $row['PAID'];
          echo "<hr width='150px' align='left'/>";
          
          echo "Pending :  ";
          echo $p = $row['PENDING'];
          echo "<hr width='150px' align='left'/>";
          echo '<button onclick="window.print()">Print this page</button>';
          echo '</div>';


        }
?>


