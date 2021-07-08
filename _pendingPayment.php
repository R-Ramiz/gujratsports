<?php

session_start();
error_reporting(0);

$file3 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include ($file3); 
?>
  <style>
  body {
    overflow: scroll;
    position: relative;
  }
    </style>
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<br>
 <h3>Payment >> Pening Payment's</h3>
 <a class="btn btn-success mx-2" href="/gujratsports/payment.php">Add Payment<span class="sr-only">(current)</span></a>

<a class="btn btn-primary mx-2" href="/gujratSports/_pendingpayment.php">Pending Payment<span class="sr-only">(current)</span></a>

<a class="btn btn-success mx-2" href="/gujratSports/expences.php">Expences<span class="sr-only">(current)</span></a>


<a class="btn btn-success mx-2" href="/gujratSports/total.php">Total Revanue<span class="sr-only">(current)</span></a>

<a class="btn btn-success mx-2" href="/gujratSports/package.php">Packages<span class="sr-only">(current)</span></a>

  
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
  <th scope="col">Total</th>
  <th scope="col">Paid</th>

  <th scope="col">Pending</th>
  <th scope="col">Actions</th>

  

</tr>
</thead>
<tbody>';

$dd = $_SESSION['clogin_id'];
$sql = "SELECT * FROM `users` where `PENDING` > 0 ";
$result = mysqli_query($conn, $sql);
$tt =1;
     while($row = mysqli_fetch_assoc($result))
     {  $uno = $row['uno'];
        echo "<tr>
        <th scope='row'>".$tt."</th>

        <td>
        <a href='userProfile.php?uno=$uno'>".$row['FIRSTNAME'].$row['LASTNAME']."</a>
        </td>
        <td>".$row['TOTAL']. "</td>

        <td>".$row['PAID']. "</td>

        <td>".$row['PENDING']. "</td>
        
         
        <td>";
        $tt += 1;
        

$f1 = $row['userid'];
$f2 = $row['club_id'];
           

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
    

</html>

