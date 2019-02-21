<?php
    $host='localhost';
    $username='parvath1_Atria';
    $password='dexterix2018';
    $dbHandle=  mysqli_connect($host,$username,$password);
    if(!$dbHandle){
        die("Could not connect".mysql_error());
    }
    mysqli_select_db($dbHandle,'parvath1_Dexterix2018');
?>