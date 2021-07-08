<?php 
session_start();
//error_reporting(0);
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicUpper.php';
include($file1);

echo "Welcome ! ".$_SESSION['club_id'];
$cid =  $_SESSION['club_id'];

$t = $_GET['id'];

$sql ="SELECT * FROM `users` where userid = '$t'";
$result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result))
        {  
            

          echo "<hr width='150px' align='left'/>";
          echo "User ID :  ";
          echo $userid = $row['userid'];
          echo "<hr width='150px' align='left'/>";

          $fn = $row['FIRSTNAME'];
          
          $ln = $row['LASTNAME'];
          
          $email = $row['EMAIL'];
          
          $mobile = $row['MOBILE'];
          
          $home = $row['HOME'];
          
          $doctor = $row['DOCTOR'];
          
        }
        ?>

<!-- Sign Up Form -------Form start--------------------------->

<form action="_handleEdit.php" method="post"  >
<input type="hidden" name="userid" value="<?php echo $t; ?>">

<!-- Edit form -->

  <div class="form-group my-4 col-md-4">

  <label for="exampleInputEmail1">First Name</label>
  <input type="text" class="form-control"  name="firstname" maxlength="20" placeholder="<?php echo $fn; ?>" required>
</div>


<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Last Name</label>
<input type="text" class="form-control" name="lastname" maxlength="20" placeholder="<?php echo $ln; ?>"
required>
</div>

<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control"  name="email" placeholder="<?php echo $email; ?>" required>
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Mobile</label>
<input type="text" class="form-control" name="mobile" maxlength="10" placeholder="<?php echo $mobile; ?>"required>
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Home</label>
<input type="text" class="form-control" name="home" maxlength="10" placeholder="<?php echo $home; ?>"required>
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Doctor</label>
<input type="text" class="form-control" name="doctor" maxlength="10" placeholder="<?php echo $doctor; ?>"required>
</div>
        
  <div class="form-group my-4 col-md-4">
  <label class="control-label">Birth Date:</label>
  
  <input type="date" class="form-control" name="birth_date" value="" required>
  <span style="color:red;">(Please leave blank if you dont want to add)</span>
  
  </div>

<div class="form-group my-4 col-md-4">
<label class="control-label">Joining Date:</label>
<input type="date" class="form-control" name="join_date" id="join_date" required>
</div>
      



  <div class="form-group my-4 col-md-4">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="signupPassword"required>
  </div>

  <div class="form-group my-4 col-md-4">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="signupcPassword"required>
  </div>
 <input type="hidden" id="club_id" name="club_id" value="'.$cid.'">
  <!--  Sign Up Form -------Form Close------------------------->


  <div class="form-group my-4 col-md-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form> 
<?php  
// <!-- Signup Body Close-------------------------------->
$file4 = 'C:xampp\htdocs\gujratSports\part\_basicLower.php';
include ($file4); 
 ?>
