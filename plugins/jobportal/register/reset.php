<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Login | Jo!n Us</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" type="text/css" media="screen" href="files/main.css" />

</head>

<body>
  <Section id="main">
    <section id="main">
      <header id="homeheader">
        <div class="logo">
          <a href="index.php">
            <h3>Jo!n Us</h3>
          </a>
        </div>
        <nav>
          <ul class="nav-links">
            <li>
              <a href="index.php#home">Home </a>
            </li>


            <li>
              <a href="index.php#contact">Contact </a>
            </li>
            <li>
              <a class="active" href="login.php">Forget Password</a>
            </li>
            <li>
              <a href="adminlogin.php">Admin</a>
            </li>
          </ul>
        </nav>
      </header>

      <div class="login center">
        <div class="box">
          <?php
          if (isset($_GET['email_msg']) == True) {
            $email_msg = $_GET['email_msg'];

          ?>

            <p class="notify_alert"><?php echo $email_msg; ?></p>

          <?php

          }
          ?>


          <form action="time.php" method="post">

            <h2 class="center">Forget Password</h2>

            <div class="container">


              <label for="email"><b>Enter OTP sent to your Email account</b></label>
              <input type="text" placeholder="OTP" name="otp" required>

              <button name="login_submit" type="submit">Verify</button>



              <p><a href="signUp.php">Need an Account?</a></p>
              <p><a href="login.php">Already have an Account?</a></p>

            </div>
          </form>

          <!-- <div class="bar"></div>
        <a class="admin" href="#">Administration</a> -->


        </div>
      </div>
    </Section>
</body>

</html>