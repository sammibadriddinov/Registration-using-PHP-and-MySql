<?php 
require 'login.php';
require 'reg.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Responsive Login Page</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="content" style="background: black;">
  <!--form area start-->
    <div class="form" >
        <!--login form start-->
        <form class="login-form" action="" method="post">
          <i class="fas fa-user-circle"></i>
          <input class="user-input" type="email" name="log_email" placeholder="Email">
          <input class="user-input" type="password" name="log_pass" placeholder="Password">
          <div class="options-01">
            <label class="remember-me"><input type="checkbox" name="">Remember me</label>
            <a href="#">Forgot your password?</a>
          </div>
          <input class="btn" type="submit" name="login" value="LOGIN">
          <div class="options-02">
            <p>Not Registered? <a href="#">Create an Account</a></p>
          </div>
        </form>
        <!--login form end-->
        <!--signup form start-->
        <form class="signup-form" action="" method="post">
          <i class="fas fa-user-plus"></i>
          <input class="user-input" type="email" name="reg_email" placeholder="Email Address">
          <input class="user-input" type="password" name="reg_pass" placeholder="Password">
          <input class="btn" type="submit" name="reg" value="SIGN UP">
          <div class="options-02">
            <p>Already Registered? <a href="#">Sign In</a></p>
          </div>
        </form>
        <!--signup form end-->
      </div>
      <!--form area end-->
  </div>
    
  <script src="script.js"></script>
  </body>
</html>
                           