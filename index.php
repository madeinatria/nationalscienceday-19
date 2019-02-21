<!doctype html>
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <title>National Science Day-2019</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="css/bootstrap.css" />
      <link rel="stylesheet" href="css/home.css" />
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,100,700%7Dosis:400,500" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script type='text/javascript' src='js/jquery.particleground.js'></script>
      <script type='text/javascript' src='js/demo.js'></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <style>

         body{
         font-family: 'Raleway', sans-serif;
         background-image: url("images/stars.jpg");
         }
         .nav-link{
         color:white!important;
         }
         /* make keyframes that tell the start state and the end state of our object */
         @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
         @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
         @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
         .fade-in {
         opacity:0;  /* make things invisible upon start */
         -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
         -moz-animation:fadeIn ease-in 1;
         animation:fadeIn ease-in 1;
         -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
         -moz-animation-fill-mode:forwards;
         animation-fill-mode:forwards;
         -webkit-animation-duration:1s;
         -moz-animation-duration:1s;
         animation-duration:1s;
         }
         .fade-in.one {
         -webkit-animation-delay: 0.7s;
         -moz-animation-delay: 0.7s;
         animation-delay: 0.7s;
         }
      
         #arrow{
           font-size:106px;

         }
            @media (max-width: 776px) {
         #arrow{
           font-size:56px;

         }
            }
      </style>
      <script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
   </head>
   <body>
     <nav style="  font-weight: 250; color:white!important; font-family: 'Raleway', sans-serif; min-height:55px !important; font-size: 13.5px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">National Science Day'19</a>
   <button  class="navbar-toggler ml-auto custom-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item px-2">
            <a style="    font-weight: 300; color:white!important;" class="nav-link" href="index.php">HOME</a>
         </li>
      
         <li class="nav-item px-2">
            <a  style="  font-weight: 300; color:white;" class="nav-link" href="events.php">EVENTS</a>
         </li>
       
          
      </ul>
   </div>
</nav>
      <div  id="particles">
         <div  id="intro"   style=" margin-top: 0px!important;">
            <div class="fade-in one"  >
               <h1 style="font-weight:500!important; font-size: 70px;color:#f5f5f5">National Science Day '19</h1>
               <p style="font-size:20px" >February 27th</p>

            </div>
         </div>
      </div>

                <?php include('footer.php') ; ?>
   </body>
</html>