<?php 
session_start();
//error_reporting(0);
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicUpper.php';
include($file1);
$t = $_GET['id'];
$sql ="SELECT * FROM `package` where sr_no = '$t'";
$result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($result))
        {  

             $name = $row['name'];
             $price = $row['price'];

        }
?>

<br>
<a class="btn btn-success mx-2" href="/gujratSports/package.php">View Packages<span class="sr-only">(current)</span></a>
<br>
<form action="" method="post">
                    <div class="form-group my-4 col-md-4">
                    
<label class="control-label">Package Name :</label> <?php echo $name; ?>
<br>
                        <label class="control-label">Price :</label>
                        
<input type="text" class="input-large form-control" name="price" placeholder="Price of This New Package" maxlength="20" oninvalid="alert('You must fill out the form!');"required/>
                        
                    </div>
                    <button type="submit" class="btn btn-success mx-2">Update<buttion>
                    <button type="Reset" class="btn btn-success mx-2">Reset<buttion>
</form>

<?php
if(!empty($_POST['price']))
{
$pr = $_POST['price'];
mysqli_query($conn,"UPDATE `package` SET `price` = '$pr' WHERE `package`.`sr_no` = $t");
}

?>