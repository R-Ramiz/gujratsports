<?php 
session_start();
// error_reporting(0);

//<!--------------------Signup Modal Body Open----------->
//<!-- Sign Up Form ---Form start--------------------------->
?>

<?php
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicUpper.php';
include($file1);
$csno =  $_SESSION['sno'];

?>

<form action="_handleSignup.php" method="post" 
enctype="multipart/form-data">



<a class="btn btn-primary mx-2" href="/gujratSports/signup.php">Add Member<span class="sr-only">(current)</span></a>
<a class="btn btn-success mx-2" href="/gujratSports/memberlist.php">Member List<span class="sr-only">(current)</span></a>

<a class="btn btn-success mx-2" href="/gujratSports/expirymem.php">Expired<span class="sr-only">(current)</span></a>


  <div class="form-group my-4 col-md-4">

  <label for="exampleInputEmail1">First Name</label>
  <input type="text" class="form-control" id="signupEmail" name="firstname" maxlength="20" required>
</div>

<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Last Name</label>
<input type="text" class="form-control" id="signupEmail" name="lastname" maxlength="20" required>
</div>
<!-- oninvalid="alert('You must fill out the form!');"required> -->
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Gender:</label>
  <input type="radio" name="gender" value="M"> Male
  <input type="radio" name="gender" value="F"> Female<br>
  
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" id="signupEmail" name="email" required>
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Mobile</label>
<input type="text" class="form-control" name="mobile" maxlength="10" placeholder="Member Contact Number" required>
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Home</label>
<input type="text" class="form-control" name="home" maxlength="10" placeholder="Home Contact Number" required>
</div>
<div class="form-group my-4 col-md-4">
<label for="exampleInputEmail1">Doctor</label>
<input type="text" class="form-control" name="doctor" maxlength="10" placeholder="Doctors Contact Number"required >
</div>

<div class="form-group my-4 col-md-4">
<label>Medical History:</label>

<select class="form-control" name="medical" > 
<option value="">Select...</option>
<option value="Hyphenation" >Hyphenation</option>	
<option value="Cervical or Spondylitis Problem" >Cervical or Spondylitis Problem</option>	<option value="Diabetes" >Diabetes</option>			 
<option value="Asthma" >Asthma</option>	
<option value="Cholesterol" >Cholesterol</option>		
<option value="Back & Knee problem" >Back & Knee problem</option>	  
<option value="Other" >Other</option>		
<option value="None" >None</option>	
<select>
</div>

<div class="form-group my-4 col-md-4">
<label class="control-label">Address :</label>
<textarea class="form-control" rows="5" name="address" maxlength="500"></textarea>                           
                        
                    </div>
				
                    <div class="form-group my-4 col-md-4">
                        <label class="control-label">Aadhar Card No:</label>
                        
                            <input type="text" class="input-large form-control" name="aadhar_card" value=""  placeholder="Aadhar Card No" maxlength="12"/>
                        
                    </div>
					<div class="form-group my-4 col-md-4">
                        <label class="control-label">PAN No :</label>
                        
                            <input type="text" class="input-large form-control" name="pan_card" value=""  placeholder="PAN No" maxlength="20"/>
                        
                    </div>
  
  
        
  <div class="form-group my-4 col-md-4">
  <label class="control-label">Birth Date:</label>
  
  <input type="date" class="form-control" name="birth_date" value="" >
  <span style="color:red;">(Please leave blank if you dont want to add)</span>
  
  </div>

   <div class="form-group my-4 col-md-4">
<label>Package Type:</label>

<select class="form-control" name="package" > 
<?php 
$sql = "SELECT * FROM `package`";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)) 
{
 $h = $row['sr_no'];
 $h2 = $row['name'];
 $t9 = $row['price'];

 echo '<option value="'.$h.'">';
 echo $h.'&nbsp'; echo $h2;
  echo '</option>';
}


?>

<select>
</div> 

<div class="form-group my-4 col-md-4">
<label class="control-label">Marital Status:</label>

<input type="radio" name="mts" class="mts" value="unmarried" checked="checked" style="opacity: 1 !important;margin-left:0px !important;" >Unmarried

<input type="radio" name="mts" class="mts"  value="married" style="opacity: 1 !important;margin-left:0px !important;" >Married

</div>
      
  <div id="block_mts"></div>          
  <div class="form-group my-4 col-md-4"  style="display:snone">
  <label class="control-label">Assign Staff :</label>

  <select class="input-large m-wrap form-control" name="staff_id">
  
  <?php

$sql = "SELECT * FROM `staff`";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{  $sn = $row['sno'];
   echo '<option value='.$sn.'>';
  echo $row['FIRSTNAME'].$row['LASTNAME'];
  echo  '</option>';

}

  ?>     
  </select>

   </div>
   

  
  
 
 </div> 
      <div class="form-group my-4 col-md-4"  style="display:snone">
  <label class="control-label">Shift Type :</label>
  
  <select class="input-large m-wrap form-control" name="shift_id">
    <option value="">Select Shift</option>
    <option value="6" >Personal Training - Evening Shift</option>        
    <option value="3" >Morning Shift - Personal Training</option>        
    <option value="4" >Morning Shift 5:00 AM to 8:00 AM</option>        
    <option value="5" >Evening Shift - Personal Training </option>        
    <option value="7" >Personal Trainer Ravi Patel Evening </option>        
  </select>
  
  </div> 
  <div class="form-group my-4 col-md-4">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="signupPassword" name="signupPassword">
  </div>

  <div class="form-group my-4 col-md-4">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
  </div>
  

<?php
echo '
  <input type="hidden" id="memberid" name="userid" value="'.rand().'">
  <input type="hidden" id="sno" name="sno" value="'.$csno.'">
  
  <!--  Sign Up Form -------Form Close------------------------->';
  ?>
  <div class="form-group my-4 col-md-4">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
  
  </form> 

 <?php
  
// <!-- Signup Body Close-------------------------------->
$file4 = 'C:xampp\htdocs\gujratsports\part\_basicLower.php';
include ($file4); 
// $file6 = 'C:xampp\htdocs\SportsClub\client\part\_footer.php';
// include ($file6); 
 ?>
