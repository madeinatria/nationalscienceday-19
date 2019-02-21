<!doctype html>
<html lang="en" class="no-js">
   <head>
      <meta charset="UTF-8" />
      <title>Dexterix-2018</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.css" />
      <link rel="stylesheet" href="css/home.css" />
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,100,700%7Dosis:400,500" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
      </style>
        <script>
       
        </script>
   </head>
   <body>
   <nav style="  font-weight: 250; color:white!important; font-family: 'Raleway', sans-serif; min-height:55px !important; font-size: 13.5px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">DEXTERIX'18</a>
   <button  class="navbar-toggler ml-auto custom-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item px-2">
            <a style="color:white!important;" class="nav-link" href="index.php">HOME</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;" class="nav-link" href="about.php">ABOUT</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="http://www.makeathon.dexterix.com">MAKEATHON</a>
         </li>
         <li class="nav-item px-2">
            <a  style="color:white;" class="nav-link" href="events.php">EVENTS</a>
         </li>
       
          <li class="nav-item dropdown px-2">
        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SCHEDULE
        </a>
        <div class="dropdown-menu" style="background-color: black;"  aria-labelledby="navbarDropdown">
          <a style="color:white;  font-family: 'Raleway', sans-serif;" class="dropdown-item" href="day1.php">DAY 1</a>
          <a style="color:white;  font-family: 'Raleway', sans-serif;" class="dropdown-item" href="day2.php">DAY 2</a>
         
      </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="sponsors.php">SPONSORS</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="dexterix2017.php">DEXTERIX 2017</a>
         </li>
         <li class="nav-item px-2">
            <a style="color:white;"  class="nav-link" href="contact-us.php">CONTACT US</a>
         </li>
      </ul>
   </div>
</nav>
   <script type='text/javascript' src='js/jquery.particleground.js'></script>
      <script type='text/javascript' src='js/demo.js'></script>
      <div id="particles">
         <div  id="intro">
            <div class="fade-in one"  >
               <h1 style="margin-top:200px;font-weight:500!important; color:#f5f5f5">DEXTERIX'18</h1>
               <p style="font-size:24px;">November 2nd | November 3rd</p>
              <a  style="color:white;" href="#section2"><i class="fa fa-angle-double-down" style="color:white;font-size:106px"></i></a>

            </div>
         </div>
      </div>
    
<div id="section2"  style="background-color:black;opacity:0.8  ">
      <div class="container">
        <h2 style="text-decoration:underline;text-align:center;font-size:20px; padding-top:40px; font-weight:1000;" > Chief Guest</h2>
        </div>
       <div  style="padding-top:30px; margin-bottom:-30px;" class="container">
                <div class="row">
                   <div class="col-md-6">
                     <img id="logo"  class="center" style="   text-align:center; height: 450px;  width: 312px;" src="images\image-cg.jpg" alt="Community of Developing Enginners">

                     </div>
                  <div class="col-md-6">
                      <p style="text-decoration:underline;text-align:center;font-weight:1000; font-size:20px;">Ashish Khushu</p>
                       <p style="text-align:center;font-size:15px;">Chief Technology Officer, L&T Technology Services Limited</p>
                      <p  style=" text-align:justify ; font-size:15px;"> Ashish Khushu is Chief Technology Officer, L&T Technology Services and drives the company’s technology roadmap, to provide and develop IP’s, Solutions, Platforms and frameworks to address emerging investment areas in Digital Engineering.</p>
                      <p style=" text-align:justify ; font-size:15px;">Ashish has always worked in domains and industries strongly driven and impacted  by technology disruptions. His experience spans systems integrations and solution  in technical and high-performance computing, products - hardware and software for building technology infrastructure catering to high demands of the networked economy.</p>
                      <p style=" text-align:justify ; font-size:15px;">This has helped him developed a holistic view of the dynamics of technology and has been leveraging it for business growth given the extensive assignments in his career spanning over 28 years, in various roles and functions which include sales, strategy, consulting, competency delivery and managing P&L.</p>
                      <p style=" text-align:justify ; font-size:15px;">He has been a member of various Govt. committees on Driving Adoption of Open Standards and Open Source under the aegis of NIC, Ministry of I&T, GoI and National Knowledge Commission.</p>

                  
                  </div>
                </div>
              </div>
        </div>
                <?php include('footer.php') ; ?>
   </body>
</html>