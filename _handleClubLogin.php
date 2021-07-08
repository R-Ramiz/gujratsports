<?php 
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicUpper.php';
include($file1);

$login = false;
$showError = false;

if($_SERVER['REQUEST_METHOD'] == "POST" )
{
     
  $file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
  include ($file3); 

    $clogin_id = $_POST['cloginid'];
    $clogin_pass = $_POST['cloginpass'];

    $sql ="SELECT * FROM `club` where c_id = '$clogin_id'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    
    if($num == 1)
    {
        
            $row = mysqli_fetch_assoc($result);
        
             if(password_verify($clogin_pass,$row['c_o_pass']))
              {
                  $login =true;
                  $c_name = $row['c_name'];
                  session_start();
                  $_SESSION['cloggedin'] = true;
                  $_SESSION['sno'] = $row['sno'];
                  $_SESSION['clogin_id'] = $clogin_id;
                  $_SESSION['club_id'] = $row['c_id'];                  
                   
                  //include '_clubAfterLogin.php';
                  header("location:home.php");

              }
              else
              {
                echo 'Password Do Not Match';
              }
             
          
      }
      else
             {
               echo "user not fouund ";
             } 
      
}
  
  
          
        
        
          if($showError)
          {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <stron beg>Error!</strong>'. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
          } 






  ?>

<?php
$file2 = 'C:xampp\htdocs\gujratSports\part\_basicLower.php';
include ($file2);
 ?>