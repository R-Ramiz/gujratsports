<?php
$showError = "false";
// error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $file3 = 'C:xampp\htdocs\gujratsports\part\_basicupper.php';
    include ($file3);
    
    ECHO $stt = date('d-m-Y');
    $String = $stt;
    
    ECHO 'day'.$edy = substr($stt,0,2);//month
    ECHO 'day'.$dy = substr($stt,0,2);//month
    ECHO 'YR'.$yr = substr($stt,-2,5);//year
    ECHO 'month'.$mnth = substr($stt,-5,2);//day
    $edy = substr($stt,0,2);//day
    $month = substr($stt,-5,2);//month
    $yr = substr($stt,-2,5);//year
    
   ECHO $Fname = $_POST['firstname'];
   ECHO $lastname = $_POST['lastname'];
   ECHO $gender = $_POST['gender'];
   ECHO $email = $_POST['email'];
   ECHO $mobile = $_POST['mobile'];
   ECHO $home = $_POST['home'];
   ECHO $doctor = $_POST['doctor'];
   ECHO $medical = $_POST['medical'];
   ECHO $address = $_POST['address'];
   ECHO $aadhar_card = $_POST['aadhar_card'];
   echo $package = $_POST['package'];
    $pan_card = $_POST['pan_card'];
    $birth_date = $_POST['birth_date'];
    $mts = $_POST['mts'];
    $staff_id = $_POST['staff_id'];
    $shift_id = $_POST['shift_id'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];
    $user_id = $_POST['userid'];
    $sno = $_POST['sno'];
    // $numRows = 5;

    //check whether this email Exits
 $existSql ="SELECT * FROM `users` where `club_id` = $sno AND `MOBILE` = '$mobile'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
     if($numRows<0){
          
           $showError = "Mobile Number alrady in use";
     }
     else
    { 
        if($pass == $cpass )
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM `package` WHERE `sr_no` = '$package' ";
        $result = mysqli_query($conn,$sql);
 
while($row = mysqli_fetch_assoc($result))
{
    $total = $row['price'];

}
$date = date('Y-m-d');
$diff = date('Y-m-d', strtotime($date. ' + 30 days'));

$eday = date('d', strtotime($diff));
$emonth = date('m', strtotime($diff));
$eyear = date('Y', strtotime($diff));


$result = mysqli_query($conn,"INSERT INTO `users` (`userid`, `FIRSTNAME`, `LASTNAME`, `GENDER`, `EMAIL`, `MOBILE`, `HOME`, `DOCTOR`, `medHistory`, `Address`, `aadharNo`, `panNo`, `birthDate`,`day`,`month`,`year`,`package`, `TOTAL`, `PAID`, `PENDING`, `maritiulStauts`, `club_id`, `staff_id`, `shift_id`,`eday`,`emonth`,`eyear`, `password`) VALUES ('$user_id', '$Fname', '$lastname', '$gender','$email','$mobile', '$home', '$doctor', '$medical', '$address', '$aadhar_card', '$pan_card','$birth_date','$dy','$mnth','$yr','$package', '$total', '0', '$total','$mts', '$sno', '$staff_id', '$shift_id','$eday','$emonth','$eyear','$hash')");
$sql = "ALTER TABLE `attendence` ADD `$user_id` BOOLEAN DEFAULT NULL AFTER `year`";
$result1 = mysqli_query($conn,$sql);

            if($result)
            {
                echo "im hhhhhh";

         $showAlert = true;
         header("location: myprofile.php");      
          header("location: /gujratsports/MemberList.php?signupsuccess=true");
          exit();
     }
        }

        else{
            $showError = "Password Do not Match";

        }


    }
 header("Location: /gujratsports/MemberList.php?signupsuccess=false&error=$showError");


}

?>