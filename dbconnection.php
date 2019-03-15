<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbHandle=  mysqli_connect($host,$username,$password);
    if(!$dbHandle){
        die("Could not connect".mysql_error());
    }
    else {
        echo("CONNECTED!!") ;
    }
    mysqli_select_db($dbHandle,'saptrang');
?>