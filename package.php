<?php
error_reporting(0);
  $file1 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include($file1);
?>

<?php
$RR = $_GET['result'];
 if($RR=="false")  
 {
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>You Cannot Delete This Package !</strong> There are some Members have Subscribed This Package
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
 </div>';
 }

?>
  <style>
  body {
    overflow-y: auto;
    position: relative;
}
  </style>  
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<br>
<?php
echo '
<a class="btn btn-success mx-2" href="/gujratSports/addpackage.php">Add Packages<span class="sr-only">(current)</span></a>

<table class="table" id="myTable">
<thead>
<tr>
  <th scope="col">No.</th>
  <th scope="col">Package Type</th>
  <th scope="col">Price</th>
<th scope="col">Actions</th>

</tr>
</thead>
<tbody>';
    
// $dd = $_SESSION['clogin_id'];
$sql = "SELECT * FROM `package`";
$result = mysqli_query($conn, $sql);
//$numRow = mysqli_num_rows($result);
$r = 1;
     while($row = mysqli_fetch_assoc($result))
     {
         echo "<tr>
        <td>".$r."</td>
        <td>".$row['name']. "</td>
        <td>Rs.".$row['price']." </td>
        

        <td>";
        $r+=1;
        
        

$f1 = $row['sr_no'];
                            
                               
                                
echo '<button type="button" class=" btn-success" align="right">';
$url = "editpackage.php?id=$f1";

echo '<a href="'.$url.'" class="text-white">
</i>
Edit
</a>
</button>';


echo '<button type="button" class=" btn-success" align="right">';
$url = "deletepackage.php?id=$f1";

echo '<a href="'.$url.'" class="text-white">
</i>
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




<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> 
     </script> 
     <script>
    $(document).ready(function () 
    {
      $('#myTable').DataTable();

    }
    );
    </script> 


