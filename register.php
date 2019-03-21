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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEF88TUQE1XfTDginYNRWpU5YzDkGGrc&callback=initMap">
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
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
      border: 1px solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    body {
      font-family: 'Raleway', sans-serif;
      background-image: url(images/stars-about.png);
    }

    input,
    select {
      width: 80%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 0px;
      border-bottom: 2px solid white;
      display: block;
      border-radius: 0px;
      background-color: transparent;
      color: #fff;
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

    label {
      color: #fff;
    }

    card-link {
      color: #fff;
    }

    <meta name="viewport"content="width=device-width, initial-scale=1">#myImg {
      border-radius: 0px;
      cursor: pointer;
      transition: 0.3s;
    }

    #myImg:hover {
      opacity: 0.8;
    }
    #imageToSwap{
                    height:200px; 
                    width:200px;
                    display: block;
                     margin: 0 auto
                }

                @media (min-width: 576px) {
                .modal-dialog {
                 margin-bottom: 30px;
                 margin-left: auto;
                 margin-right: auto;
                }
                #imageToSwap{
                    height:400px; 
                    width:400px;
                    display: block;
                     margin: 0 auto
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

      <!--<div id='myModal' class='modal'>
        <span class='close'>&times;</span>
        <img class='modal-content' src='images/qrcode.jpg'>
        
      </div>  -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content center">
                    <div class="modal-header" style="display:block; text-align:center;" >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="display:block; text-align:center;"  id="myModalLabel">Paytm</h4>
                    </div>
                    <div class="modal-body center">
                        <img  id="imageToSwap" src="images/rajendrasir.jpeg"/>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                 </div>
            </div>
        </div>
              
      <form action='save.php' method='POST'>
        <div class='card'>
          <div class='card-header'>
            <a class='card-link' data-toggle='collapse' href='#collapseOne' style='color: !important#fff;'>
              <strong>DETAILS</strong>
            </a>
          </div>
          <div id='collapseOne' class='open' data-parent='#accordion'>
            <div class='card-body'>
              <label for='fname'>NAME: </label>
              <input required type='text' id='' name='name1'>
              </br>
              <label>EVENT:</label>
              <select name='event'>
                <optgroup style='background-color:white; color: black;' label='Inter-College Events'>
                  <option value='1'>Classical Solo Dance</option>
                  <option value='2'>Group Dance</option>
                  <option value='3'>Battle of Bands</option>
                  <option value='4'>Fashion Show</option>
                  <option value='5'>Beat Boxing</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Art'>
                  <option value='6'>Painting</option>
                  <option value='7'>Sketching</option>
                  <option value='8'>Rangoli</option>
                  <option value='9'>Collage</option>
                  <option value='10'>Photography</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Fun'>
                  <option value='11'>Hogathon</option>
                  <option value='12'>Minute To Win it</option>
                  <option value='13'>Antakshari</option>
                  <option value='14'>PUBG</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Dance'>
                  <option value='15'>Solo</option>
                  <option value='16'>Group</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Music'>
                  <option value='17'>Indian Solo</option>
                  <option value='18'>Classical vocal Solo</option>
                  <option value='19'>Western vocal Solo(Acoustic)</option>
                </optgroup>
                <optgroup style='background-color:#404040;' label='Intra-College Literary'>
                  <option value='20'>Poetry</option>
                  <option value='21'>Debate</option>
                  <option value='22'>Creative Writing</option>
                  <option value='23'>Quiz</option>
                </optgroup>
              </select>
              </br>
              <label>EMAIL:</label>
              <input required type='email' id='' name='email1'>
              </br>
              <label>USN:</label>
              <input required type='text' id='' name='usn'>
              </br>
              <label>PHONE NUMBER:</label>
              <input required type='text' id='' name='phone1'>
              </br>
              <label for='fname'>DEPARTMENT: </label>
              <select name='dep1'>
                <optgroup style='background-color:#404040;' label='Department'>
                  <option value='CSE'>CSE</option>
                  <option value='ECE'>ECE</option>
                  <option value='Mech'>Mechanical Engineering</option>
                  <option value='CIV'>Civil Engineering</option>
                  <option value='ISE'>ISE</option>
                  <option value='Other'>Other</option>
                </optgroup>
                </select>
              </br>
              <label>SEMESTER:</label>
                <input required type="number" name="sem">
              </br>
              <label>College:</label>
                <input required type="text" name="college" value="Atria Institute of Technology">
              </br>
              <label>Payment Transaction ID: </label>
              <input required type='text' id='' name='trans'>
              </br>
              <div class="form-group">
                <label for="tid" class="col-md-2 col-sm-2">Pay Using :</label>
                <div class="col-md-6 col-sm-10">
                  <a data-toggle="modal" data-target="#myModal"><img style="widht:160px; height:70px;" src="images/paytm.jpg" />
                    <p style="color: white;"><u>Click here</u></p>
                  </a>
                </div>
              </div>
              <button type='submit' style='width:130px;border-radius: 1px;height: 40px;margin-top:20px;color:white;background-color:#80808059; border: 1px solid white;'
                class='btn btn-default '>SUBMIT</button>
            </div>
          </div>
        </div>




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
    }
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
}*/
  </script>

  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>