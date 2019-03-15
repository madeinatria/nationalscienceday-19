<style>
  
                                            .carousel .item {
                        height: auto!important;
                        width: auto!important;
                        background-color: #ffffff;
                        
                        }
                                  #carousel-example-generic{
                  width:auto;height:auto;
                }
                .carousel-inner {
                    overflow: scroll !important;
                }
     
    
</style>
<nav style="  font-weight: 250; color:white!important; font-family: 'Raleway', sans-serif; min-height:55px !important; font-size: 13.5px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">SAPTARANG</a>
   <button  class="navbar-toggler ml-auto custom-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item px-2">
            <a style="    font-weight: 500; color:white!important;" class="nav-link" href="index.php">HOME</a>
         </li>
        
         <li class="nav-item px-2">
            <a  style="  font-weight: 500; color:white;" class="nav-link" href="events.php">EVENTS</a>
         </li>

         <li class="nav-item px-2" style="padding: 8px;"><a data-toggle="modal" data-target=".bs-example-modal-lg" style="  font-weight: 500; color:white; padding: 8px;" >EVENTS SCHEDULE</a></li>

       
      </ul>
   </div>
</nav>

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-lg" >
        <div class="modal-content" id="event" >
       <!--   <a id="pdf" class="text-center" style="display:block;color:#3366BB ;" href="image/general/Schedule.pdf" download>
                      Download PDF
                          </a> -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                  <div class="item active">
                    <img class="img-responsive" src="images/one.png" alt="...">
                      <div class="carousel-caption">

                      </div>


                  </div>

                  <div class="item">
                    <img class="img-responsive" src="images/two.png" alt="...">
                    <div class="carousel-caption">

                    </div>
                  </div>

              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

        </div>
      </div>
  </div>
