

 <?php

session_start();
error_reporting(0);

$file3 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include ($file3); 


?>
<br>

<a class="btn btn-success mx-2" href="/gujratSports/activeMember.php">ACTIVE MEMBER<span class="sr-only">(current)</span></a>

<a class="btn btn-primary mx-2" href="/gujratSports/dailyatten.php">PRESENT REPORT<span class="sr-only">(current)</span></a>


<a class="btn btn-success mx-2" href="/gujratSports/absentReport.php">ABSENT REPORT<span class="sr-only">(current)</span></a>
<a class="btn btn-success mx-2" href="/gujratSports/attendance.php">Live Attendence<span class="sr-only">(current)</span></a>




  <style>
  body {
    overflow: scroll;
    position: relative;
  }
    </style>
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <!-- <link rel="stylesheet" href="/gujratsports/css/style.css">    -->
<br>
 <br>
 <div class="container">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker(
      
    );
    
  } );
  </script>
</head>
<body>
<?php 
$stt =  $_GET['date'];
//$String = "[modid=256]";
$String = $stt;
$mnth = substr($stt,0,2);//month
 $yr = substr($stt,-2,5);//year
$dy = substr($stt,-7,2);//day

?>

 <form action="dailyatten.php" method="GET">
<h3 align="center">-*-*- Present Member -*-*-</h3>

 <p>Date: <input type="text" id="datepicker" name="date" autocomplete="off">

<button type="submit" class="btn btn-success ">
  <i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">(current)</span></button></p>
 
 </form>
 <?php
 if(!empty($stt))
 {
 ?>
 <div class="container">

 <?php 

date_default_timezone_set('Asia/Calcutta');
$too = date('h:i');

  echo '<h4 align="center">Present Report of Date :- '.$dy.' / '.$mnth.' / '.$yr.'</h4>';
echo '<div class="Container ml-10 mr-5">
<table class="table" id="myTable">
<thead>
<tr>
  <th scope="col">User ID.</th>
    <th scope="col">Name.</th>
  <th scope="col">Attendence</th>


  

</tr>
</thead>
<tbody>';

$dd = $_SESSION['clogin_id'];
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    $userid = $row['userid'];
    $name = $row['FIRSTNAME'];
     $sql1 = "SELECT * FROM `attendence` where `day` = '$dy' AND `month`      ='$mnth' AND `year` = '$yr' AND `$userid` = '1'";
     $result1 = mysqli_query($conn, $sql1);
     
     //$numRow = mysqli_num_rows($result);

     $tt =1;
     while($row = mysqli_fetch_assoc($result1))
     {  
         if($row["$userid"]==1)
         {
            $rr = "Present";
         }
         else{
             $rr = "Absent";
         }
        echo "<tr>
        <td>".$userid."</td>
        <td>".$name."</td>
        <td>".$rr."</td>";
       $tt += 1;
       echo "</tr>";
      
     }
}
     ?>
      
       
      

</tbody>
</form>
</table>
</div>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> 
     </script> 
     <script>
    $(document).ready(function () 
    {
      $('#myTable').DataTable();

    }
    );
    </script> 
   <?php
 }
 ?>


</html>

