<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.css" />

  </head>
  <style>
      body{
          padding-bottom:100px;
      }
  </style>
  <body>

      <?php
include('dbconnection.php');
$event=$_POST['event'];
if($event==0) {
  $p = mysqli_query($dbHandle,"SELECT count(*) FROM `registration`");
$p1 = mysqli_fetch_assoc($p);
$hc=$p1['count(*)'];
$event_name = "Total" ;
}
else {
  $results = mysqli_query($dbHandle,"SELECT `event_name` FROM `events` WHERE `event_id`='$event'");
  $results1 = mysqli_fetch_assoc($results);
  $event_name = $results1['event_name'] ;
  
  
}

echo "<div style='margin-top:50px' class='container'>
      <h3>$event_name Registration Details</h3>
      <div  style='margin-top:50px;' class='container'>";



$p = mysqli_query($dbHandle,"SELECT count(*) FROM `registration` WHERE `event_id` like '$event'");
$p1 = mysqli_fetch_assoc($p);
$hc=$p1['count(*)'];


echo"<h5>Head count: $hc</h5></br></br>";

echo "<table  class='table' border='1'>
<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>USN</th>
      <th scope='col'>Name</th>
      <th scope='col'>Email</th>
        <th scope='col'>Department</th>
      <th scope='col'>Sem</th>
      <th scope='col'>Phone</th>
      <th scope='col'>TransactionID</th>
      <th scope='col'>Attendence</th>

    </tr>
  </thead><tbody>";
  if($event==0) {
    $query = mysqli_query($dbHandle,"SELECT * FROM `registration`");
    }
$query= mysqli_query($dbHandle,"SELECT * FROM `registration` WHERE `event_id` like '$event'");
$i = 0 ;

while($row = mysqli_fetch_array($query))
{
  $i++ ;
echo "  <tr>";
echo "<td>" . $i . "</td>";
echo "<td>" . $row['usn'] . "</td>";
echo "<td>" . $row['name']. "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['department_id'] . "</td>";
echo "<td>" . $row['semeseter'] . "</td>";
echo "<td>" . $row['phno'] . "</td>";
echo "<td>" . $row['transaction_no'] . "</td>";



echo "<td> </td>";

echo "</tr>";

}
echo "</tbody></table>";

mysqli_close($dbHandle);
?>
      </div>
      </div>
  </body>
</html>
