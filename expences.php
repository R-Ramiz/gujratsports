<?php 
session_start();
$file1 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
 include($file1);
 $mn = date('m');
?>
<br>
<h2 align="center"> Expences of This Month</h2>

<a class="btn btn-success mx-2" href="/gujratsports/payment.php">Add Payment<span class="sr-only">(current)</span></a>

<a class="btn btn-success mx-2" href="/gujratSports/_pendingpayment.php">Pending Payment<span class="sr-only">(current)</span></a>

<a class="btn btn-primary mx-2" href="/gujratSports/Expences.php">Expences</a>


<a class="btn btn-success mx-2" href="/gujratSports/total.php">Total Revanue<span class="sr-only">(current)</span></a>

<a class="btn btn-success mx-2" href="/gujratSports/package.php">Packages<span class="sr-only">(current)</span></a>

<a class="btn btn-primary btn-lg" href="/gujratSports/addexpences.php">Add Expences<span class="sr-only">(current)</span></a>


<br/>

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
  <th scope="col"> No.</th>
  <th scope="col">Type</th>
  <th scope="col">Amount.</th>
  <th scope="col">Date</th>
  <th scope="col">PayBy</th>
<th scope="col">Actions</th>
</tr>
</thead>
<tbody>';

$dd = $_SESSION['clogin_id'];
$sql = "SELECT * FROM `expences` WHERE `month` = '$mn'";
$result = mysqli_query($conn, $sql);
//$numRow = mysqli_num_rows($result);
$tt =1;
     while($row=mysqli_fetch_assoc($result))
     {  date_default_timezone_set('Asia/Calcutta');
         $uno = $row['s_no'];
        echo "<tr>
        <th scope='row'>".$tt."</th>

<td>".$row['type']."</a></td>
        <td>".$row['amount']. "</td>
        <td>".$row['date']. "</td>
        <td>".$row['paidby']. "</td>
        <td>";
        $tt += 1;

$f1 = $row['s_no'];
           

echo '<button type="button" class=" btn-success" align="right">';
$url = "addExpences.php?id=$f1";

echo '<a href="'.$url.'" class="text-white">
                   
Delete
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

<?php
$sql = "SELECT SUM(amount) FROM expences where `month` = '$mn'";
$result = mysqli_query($conn,$sql);
$numRow = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result))
     { 
       $r = $row['SUM(amount)'];
     }
     echo '<h2>Total:- '.$r.'<span class="sr-only">(current)</span></h2>';
?>