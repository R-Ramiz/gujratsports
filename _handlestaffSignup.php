<?php
$showError = "false";
// error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $file3 = 'C:xampp\htdocs\gujratsports\part\_dbconnect.php';
    include ($file3);  
     $stt = date('d-m-y');
    $String = $stt;
    
    $edy = substr($stt,0,2);//month
    $dy = substr($stt,0,2);//month
    $yr = substr($stt,-2,5);//year
    $mnth = substr($stt,-5,2);//day
    $edy = substr($stt,0,2);//day
    $month = substr($stt,-5,2);//month
    $yr = substr($stt,-2,5);//year

    
   $Fname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $home = $_POST['home'];
   $doctor = $_POST['doctor'];
   $medical = $_POST['medical'];
   $address = $_POST['address'];
   $aadhar_card = $_POST['aadhar_card'];
   $pan_card = $_POST['pan_card'];
   $birth_date = $_POST['birth_date'];
   $workexp = $_POST['workexp'];
   $join_date = $stt;
   $mts = $_POST['mts'];
   $pass = $_POST['signupPassword'];
   $cpass = $_POST['signupcPassword'];
   $staff_id = $_POST['staffid'];
   $total = $_POST['salary'];
   echo $date = date('d-m-Y');
   echo '<br>';
   echo $next = date('d-m-Y', strtotime($date. ' + 30 days'));

   $numRows = 5;
     if($numRows<0){
            echo 'im here';
         $showError = "Mobile Number alrady in use";
     }
     else
    { 
        if($pass == $cpass )
        {
             $hash = password_hash($pass, PASSWORD_DEFAULT);
 $sql = "INSERT INTO `staff` (`staffid`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `EMAIL`, `MOBILE`, `HOME`, `DOCTOR`, `medHistory`, `Address`, `aadharNo`, `panNo`, `birthDate`, `work_exp`,`TOTAL`,`PAID`,`PENDING`,`joinDate`,`nextPay`,`maritiulStauts`,`password`) VALUES ('$staff_id','$Fname','$lastname', '$gender','$email','$mobile','$home','$doctor','$medical','$address','$aadhar_card','$pan_card','$birth_date','$workexp','$total','0','$total','$date','$next','$mts','$hash')";

 $result2 = mysqli_query($conn,$sql);
            if($result2)
            {
                echo "im hhhhhh 5555";

                
                $showAlert = true;
                 header("location: myprofile.php");      
              header("location: /gujratsports/staffList.php?signupsuccess=true");
                  exit();
             }
        }

        else{

            $showError = "Password Do not Match";

        }


    }
  header("Location: /gujratsports/staffList.php?signupsuccess=false&error=$showError");


}

?>