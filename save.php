<?php
include('dbconnection.php');
$id=$_POST['id'];
if($id==1)
{  
$eid=$_POST['eid'];
$name=$_POST['name1'];
$phone=$_POST['phone1'];
$email=$_POST['email1'] ;
$dep=$_POST['dep1'];
$year=$_POST['sem1'];
$tid=$_POST['tid'];
$college=$_POST['college1'];
$event=$_POST['event1'];
$team=1;
$query ="INSERT INTO Groups(`eidfk` ) VALUES('$eid')";
$insert=mysqli_query($dbHandle,$query);
$rowSQL = mysqli_query($dbHandle,"select max(gid) FROM Groups ;");
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max(gid)'];
print $largestNumber;
$query1="select ename from Events where eid='$eid'";
$insert =mysqli_query($dbHandle,$query1);
$row = mysqli_fetch_array( $insert );
include('dbconnection.php');
$query2="insert into Participants 
values('$largestNumber','$eid','$team','$name','$phone','$email','$college','$dep','$year','$tid');";
$insert=mysqli_query($dbHandle,$query2);
if($insert)
{
$to = $email;
$subject = "Dexterix 2018" ;
$body = "<h3>Greetings from CODE </h3>
<p> Thanks for registering to participate in DexteriX 2018 organised by CODE. This email confirms your registration for the event $event. Please report at the specified venue on time
on the specified dates during the event on 2nd and 3rd November 2018 at Atria 
Institute of Technology.</p>
<p>For any queries contact,</p>
<ul>
<li>Raghu N: +91 96865 19241</li>
<li>Ranjitha: +91 96322 77672</li>
</ul>
<p>We look forward to have you with us at Dexterix ‘18.</p>
<p>Sincerely,</p>
<p>CODE. </p>";
$headers = 'From: Dexterix 2018 no-reply@dexterix.com' . "\r\n" ;
//$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
if(mail($to, $subject, $body,$headers)) {
echo('<br>'."Email Sent ;D ".'</br>');
header("Location: registration_successful.html");
} 
else 
{
//header("Location: registration_failed.html");
echo("<p>Email Message delivery failed</p>");
}
exit(0);
}
else{
header("Location: registration_failed.html");
//  print "Error:".mysqli_error($dbHandle); 
}
}
else if($id==2)
{  
$eid=$_POST['eid'];
$name1=$_POST['name1'];
$phone1=$_POST['phone1'];
$email1=$_POST['email1'];
$dep1=$_POST['dep1'];
$year1=$_POST['sem1'];
$name2=$_POST['name2'];
$phone2=$_POST['phone2'];
$email2=$_POST['email2'];
$dep2=$_POST['dep2'];
$year2=$_POST['sem2'];
$tid=$_POST['tid'];
$college1=$_POST['college1'];
$college2=$_POST['college2'];
echo $college2;
$team=2;
$query ="INSERT INTO Groups(`eidfk`) VALUES('$eid')";
$flagAdd=mysqli_query($dbHandle,$query);
$rowSQL = mysqli_query($dbHandle,"select max(gid) FROM Groups ;");
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max(gid)'];
include('db_connection.php');
$query2="insert into Participants 
values('$largestNumber','$eid','$team','$name1','$phone1','$email1','$college1','$dep1','$year1','$tid');";
$insert=mysqli_query($dbHandle,$query2);
if($insert){echo "query2";}
$query3="insert into Participants 
values('$largestNumber','$eid','$team','$name2','$phone2','$email2','$college2','$dep2','$year2','$tid');";
$insert=mysqli_query($dbHandle,$query3);
if($insert)
{   
echo "query3";
$to = $email1;
$subject = "Dexterix 2018" ;
$body = "<h3>Greetings from CODE </h3>
<p> Thanks for registering to participate in DexteriX 2018 organised by CODE! This email confirms your registration for the event $event. Please report at the specified venue on time
on the specified dates during the event on 2nd and 3rd November 2018 at Atria 
Institute of Technology.</p>
<p>For any queries contact,</p>
<ul>
<li>Raghu N: +91 96865 19241</li>
<li>Ranjitha: +91 96322 77672</li>
</ul>
<p>We look forward to have you with us at Dexterix ‘18.</p>
<p>Sincerely,</p>
<p>CODE. </p>";
$headers = 'From: Dexterix 2018 no-reply@dexterix.com' .  "\r\n"  ."CC:$email2"."\r\n";
// $headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
if(mail($to, $subject, $body,$headers)) {
//echo('<br>'."Email Sent ;D ".'</br>');
header("Location: registration_successful.html");
} 
else 
{
//   echo("<p>Email Message delivery failed</p>");
}
exit(0);
}
else{
header("Location: registration_failed.html");
//print "Error:".mysqli_error(); 
}
}
else if($id==3){
$eid=$_POST['eid'];
$name1=$_POST['name1'];
$phone1=$_POST['phone1'];
$email1=$_POST['email1'];
$dep1=$_POST['dep1'];
$year1=$_POST['sem1'];
$name2=$_POST['name2'];
$phone2=$_POST['phone2'];
$email2=$_POST['email2'];
$dep2=$_POST['dep2'];
$year2=$_POST['sem2'];
$name3=$_POST['name3'];
$phone3=$_POST['phone3'];
$email3=$_POST['email3'];
$dep3=$_POST['dep3'];
$year3=$_POST['sem3'];
$tid=$_POST['tid'];
$team=3;
$college1=$_POST['college1'];
$college2=$_POST['college2'];
$college3=$_POST['college3'];
$query ="INSERT INTO Groups(`eidfk` ) VALUES('$eid')";
$flagAdd=mysqli_query($dbHandle,$query);
include('dbconnection.php');
$rowSQL = mysqli_query($dbHandle,"select max(gid) FROM Groups ;");
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max(gid)'];
include('db_connection.php');
$query2="insert into Participants 
values('$largestNumber','$eid','$team','$name1','$phone1','$email1','$college1','$dep1','$year1','$tid');";
$insert=mysqli_query($dbHandle,$query2);
$query3="insert into Participants 
values('$largestNumber','$eid','$team','$name2','$phone2','$email2','$college2','$dep2','$year2','$tid');";
$insert=mysqli_query($dbHandle,$query3);
$query4="insert into Participants 
values('$largestNumber','$eid','$team','$name3','$phone3','$email3','$college3','$dep3','$year3','$tid');";
$insert=mysqli_query($dbHandle,$query4);
if($insert)
{   
$to = $email1;
$subject = "Dexterix 2018" ;
$body = "<h3>Greetings from CODE </h3>
<p> Thanks for registering to participate in DexteriX 2018 organised by CODE! This email confirms your registration for the event $event. Please report at the specified venue on time
on the specified dates during the event on 2nd and 3rd November 2018 at Atria 
Institute of Technology.</p>
<p>For any queries contact,</p>
<ul>
<li>Raghu N: +91 96865 19241</li>
<li>Ranjitha: +91 96322 77672</li>
</ul>
<p>We look forward to have you with us at Dexterix ‘18.</p>
<p>Sincerely,</p>
<p>CODE. </p>";
$headers = 'From: Dexterix 2018 no-reply@dexterix.com' .  "\r\n"  ."CC:$email2,$email3"."\r\n";
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
if(mail($to, $subject, $body,$headers)) {
//echo('<br>'."Email Sent ;D ".'</br>');
header("Location: registration_successful.html");
} 
else 
{
//echo("<p>Email Message delivery failed</p>");
}
exit(0);
}
else{
header("Location: registration_failed.html");
//print "Error:".mysql_error(); 
}
}
else if($id==4){
$eid=$_POST['eid'];
$name1=$_POST['name1'];
$phone1=$_POST['phone1'];
$email1=$_POST['email1'];
$dep1=$_POST['dep1'];
$year1=$_POST['sem1'];
$name2=$_POST['name2'];
$phone2=$_POST['phone2'];
$email2=$_POST['email2'];
$dep2=$_POST['dep2'];
$year2=$_POST['sem2'];
$name3=$_POST['name3'];
$phone3=$_POST['phone3'];
$email3=$_POST['email3'];
$dep3=$_POST['dep3'];
$year3=$_POST['sem3'];
$name4=$_POST['name4'];
$phone4=$_POST['phone4'];
$email4=$_POST['email4'];
$dep4=$_POST['dep4'];
$year4=$_POST['sem4'];
$tid=$_POST['tid'];
$college1=$_POST['college1'];
$college2=$_POST['college2'];
$college3=$_POST['college3'];
$college4=$_POST['college4'];
$team=4;
$query ="INSERT INTO Groups(`eidfk` ) VALUES('$eid')";
$flagAdd=mysqli_query($dbHandle,$query);
include('dbconnection.php');
$rowSQL = mysqli_query($dbHandle,"select max(gid) FROM Groups ;");
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max(gid)'];
include('db_connection.php');
$query2="insert into Participants 
values('$largestNumber','$eid','$team','$name1','$phone1','$email1','$college1','$dep1','$year1','$tid');";
$insert=mysqli_query($dbHandle,$query2);
$query3="insert into Participants 
values('$largestNumber','$eid','$team','$name2','$phone2','$email2','$college2','$dep2','$year2','$tid');";
$insert=mysqli_query($dbHandle,$query3);
$query4="insert into Participants 
values('$largestNumber','$eid','$team','$name3','$phone3','$email3','$college3','$dep3','$year3','$tid');";
$insert=mysqli_query($dbHandle,$query4);
$query5="insert into Participants 
values('$largestNumber','$eid','$team','$name4','$phone4','$email4','$college4','$dep4','$year4','$tid');";
$insert=mysqli_query($dbHandle,$query5);
if($insert)
{   
$to = $email1;
$subject = "Dexterix 2018" ;
$body = "<h3>Greetings from CODE </h3>
<p> Thanks for registering to participate in DexteriX 2018 organised by CODE! This email confirms your registration for the event $event. Please report at the specified venue on time
on the specified dates during the event on 2nd and 3rd November 2018 at Atria 
Institute of Technology.</p>
<p>For any queries contact,</p>
<ul>
<li>Raghu N: +91 96865 19241</li>
<li>Ranjitha: +91 96322 77672</li>
</ul>
<p>We look forward to have you with us at Dexterix ‘18.</p>
<p>Sincerely,</p>
<p>CODE. </p>";
$headers = 'From: Dexterix 2018 no-reply@dexterix.com' .  "\r\n"  ."CC:$email2,$email3,$email4"."\r\n";
// $headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
if(mail($to, $subject, $body,$headers)) {
//echo('<br>'."Email Sent ;D ".'</br>');
header("Location: registration_successful.html");
} 
else 
{
// echo("<p>Email Message delivery failed</p>");
}
exit(0);
}
else{
header("Location: registration_failed.html");
// print "Error:".mysql_error(); 
}
}
else if($id==5){
$eid=$_POST['eid'];
$name1=$_POST['name1'];
$phone1=$_POST['phone1'];
$email1=$_POST['email1'];
$dep1=$_POST['dep1'];
$year1=$_POST['sem1'];
$name2=$_POST['name2'];
$phone2=$_POST['phone2'];
$email2=$_POST['email2'];
$dep2=$_POST['dep2'];
$year2=$_POST['sem2'];
$name3=$_POST['name3'];
$phone3=$_POST['phone3'];
$email3=$_POST['email3'];
$dep3=$_POST['dep3'];
$year3=$_POST['sem3'];
$name4=$_POST['name4'];
$phone4=$_POST['phone4'];
$email4=$_POST['email4'];
$dep4=$_POST['dep4'];
$year4=$_POST['sem4'];
$tid=$_POST['tid'];
$college1=$_POST['college1'];
$college2=$_POST['college2'];
$college3=$_POST['college3'];
$college4=$_POST['college4'];
$college5=$_POST['college5'];
$name5=$_POST['name5'];
$phone5=$_POST['phone5'];
$email5=$_POST['email5'];
$dep5=$_POST['dep5'];
$year5=$_POST['sem5'];
$team=5;
$query ="INSERT INTO Groups(`eidfk` ) VALUES('$eid')";
$flagAdd=mysqli_query($dbHandle,$query);
include('dbconnection.php');
$rowSQL = mysqli_query($dbHandle,"select max(gid) FROM Groups ;");
$row = mysqli_fetch_array( $rowSQL );
$largestNumber = $row['max(gid)'];
include('dbconnection.php');
$query2="insert into Participants 
values('$largestNumber','$eid','$team','$name1','$phone1','$email1','$college1','$dep1','$year1','$tid');";
$insert=mysqli_query($dbHandle,$query2);
$query3="insert into Participants 
values('$largestNumber','$eid','$team','$name2','$phone2','$email2','$college2','$dep2','$year2','$tid');";
$insert=mysqli_query($dbHandle,$query3);
$query4="insert into Participants 
values('$largestNumber','$eid','$team','$name3','$phone3','$email3','$college3','$dep3','$year3','$tid');";
$insert=mysqli_query($dbHandle,$query4);
$query5="insert into Participants 
values('$largestNumber','$eid','$team','$name4','$phone4','$email4','$college4','$dep4','$year4','$tid');";
$insert=mysqli_query($dbHandle,$query5);
$query6="insert into Participants 
values('$largestNumber','$eid','$team','$name5','$phone5','$email5','$college5','$dep5','$year5','$tid');";
$insert=mysqli_query($dbHandle,$query6);
if($insert)
{   
$to = $email1;
$subject = "Dexterix 2018" ;
$body = "<h3>Greetings from CODE </h3>
<p> Thanks for registering to participate in DexteriX 2018 organised by CODE! This email confirms your registration for the event $event. Please report at the specified venue on time
on the specified dates during the event on 2nd and 3rd November 2018 at Atria 
Institute of Technology.</p>
<p>For any queries contact,</p>
<ul>
<li>Raghu N: +91 96865 19241</li>
<li>Ranjitha: +91 96322 77672</li>
</ul>
<p>We look forward to have you with us at Dexterix ‘18.</p>
<p>Sincerely,</p>
<p>CODE. </p>";
$headers = 'From: Dexterix 2018 no-reply@dexterix.com' .  "\r\n"  ."CC:$email2,$email3,$email4,$email5"."\r\n";
// $headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
if(mail($to, $subject, $body,$headers)) {
echo('<br>'."Email Sent ;D ".'</br>');
header("Location: registration_successful.html");
} 
else 
{
// echo("<p>Email Message delivery failed</p>");
}
exit(0);
}
else{
header("Location: registration_failed.html");
 // print "Error:".mysqli_error(); 
}
}
?>
