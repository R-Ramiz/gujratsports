

 <?php

session_start();
error_reporting(0);

$file3 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include ($file3); 
  date_default_timezone_set('Asia/Calcutta');
  $too = DATE('h:i');
 $RR = $_GET['result'];
 
?>
<?php
 if($RR=="false")  
 {
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>You Cannot Delete This Member !</strong> Member have to Pay Pending Fees
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 }

?>

<br>

<a class="btn btn-success mx-2" href="/gujratSports/signup.php">Add Member<span class="sr-only">(current)</span></a>
<a class="btn btn-primary mx-2" href="/gujratSports/memberlist.php">Member List<span class="sr-only">(current)</span></a>
<a class="btn btn-success mx-2" href="/gujratSports/expirymem.php">Expired<span class="sr-only">(current)</span></a>


  <style>
  body {
    overflow: scroll;
    position: relative;
  }
    </style>
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<br>
 <br>
 <div class="container">

 <?php 
echo '<div class="Container ml-10 mr-5">
<table class="table" id="myTable">
<thead>
<tr>
  <th scope="col">User No.</th>
  <th scope="col">MemberName</th>
  <th scope="col">Mobile Mo.</th>
  <th scope="col">Home</th>
  <th scope="col">Actions</th>
</tr>
</thead>
<tbody>';

$dd = $_SESSION['sno'];
$sql = "SELECT * FROM `users` where `club_id` = '$dd'";
$result = mysqli_query($conn, $sql);
//$numRow = mysqli_num_rows($result);
$tt =1;
     while($row = mysqli_fetch_assoc($result))
     {  $uno = $row['uno'];
        echo "<tr>
        <th scope='row'>".$tt."</th>

        <td><a href='userProfile.php?uno=$uno'>".$row['FIRSTNAME'].$row['LASTNAME']."</a>
        </td>
        <td>".$row['MOBILE']. "</td>
        <td>".$row['HOME']. "</td>
        
         
        <td>";
        $tt += 1;
        

$f1 = $row['userid'];
$f2 = $row['club_id'];
                            
                               
                                
echo '<button type="button" class="btn-success" align="right">';
$url = "_editMember.php?id=$f1";

echo '<a href="'.$url.'" class="text-white">
                   
Edit
</a>
</button>';

echo '<button type="button" class=" btn-success" onclick="alert(hi)" align="right">';
$url = "_deleteMember.php?id=$f1";

echo '<a href="'.$url.'" class="text-white">
                   
Delete
</a>
</button>';

echo '<button type="button" class=" btn-success" align="right">';
$url = "payment.php?uno=$uno";

echo '<a href="'.$url.'" class="text-white">
                   
Pay Now
</a>
</button>';

echo '</form>';
echo "</td>
      </tr>";
      
     }
     ?>
      

</tbody>
</table>
</div>
<script>
function tf() {
    date_default_timezone_set('Asia/Calcutta');
echo date('h:i');
        
}
</script>

<!-- -->

  
<!-- //////////// -->




  <!-- ---------------------------------------------------- -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> 
     </script> 
     <script>
    $(document).ready(function () 
    {
      $('#myTable').DataTable();

    }
    );
    </script> 
        <script>
function tf() {
    date_default_timezone_set('Asia/Calcutta');
return date('h:i');
        
}
</script>
   

</html>

