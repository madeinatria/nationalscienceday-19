<!DOCTYPE html>
<html>
   <head>
      <title>Contact us - Dexterix</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEF88TUQE1XfTDginYNRWpU5YzDkGGrc&callback=initMap"></script>          
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/footer.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script>
         function init_map() {
         var var_location = new google.maps.LatLng(13.0325489,77.5899031);
         
           var var_mapoptions = {
             center: var_location,
             zoom: 16,
             styles:[
             {
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#212121"
                 }
               ]
             },
             {
               "elementType": "labels.icon",
               "stylers": [
                 {
                   "visibility": "off"
                 }
               ]
             },
             {
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#757575"
                 }
               ]
             },
             {
               "elementType": "labels.text.stroke",
               "stylers": [
                 {
                   "color": "#212121"
                 }
               ]
             },
             {
               "featureType": "administrative",
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#757575"
                 }
               ]
             },
             {
               "featureType": "administrative.country",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#9e9e9e"
                 }
               ]
             },
             {
               "featureType": "administrative.land_parcel",
               "stylers": [
                 {
                   "visibility": "off"
                 }
               ]
             },
             {
               "featureType": "administrative.locality",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#bdbdbd"
                 }
               ]
             },
             {
               "featureType": "poi",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#757575"
                 }
               ]
             },
             {
               "featureType": "poi.park",
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#181818"
                 }
               ]
             },
             {
               "featureType": "poi.park",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#616161"
                 }
               ]
             },
             {
               "featureType": "poi.park",
               "elementType": "labels.text.stroke",
               "stylers": [
                 {
                   "color": "#1b1b1b"
                 }
               ]
             },
             {
               "featureType": "road",
               "elementType": "geometry.fill",
               "stylers": [
                 {
                   "color": "#2c2c2c"
                 }
               ]
             },
             {
               "featureType": "road",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#8a8a8a"
                 }
               ]
             },
             {
               "featureType": "road.arterial",
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#373737"
                 }
               ]
             },
             {
               "featureType": "road.highway",
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#3c3c3c"
                 }
               ]
             },
             {
               "featureType": "road.highway.controlled_access",
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#4e4e4e"
                 }
               ]
             },
             {
               "featureType": "road.local",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#616161"
                 }
               ]
             },
             {
               "featureType": "transit",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#757575"
                 }
               ]
             },
             {
               "featureType": "water",
               "elementType": "geometry",
               "stylers": [
                 {
                   "color": "#000000"
                 }
               ]
             },
             {
               "featureType": "water",
               "elementType": "labels.text.fill",
               "stylers": [
                 {
                   "color": "#3d3d3d"
                 }
               ]
             }
           ]         
           };
         
         var var_marker = new google.maps.Marker({
         position: var_location,
         map: var_map,
         title:"Atria Institute of Technology"});
         
           var var_map = new google.maps.Map(document.getElementById("map-container"),
               var_mapoptions);
         
         var_marker.setMap(var_map);
         
         }
         google.maps.event.addDomListener(window, 'load', init_map);
      </script>
      <style>
         body{
         background-image: url(images/stars-about.png);
         color:white;
         }
         #for_bg{
         background-image: url("image/me/bg.png");
         }
         #map-container { height: 300px;}
         /*Contact sectiom*/
         .content-header{
         font-family: 'Oleo Script', cursive;
         color:#fcc500;
         font-size: 45px;
         }
         .section-content{
         text-align: center;
         }
         #contact{
         font-family: 'Teko', sans-serif;
         padding-top: 60px;
         width: 100%;
         width: 100vw;
         height: 550px;
         color : #000000;
         }
         .contact-section{
         padding-top: 40px;
         }
         .contact-section .col-md-6{
         width: 50%;
         }
         .form-line{
         border-right: 1px solid #B29999;
         }
         .form-group{
         margin-top: 10px;
         }
         label{
         font-size: 1.3em;
         line-height: 1em;
         color:white!important!;
         font-weight: normal;
         }
         .form-control{
         font-size: 1.3em;
         color: #080808;
         }
         textarea.form-control {
         height: 135px;
         /* margin-top: px;*/
         }
         .submit{
         font-size: 1.1em;
         float: right;
         width: 150px;
         background-color: transparent;
         color: #fff;
         }
      </style>
   </head>
   <body>
      <?php include('navbar.php') ; ?>
      <br/>
      <div class="container">
         <div class="row">
            <h2 style="text-align:center;">We are here</h2>
         </div>
      </div>
      <div id="map-container" class="col-md-12"></div>
      <!-- contact details -->
      <div id="for_bg">
         <div class="section-content">
            <h1 class="section-header" style="font-size:20px;text-transform: none;">Contact us: support@dexterix.com<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> </span></h1>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div style="margin-left: auto;
                     margin-right: auto;
                     text-align: center;">
                     <i class="fa fa-phone fa-5x mar-bot20"></i>
                     <h4 class="text-bold"><b>Raghu</b></h4>
                     <p><br>Phone: +91 96865 19241</b></p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div style="margin-left: auto;
                     margin-right: auto;
                     text-align: center;">
                     <i class="fa fa-phone fa-5x mar-bot20"></i>
                     <h4 class="text-bold"><b>Ranjitha</b></h4>
                     <p><br>Phone: +91 96322 77672</b></p>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div style="margin-left: auto;
                     margin-right: auto;
                     text-align: center;">
                     <i class="fa fa-phone fa-5x mar-bot20"></i>
                     <h4 class="text-bold"><b>Sampath</b></h4>
                     <p><br> Phone: +91 88927 12796</b></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- contact form -->
         <section id="contact">
            <div class="section-content">
               <h3>Drop in a message</h3>
            </div>
            <div class="contact-section">
               <div class="container">
                  <form action="contact.php" method="POST" role="form">
                     <div class="row">
                        <div class="col-md-6 form-line">
                           <div class="form-group">
                              <label style="color:white!important;" for="name">Your name</label>
                              <input type="text" class="form-control" id="name" name="name" placeholder=" Enter Name" required>
                           </div>
                           <div class="form-group">
                              <label style="color:white!important;" for="email">Email Address</label>
                              <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder=" Enter Email id" required>
                           </div>
                           <div class="form-group">
                              <label style="color:white!important;" for="telephone">Mobile No.</label>
                              <input type="tel" class="form-control" id="telephone" name="telephone" placeholder=" Enter 10-digit mobile no." required>
                           </div>
                        </div>
                        <div class="col-md-6 form-group">
                           <div class="form-group">
                              <label style="color:white!important;" for ="description"> Message</label>
                              <textarea  class="form-control" id="description" name="description" placeholder="Enter Your Message" cols:"5" rows:"5" required></textarea>
                           </div>
                           <div class="form-group" style="margin-top:15px;">
                              <button type="submit" style="color:white; border: 1px solid white;" class="btn btn-default submit"><i class="fa fa-paper-plane" ></i>  Send Message</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </section>
      </div>
      <?php include('footer.php') ; ?>
      <script src="js/jquery-1.11.3.js"></script>
      <script src="js/bootstrap.js"></script>
   </body>
</html>