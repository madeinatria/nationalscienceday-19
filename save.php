<?php
include('dbconnection.php');
$name=$_POST['name1'];
$phone=$_POST['phone1'];
$email=$_POST['email1'] ;
$dep=$_POST['dep1'];
$year=$_POST['sem'];
$event=$_POST['event'];

$query="insert into registrations 
values('null','$name','$event','$email','$phone','$dep','$year');";
echo $query ;
$insert=mysqli_query($dbHandle,$query);
if($insert)
{
header("Location: registration_successful.php");
}
else {
header("Location: registration_failed.php");

}

?>