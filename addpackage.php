<?php
error_reporting(0);
  $file1 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include($file1);


?>
<br>
<a class="btn btn-success mx-2" href="/gujratSports/package.php">View Packages<span class="sr-only">(current)</span></a>

<form action="_addpackage.php" method="post">
<div class="form-group my-4 col-md-4">
                        <label class="control-label">Package Type :</label>
                        
                            <input type="text" class="input-large form-control" name="package" value=""  placeholder="Package Type" maxlength="20" oninvalid="alert('You must fill out the form!');"required/>
                        
                    </div>
        
                    <div class="form-group my-4 col-md-4">
                        <label class="control-label">Price :</label>
                        
                            <input type="text" class="input-large form-control" name="price" value=""  placeholder="Price of This New Package" maxlength="20" oninvalid="alert('You must fill out the form!');"required/>
                        
                    </div>
                    <button type="submit" class="btn btn-success mx-2">submit<buttion>
                    <button type="Reset" class="btn btn-success mx-2">Reset<buttion>

                    </form>