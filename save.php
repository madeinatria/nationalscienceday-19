<?php
include('dbconnection.php');
$name=$_POST['name1'];
$phone=$_POST['phone1'];
$email=$_POST['email1'] ;
$dep=$_POST['dep1'];
$sem=$_POST['sem'];
$event=$_POST['event'];
$usn=strtoupper($_POST['usn']);
$transaction=$_POST['trans'];

$query="insert into registration(usn,name,email,event_id, department_id ,semeseter,transaction_no,phno) 
values('$usn','$name','$email','$event','$dep','$sem','$transaction','$phone');";

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