<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['login-email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['login-password']); 
      
      $sql = "SELECT id FROM users WHERE Username = '$myusername' and Pword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!doctype html>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <link rel="stylesheet" href="login.css">

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
          
      .simplebar-content-wrapper {
        overflow: auto;

      }
      
    </style>
  </noscript>
  

  <!-- Page Title -->
  <title>OldSkool | Bootstrap 5 HTML Template</title>

</head>
<body class=" bg-light">

    <!-- Main Section-->
    <section
        class="mt-0 overflow-hidden  vh-100 d-flex justify-content-center align-items-center p-4">
        <!-- Page Content Goes Here -->

        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-5">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0" href="./index.html">
                <div class="d-flex align-items-center">
                    <img src="images\logo.png">
                </div>
            </a>
            <!-- / Logo-->
            <div class="shadow-xl p-4 p-lg-5 bg-white" >
                <h1 class="text-center fw-bold mb-5 fs-2">Login</h1>
               
                <span class="text-muted text-center d-block fw-bolder my-4">OR</span>
                <form action="" method="post">
                    <div class="form-group">
                      <label class="form-label" for="login-email">Email address</label>
                      <input type="email" class="form-control" name="login-email" id="login-email" placeholder="name@email.com">
                    </div>
                    <div class="form-group">
                      <label for="login-password"  class="form-label d-flex justify-content-between align-items-center">
                        Password
                        <a href="./forgotten-password.html" class="text-muted small">Forgot your password?</a>
                      </label>
                      <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Enter your password">
                    </div>
                    <button class="btn d-block w-100 my-4" value="login" name="login">Login</button>
                </form>
                <p class="d-block text-center text-muted">New customer? <a class="text-muted" href="./register.html">Sign up for an account</a></p>
            </div>

        </div>
        <!-- / Login Form-->

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>