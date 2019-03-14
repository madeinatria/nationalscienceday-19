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

echo "<div style='margin-top:50px' class='container'>
      <h3>$name Registration Details</h3>
      <div  style='margin-top:50px;' class='container'>";

$result = mysqli_query($dbHandle,"SELECT * FROM `registrations` where `event` like '$event' LIMIT 0, 1000");


$p = mysqli_query($dbHandle,"SELECT count(*) FROM `registrations` WHERE `event` like '$event'");
$p1 = mysqli_fetch_assoc($p);
$hc=$p1['count(*)'];

echo"<h5>No. of Teams: $no</h5>";
echo"<h5>Head count: $hc</h5></br></br>";

echo "<table  class='table' border='1'>
<thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Name</th>
      <th scope='col'>Phone</th>
      <th scope='col'>Email</th>
      <th scope='col'>College</th>
        <th scope='col'>Department</th>
      <th scope='col'>Sem</th>
      <th scope='col'>Attendance</th>

    </tr>
  </thead><tbody>";
 $query= mysqli_query($dbHandle,"SELECT `team_size` FROM `Events` WHERE `eid` like '$event'");
$value = mysqli_fetch_assoc($query);
$size=$value['team_size'];
$i=1;
$j=0;
while($row = mysqli_fetch_array($result))
{
echo "  <tr>";
echo "<td>" . $i . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['phone']. "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['college'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "<td>" . $row['year'] . "</td>";

echo "<td> </td>";

echo "</tr>";
if($j<$size){$j++;}
if($j==$size){$j=0;$i++;}
}
echo "</tbody></table>";

mysqli_close($dbHandle);
?>
      </div>
      </div>
  </body>
</html>
