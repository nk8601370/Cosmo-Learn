<?php 
session_start();
if(isset(  $_SESSION['name']  ) )
    header("Location: dash.php");
    ?>
<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/signup.css" media="screen">
  <link rel="stylesheet" href="css/login.css" media="screen">
  <link rel="stylesheet" href="css/style.css" media="screen">
  <link rel="stylesheet" href="css/test.css" media="screen">
  <link rel="stylesheet" href="css/test2.css" media="screen">
  <link rel="stylesheet" href="css/slide.css" media="screen">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link href="css/nav.css" rel="stylesheet" media="screen">



</head>

<body>

  <!-- Navigation -->
  <ul>
  <li><a  class="active" href="home.php">Back</a></li>
</ul>


<div>
  
      <form  action="login.php" method="post">
      <h1>Login</h1>
    <p>Please fill in the details to log in.</p>
    <hr>
        <div class="container">
          <label style="float:left;" for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" required>
    
          <label style="float:left;" for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
            <br>
            <br>
            <br>
            <br>
          <button type="submit">Login</button>

        </div>
    
        <div class="container" >
  
          <span class="psw">Don't have an account?-<a href="signuppage.php">Register</a></span>
        </div>
      </form>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="">Cosmo-Learn</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



            
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/validatepass.js"></script>
   <script src="js/slide.js"></script>

  </body>
  </html>