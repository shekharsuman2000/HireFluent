<?php
  ob_start();
  session_start();
  ob_end_clean();
	$db=new PDO('mysql:host=localhost;dbname=db_jobportal','root','');
	if($db)
	{
			echo "";
	}
	else
	{
			echo "";
	}
	if (isset($_SESSION['user_id'])==true)
{
    header('Location:../../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobShop|Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
:root {
  --warning: #ffdb9b;
  --warning_deep: #ce8500;
  --success: #07aa1d;
  --danger: #aa0707;
}
* {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  font-family: "Poppins", sans-serif;
}
*,
::before,
::after {
  box-sizing: border-box;
}
a,
a:link,
a:visited {
  color: inherit;
}
html {
  scroll-behavior: smooth;
  height: 100%;
}
.noscroll {
  min-height: 100vh;
  overflow: hidden;
}
body {
  height: 100%;
  margin: 0;
  padding: 0;
  display: grid;
  place-items: center;
  overflow: hidden;
}


.CustomAlert {
  background: #ffdb9b;
  padding: 20px 40px;
  min-width: 200px;
  position: absolute;
  right: 100px;
  top: 100px;
  overflow: hidden;
  border-radius: 4px;
  border-left: 8px solid #ffa502;
  z-index: 10000;
}

.CustomAlert.show {
  animation: show_slide 1s ease forwards;
}
@keyframes show_slide {
  0% {
    transform: translateX(100%);
  }
  40% {
    transform: translateX(-10%);
  }
  80% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-10px);
  }
}
.CustomAlert.hide {
  animation: hide_slide 1s ease forwards;
}
@keyframes hide_slide {
  0% {
    transform: translateX(-10%);
  }
  40% {
    transform: translateX(0%);
  }
  80% {
    transform: translateX(-10%);
  }
  100% {
    transform: translateX(100%);
  }
}
.CustomAlert .fa-info-circle {
  position: absolute;
  left: 70px;
  top: 80%;
  transform: translateY(-50%);
  color: #ce8500;
  font-size: 50px;
}
.CustomAlert .msg {
  padding: 0 20px;
  font-size: 13px;
  color: #ce8500;
}

.CustomAlert .close-btn {
  position: absolute;
  right: 0px;
  top: 70%;
  transform: translateY(-50%);
  background: #ffd080;
  padding: 20px 18px;
  cursor: pointer;
}

    </style>
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">JobShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
  

          </ul>
        </div>
      </div>
    </nav>


    <div class="hero-wrap js-fullheight" style="background-image: url('images/back.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          
            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 

                  </div>
                </div>
                <div class="">
          <?php
          if(isset($_GET['msg'])==True)
          {
            $msg=$_GET['msg'];
            
           ?>

      
                
          <div class="CustomAlert hide">
                <span class="fa fa-info-circle"></span>
                <span class="msg"><?php echo $msg;?></span>
                <span class="">
                    <span class="fa fa-times"></span>
                </span>
            </div>
                </div>
                

           <?php 
         
          }
    ?>
                  
                  <div class="" id="v-pills-tabContent">
                    <h1 style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -300px; /* height/2 */
    margin-left: -100px; /* width/2 */
    position: absolute;">Forgot Password</h1>
                    <div class="" id="v-pills-1" role="tabpanel" aria-labelledby="">
                    <form action="forgotPassword/index.php" method="POST" class="subscribe-form">
               
                      <input style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -125px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" required type="text" name="email" class="" placeholder="Enter your resgiter Email">
                      <br>
                      <br>
                     
                      <br>
                   <button style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -50px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" type="submit" name="submit">Submit</button>

    <br>
                    </form>
                    <button style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -5px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;"><a href="login.php">Back To Login</a></button>

    <br>
                    </div>

                          <div class="">
                            <div class="form-group">
                          
                             
                                
                              </div>
                            </div>
                          </div>
            
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                      <form action="#" class="search-job">
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-user"></span></div>
                               
                              </div>
                            </div>
                          </div>
                 
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
             
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Categories work wating for you</span>
            <h2 class="mb-4"><span>Current</span> Job Posts</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
              <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
              <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
              <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
            </ul>
          </div>
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
              <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
              <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
              <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
            </ul>
       

        <div class="row">
          <div class="col-md-12 text-center">

  
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script>
const alert = document.querySelector(".CustomAlert");
const close = document.querySelector(".close-btn");
const msg = document.querySelector(".msg");
var check;

function alertShow(value) {
  alert.classList.toggle("hide");
  alert.classList.toggle("show");
  msg.innerHTML=value;

  clearTimeout(check);
  check = setTimeout(() => {
    alert.classList.add("hide");
    alert.classList.remove("show");
  }, 5000);
}
close.addEventListener("click", function () {
  alert.classList.add("hide");
  alert.classList.remove("show");
  clearTimeout(check);
});
function alertShowDialog(all){
  alertShow(all);
}
</script>
  </body>
</html>