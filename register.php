
<!DOCTYPE html>
<html>
  <head>
    <title>REGISTER
    </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEF88TUQE1XfTDginYNRWpU5YzDkGGrc&callback=initMap">
    </script>          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.9.1.js">
    </script>
    <style type='text/css'>
      label:after {
        content: '*';
        color: #FF0000;
      }
      .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #80808059;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .25rem;
      }
      body{
        font-family: 'Raleway', sans-serif;
        background-image: url(images/stars-about.png);
      }
      input {
        width: 80%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border :0px;
        border-bottom: 2px solid white;
        display: block;
        border-radius: 0px;
        background-color: transparent;
        color:#fff;
      }
      button {
        background-color: #555555;
      }
      input:focus,
      select:focus,
      textarea:focus,
      button:focus {
        outline: none;
      }
      a {
        color: #fff;
      }
      label{
        color:#fff;
      }
      card-link{
        color:#fff;
      }

      <meta name="viewport" content="width=device-width, initial-scale=1">

#myImg {
    border-radius: 0px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.8;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 30%;
    height: 500px;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 100px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 70%;
    }
}
    </style>
  </head>
  <body>
    <?php include('navbar.php') ; ?>
    <div class='container mt-3'>
      <h2 style="color: #fff;margin-bottom:30px;">REGISTRATION
      </h2>
      <div id='accordion'>
        <?php
include('dbconnection.php');
$id=$_GET['id'];
$eid=$_POST['eid'];
$type=$_POST['type'];
$query="select ename,reg_amount from Events where eid='$eid';";
$run_query=mysqli_query($dbHandle,$query);
$row=mysqli_fetch_assoc($run_query);;
$ename=$row['ename'];
$amount=$row['reg_amount'];
if($id==1) 
{ 
echo "
<div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' src='images/qrcode.jpg'>
  <div id='caption'></div>
</div>
<form action='save.php' method='POST'>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapseOne' style='color: !important#fff;'>
<strong>PARTICIPANT 1</strong>
</a>
</div>
<div id='collapseOne' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<input type='hidden' id='' name='id' value='$id'>
<input type='hidden' id='' name='eid' value='$eid'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name1'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college1' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event1' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email1'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone1'>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep1'>
<label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem1' style='width: 50px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div></div>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsepay'>
<strong> PAYMENT DETAILS </strong>
</a>
</div>
<div id='collapsepay' class='collapse' data-parent='#accordion'>
<div class='card-body'> 
<p style='color:#fff;' id='demo'></p>
<p>
<img id='myImg' src='images/paytm.jpg' style='width:20%;max-width:300px;height: 60px;'></p>
<label>TRANSACTION ID:</label>
<input required type='text' id='' name='tid'>
<button type='submit' formaction='save.php' class='btn'>REGISTER!</button>  </div>
</div>
</div>
</form>
</div>" ;
} 
else if($id==2){
echo "
<div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' src='images/qrcode.jpg'>
  <div id='caption'></div>
</div>
<form method='POST' action='save.php'>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapseOne'>
<strong>PARTICIPANT 1</strong>
</a>
</div>
<div id='collapseOne' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<input type='hidden' id='' name='id' value='$id'>
<input type='hidden' id='' name='eid' value='$eid'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name1'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college1' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event1' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email1'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone1'>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep1'>
<label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem1' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsetwo'>
<strong>PARTICIPANT 2</strong>
</a>
</div>
<div id='collapsetwo' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name2'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college2' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event2' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='name' name='email2'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone2'> 
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep2'>
<label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem2' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select></div></div>
</div>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsepay'>
<strong> PAYMENT DETAILS </strong>
</a>
</div>
<div id='collapsepay' class='collapse' data-parent='#accordion'>
<div class='card-body'> 
<p style='color:#fff;' id='demo'></p>
<p>
<img id='myImg' src='images/paytm.jpg' style='width:20%;max-width:300px;height: 60px;'></p>
<label>TRANSACTION ID:</label>
<input required type='text' id='' name='tid'>
<button type='submit' formaction='save.php' class='btn'>REGISTER!</button>  </div>
</div>
</div>
</form>" ;
}
else if($id==3)
{
echo "
<div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' src='images/qrcode.jpg'>
  <div id='caption'></div>
</div>
<form method='POST' action='save.php'>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapseOne'>
<strong>PARTICIPANT 1</strong>
</a>
</div>
<div id='collapseOne' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<input type='hidden' id='custId' name='id' value='$id'> 
<input type='hidden' id='' name='eid' value='$eid'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name1'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college1' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event1' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email1'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone1'>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep1'>
<label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem1' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsetwo'>
<strong>PARTICIPANT 2</strong>
</a>
</div>
<div id='collapsetwo' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name2'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college2' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event2' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email2'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone2'>  
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep2'>
<label>SEMESTER/YEAR:</label>
<select  id='' name='sem2' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select></div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsethree'>
<strong>PARTICIPANT 3</strong>
</a>
</div>
<div id='collapsethree' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name3'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college3' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event3' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email3'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone3'>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='' name='dep3'>
<label>SEMESTER/YEAR:</label>
<select  id='' name='sem3' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
</div>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsepay'>
<strong> PAYMENT DETAILS </strong>
</a>
</div>
<div id='collapsepay' class='collapse' data-parent='#accordion'>
<div class='card-body'>  
<p style='color:#fff;' id='demo'></p>
<p>
<img id='myImg' src='images/paytm.jpg' style='width:20%;max-width:300px;height: 60px;'></p>
<label>TRANSACTION ID:</label>
<input required type='text' id='' name='tid'>
<button type='submit' formaction='save.php' class='btn'>REGISTER!</button>  </div>
</div>
</div>
</form>" ; 
}
else if($id==4)
{
echo "
<div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' src='images/qrcode.jpg'>
  <div id='caption'></div>
</div>
<form method='POST' action='save.php'>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapseOne'>
<strong>PARTICIPANT 1</strong>
</a>
</div>
<div id='collapseOne' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<input type='hidden' id='custId' name='id' value='$id'>
<input type='hidden' id='id' name='eid' value='$eid'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name1'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college1' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event1' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email1'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone1'> 
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep1'> <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem1' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsetwo'>
<strong> PARTICIPANT 2</strong>
</a>
</div>
<div id='collapsetwo' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name2'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college2' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event2' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email2'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone2'>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep2'>
<label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem2' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsethree'>
<strong>PARTICIPANT 3</strong>
</a>
</div>
<div id='collapsethree' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name3'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college3' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event3' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email3'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone3'>   <label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep3'>  <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem3' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsefour'>
<strong>PARTICIPANT 4</strong>
</a>
</div>
<div id='collapsefour' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name4'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college4' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist> 
<label>EVENT:</label>
<input type='text' id='' name='event4' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email4'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone4'> 
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep4'> <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem4' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
</div>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsepay' onClick='mul();'>
<strong> PAYMENT DETAILS </strong>
</a>
</div>
<div id='collapsepay' class='collapse' data-parent='#accordion' >
<div class='card-body'>  
<p style='color:#fff;' id='demo'></p>
<p>
<img id='myImg' src='images/paytm.jpg' style='width:20%;max-width:300px;height: 60px;'></p>
<label>TRANSACTION ID:</label>
<input required type='text' id='' name='tid'>
<button type='submit' formaction='save.php' class='btn'>REGISTER!</button>  </div>
</div>
</div>
</form>" ; 
}
else if($id==5){
echo "
<div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' src='images/qrcode.jpg'>
  <div id='caption'></div>
</div>
<form method='POST' action='save.php'>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapseOne'>
<strong>PARTICIPANT 1</strong>
</a>
</div>
<div id='collapseOne' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<input type='hidden' id='custId' name='id' value='$id'>
<input type='hidden' id='id' name='eid' value='$eid'>
<label for='fname'>NAME: </label>
<input required type='text' id='' name='name1'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college1' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event1' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='' name='email1'>
<label>PHONE NUMBER:</label>
<input required type='text' id='' name='phone1'> 
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep1'> <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem1' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsetwo'>
<strong> PARTICIPANT 2</strong>
</a>
</div>
<div id='collapsetwo' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name2'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college2' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event2' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email2'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone2'>
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep2'>
<label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem2' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsethree'>
<strong>PARTICIPANT 3</strong>
</a>
</div>
<div id='collapsethree' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name3'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college3' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist>
<label>EVENT:</label>
<input type='text' id='' name='event3' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email3'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone3'>   <label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep3'>  <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem3' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsefour'>
<strong>PARTICIPANT 4</strong>
</a>
</div>
<div id='collapsefour' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name4'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college4' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist> 
<label>EVENT:</label>
<input type='text' id='' name='event4' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email4'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone4'> 
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep4'> <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem4' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsefive'>
<strong>PARTICIPANT 5</strong>
</a>
</div>
<div id='collapsefive' class='collapse' data-parent='#accordion'>
<div class='card-body'>
<label for='fname'>NAME: </label>
<input required type='text' id='fname' name='name5'>
<label for='lname'>COLLEGE:</label>
<input list='colleges' name='college5' id='name' placeholder='If others,please specify' />
<datalist id='colleges'>
<option value='Atria Institute Of Technology'>
<option value='Others'>
</datalist> 
<label>EVENT:</label>
<input type='text' id='' name='event5' value='$ename' readonly>
<label>EMAIL:</label>
<input required type='email' id='email1' name='email5'>
<label>PHONE NUMBER:</label>
<input required type='text' id='phone1' name='phone5'> 
<label for='fname'>DEPARTMENT: </label>
<input required type='text' id='fname' name='dep5'> <label>SEMESTER/YEAR:</label>
<select  id='sem1' name='sem5' style='width: 40px;'>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='pu1'>11th</option>
<option value='pu2'>12th</option>
</select>
</div></div>
</div>
<div class='card'>
<div class='card-header'>
<a class='card-link' data-toggle='collapse' href='#collapsepay' onClick='mul();'>
<strong> PAYMENT DETAILS </strong>
</a>
</div>
<div id='collapsepay' class='collapse' data-parent='#accordion' >
<div class='card-body'>  
<p style='color:#fff;' id='demo'></p>
<img id='myImg' src='images/paytm.jpg' style='width:20%;max-width:300px;height: 60px;'></p>
<label>TRANSACTION ID:</label>
<input required type='text' id='' name='tid'>
<button type='submit' formaction='save.php' class='btn'>REGISTER!</button>  </div>
</div>
</div>
</form>" ;
}
?>
      </div>
    </div>
    <?php include('footer.php') ; ?> 
    <script>
      /* function mul()
    {
         var x= <?php echo $id?>;
         var y=30*x;
         document.getElementById("demo").innerHTML = 'AMOUNT: '+ y;
    }
    function multiply()
    {
        var x=<?php echo $amount?>;
        document.getElementById("demo").innerHTML = 'AMOUNT: '+ x;
    }*/
      $("#name").on('input', function () {
        var val = this.value;
        if($('#colleges option').filter(function(){
          return this.value === val;
        }
                                       ).length) {
          var value=this.value;
          if(value=='Atria Institute Of Technology'){
            var x= <?php echo $id?>;
            var y=30*x;
            document.getElementById("demo").innerHTML = 'AMOUNT: '+ y;
          }
          else {
            var x=<?php echo $id?>;
            var y=30*2*x;
            document.getElementById("demo").innerHTML = 'AMOUNT: '+ y;
          }
        }
      });

      var modal = document.getElementById('myModal');

var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}
    </script> 

       <script src="js/jquery-1.11.3.js"></script> 
        <script src="js/bootstrap.js"></script>   

  </body>
</html>
