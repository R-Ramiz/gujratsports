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
 
  
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <stron beg>Success!</strong> you are logged in
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
</div>
<?php
}
if(empty($_GET['uno']))
{
  $t = $_GET['id'];
}else{
$t = $_GET['uno'];}
$sql ="SELECT * FROM `users` where (uno = '$t') OR (userid  = '$t')";
$result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result))
        { 
          echo '<div class="container">';
          echo "<hr width='150px' align='left'/>";
          echo "User No. :  ";
          echo $uno = $row['uno'];
          
           echo "<hr width='150px' align='left'/>";
          echo "User ID :  ";
          echo $userid = $row['userid'];
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
          echo $row['day'].'-'.$row['month'].'-20'.$row['year'];
          echo "<hr width='150px' align='left'/>";
         
          echo "Membership Expire:   ";
          echo $row['eday'].'-'.$row['emonth'].'-'.$row['eyear'];
          echo "<hr width='150px' align='left'/>";
         

          echo "Package id:  ";
          echo $p = $row['package'];
          echo "<hr width='150px' align='left'/>";
          

          echo "Assigend Staff id:  ";
          echo $row['staff_id'];
          echo "<hr width='150px' align='left'/>";
          
          

          echo "Total :  ";
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


