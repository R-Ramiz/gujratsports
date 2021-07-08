

 <?php

session_start();
error_reporting(0);

$file3 = 'C:xampp\htdocs\gujratSports\part\_basicupper.php';
  include ($file3); 
  date_default_timezone_set('Asia/Calcutta');
  $too = DATE('h:i');

?>
<br>



<a class="btn btn-primary mx-2" href="/gujratSports/activeMember.php">ACTIVE MEMBER<span class="sr-only">(current)</span></a>

<a class="btn btn-success mx-2" href="/gujratSports/dailyatten.php">Present REPORT<span class="sr-only">(current)</span></a>


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

 <?php 

date_default_timezone_set('Asia/Calcutta');
$too = date('h:i');
echo '<h3 align="center">-*-*- Currently Active Member -*-*-</h3>';
  echo $too;
echo '<div class="Container ml-10 mr-5">
<table class="table" id="myTable">
<thead>
<tr>
  <th scope="col">User No.</th>
  <th scope="col">MemberName</th>
  <th scope="col">Mobile Mo.</th>
  <th scope="col">Home</th>
  <th scope="col">In</th>
  <th scope="col">Attendance</th>


  

</tr>
</thead>
<tbody>';

$dd = $_SESSION['clogin_id'];
$sql = "SELECT * FROM `users` where `status` = 'Active'";
$result = mysqli_query($conn, $sql);
//$numRow = mysqli_num_rows($result);
$tt =1;
     while($row = mysqli_fetch_assoc($result))
     {  date_default_timezone_set('Asia/Calcutta');
         
      if(!empty($row['intime']))
      {
        $intime = $row['intime'];
      }
      if(!empty($row['outtime']))
      {
        $outtime = $row['outtime'];
      }
       $uno = $row['uno'];
        
        echo "<tr>
        <th scope='row'>".$tt."</th>

        <td><a href='userProfile.php?uno=$uno'>".$row['FIRSTNAME'].$row['LASTNAME']."</a>
        </td>
        <td>".$row['MOBILE']. "</td>
        <td>".$row['HOME']. "</td>
        <td>".$intime."</td>

        
        
      
        <td>
       
        <a class='btn btn-info' href='_onclickOUT.php?outtime=$too&uno=$uno'>OUT</a>
        </td>
        

        
         
      ";
       
        
        $tt += 1;
 

$f1 = $row['userid'];
$f2 = $row['club_id'];
                            

echo "
      </tr>";
      
     }

     ?>
      
       
      

</tbody>
</form>
</table>
</div>
<script>
function tf() {
    date_default_timezone_set('Asia/Calcutta');
echo date('h:i');
        
}
</script>
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

