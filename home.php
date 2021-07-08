<?php
  $file1 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include($file1);

  $sql = "SELECT * FROM `users` where `PENDING` > 0 ";
  $result = mysqli_query($conn,$sql);
  $pending= mysqli_num_rows($result);

  $sql = "SELECT * FROM `users` where `status` = 'Active'";
  $result = mysqli_query($conn,$sql);
  $active = mysqli_num_rows($result);

  
  


?>
<div class="col-lg-10">
       
        <div class="col main mt-3 h-80">
              <div class="row mb-3">
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Total Members</h6>
                            <h1 class="display-4">

                            <?php
                            
                            $exitSql = "SELECT `uno` FROM `users`";
    
                            $result = mysqli_query($conn,$exitSql);
                            $numRows = mysqli_num_rows($result);
                            echo $numRows;
                        
                        
                            ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning ">
                        <div class="card-body bg-warning">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Expired Membershiip</h6>
                            <h1 class="display-4">
                            <?php
                            
                            $exitSql = "SELECT * FROM `users` WHERE `MemStatus` = 'Expired'";
    
                            $result = mysqli_query($conn,$exitSql);
                            $numRows = mysqli_num_rows($result);
                            echo $numRows;
                            ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-success ">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Active Member</h6>
                            <h1 class="display-4">
                            <?php
                            echo $active;
                            ?></h1>
                        </div>
                    </div>
                </div>
               
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger ">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Pending Payment</h6>
                            <h1 class="display-4">
                            <?php
                            echo $pending;
                            ?></h1>
                        </div>
                    </div>
                </div>
               
               
</div>
