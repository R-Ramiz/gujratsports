<?php
session_start();
error_reporting(0);
$file3 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include ($file3); 
  date_default_timezone_set('Asia/Calcutta');
  $too = DATE('h:i');
?>

<?php
$RR = $_GET['result'];
 if($RR=="false")  
 {
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>You Cannot Delete This Staff Member !</strong> Some Members Are Associated with him/her.
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 }

?>

<br>
<a class="btn btn-success mx-2" href="/gujratSports/staffsignup.php">Add STAFF<span class="sr-only">(current)</span></a>

 <a class="btn btn-primary mx-2" href="/gujratSports/stafflist.php">STAFF List<span class="sr-only">(current)</span></a>

 <a class="btn btn-success mx-2" href="/gujratSports/stafflist.php">STAFF SALARY<span class="sr-only">(current)</span></a>

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
  <th scope="col">Staff Name</th>
  <th scope="col">Mobile Mo.</th>
  <th scope="col">Salary</th>
  <th scope="col">Paid</th>
  <th scope="col">Pending</th>


  <th scope="col">Actions</th>

  

</tr>
</thead>
<tbody>';

$sql = "SELECT * FROM `staff`";
$result = mysqli_query($conn, $sql);
//$numRow = mysqli_num_rows($result);
$tt =1;
     while($row = mysqli_fetch_assoc($result))
     { 
        $uno = $row['sno'];
        echo "<tr>
        <th scope='row'>".$tt."</th>

        <td><a href='staffProfile.php?uno=$uno'>".$row['FIRSTNAME'].$row['LASTNAME']."</a>
        </td>
        <td>".$row['MOBILE']. "</td>
        <td>".$row['TOTAL']. "</td>
        <td>".$row['PAID']. "</td>
        <td>".$row['PENDING']. "</td>
        
         
        <td>";
        $tt += 1;
        

$f1 = $row['sno'];
$f2 = $row['club_id'];
                            
                               
                                
echo '<button type="button" class="btn-success" align="right">';
$url = "editstaff.php?sno=$f1";

echo '<a href="'.$url.'" class="text-white">
                   
Edit
</a>
</button>';

echo '<button type="button" class=" btn-success" align="right">';
$url = "_deletestaff.php?id=$uno";

echo '<a href="'.$url.'" class="text-white">
                   
Delete
</a>
</button>';


echo '<button type="button" class=" btn-success" align="right">';
$url = "payment.php?sno=$uno";

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

