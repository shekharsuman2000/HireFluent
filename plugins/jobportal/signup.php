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
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HireFluent|New Account</title>
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
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <style>
.CustomAlert {
  background: #ffdb9b;
  padding: 20px 40px;
  min-width: 420px;
  position: absolute;
  right: 0px;
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
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: #ce8500;
  font-size: 30px;
}
.CustomAlert .msg {
  padding: 0 20px;
  font-size: 18px;
  color: #ce8500;
}

.CustomAlert .close-btn {
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  background: #ffd080;
  padding: 20px 18px;
  cursor: pointer;
}
.close-btn .fa-times {
  color: #ce8500;
  font-size: 22px;
  line-height: 40px;
}

    </style>



  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">HIREFLUENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
           
            <li class="nav-item cta mr-md-2"><a href="company_login.php" class="nav-link">Post a Job</a></li>
            <li class="nav-item cta cta-colored"><a href="login.php" class="nav-link">Want a Job</a></li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="hero-wrap js-fullheight" style="background-image: url('images/back1.jpg');" data-stellar-background-ratio="0.5">
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
                          if ($msg == "Registration Successfull") {
                            ?>
                              <script>
                                window.setTimeout(function() {
                                  location.href = "login.php";
                                }, 4000);
                              </script>
                
                
                          <?php
                            }
                          
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
    margin-left: -100px;font-size:50px; /* width/2 */
    position: absolute;">Create an Account</h1>
                    <div class="" id="v-pills-1" role="tabpanel" aria-labelledby="">
                    <form action="signup_action.php" method="POST" class="subscribe-form">
               
                      <input style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -180px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" required type="text" name="name" class="" placeholder="Fullname">
                      <br>
                      
                      <input style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -125px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" required type="email" name="email" class="" placeholder="Email">
                      <br>
                      <br>
        
                      <input style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -80px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" required type="password" name="password" class="" placeholder="New Password">
                      <br>
                      <br>

                      <select  style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: -20px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;"   id="" name="sign_up_as">

    <option value="1">Work as a Freelancer</option>
    <option value="0">Hire a freelancer</option>
    

  </select>


                   <button style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: 20px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" type="submit" name="submit">Sign up</button>

    <br>
                    </form>
    <button style=" left: 50%;
    top: 50%;
    width: 230px;
    margin-top: 70px; /* height/2 */
    margin-left: -115px; /* width/2 */
    position: absolute;" ><a href="login.php">Already have an account</a></button>
      
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

  
    
    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter user_id address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
         

      
               
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Acharya College Road Bangalore 560090</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+919366198160</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@jobshop.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank">Akash & Sumeet</a>
</p>
          </div>
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