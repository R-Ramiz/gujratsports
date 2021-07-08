<?php
$showError = "false";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $file3 = 'C:xampp\htdocs\gujratSports\part\_dbconnect.php';
    include ($file3);  
    
    $userid = $_POST['userid'];
    $Fname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $home = $_POST['home'];
    $doctor = $_POST['doctor'];
    $birth_date = $_POST['birth_date'];
    $mts = $_POST['mts'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];
    $user_id = $_POST['userid'];
    $club_id = $_POST['club_id'];
    $numRows = 5;
     if($numRows<0){

         $showError = "Mobile Number alrady in use";
     }
     else
    { 
        if($pass == $cpass )
        {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
$result = mysqli_query($conn,"UPDATE `users` SET `FIRSTNAME` = '$Fname' ,`LASTNAME` = '$lastname',`EMAIL` = '$email',`MOBILE` = '$mobile',`HOME` = '$home',`DOCTOR` = '$doctor',`birthDate` = '$birth_date' WHERE `users`.`userid` = $userid");


            if($result)
            {
                $showAlert = true;
                header("location: myprofile.php");      
            header("location: /gujratsports/memberlist.php?signupsuccess=true");
                exit();
            }
        }

        else{
            $showError = "Password Do not Match";

        }


    }
header("Location: /gujratsports/Memberlist.php?signupsuccess=false&error=$showError");


}

?>