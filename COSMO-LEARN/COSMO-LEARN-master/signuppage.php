

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
    <form action="signup.php" method="post" onSubmit = "return checkPassword(this)">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label style="float:left;" for="full_name"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="name" required>

                    <label style="float:left;" for="user_name"><b>Username</b></label>
                    <input type="text" placeholder="Enter UserName" name="username" required>
          
          
                     <label style="float:left;" for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                
                    
                    <label style="float:left;" for="phone"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Mobile Number" name="phone" required> 
          
                    <label style="float:left;" for="birthday"><b>Date of Birth</b></label>
                    <input type="date" name="dob" required> 
          
                    <label style="float:left;" for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password1" required>
                
                    <label style="float:left;" for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="password2" required>
                    
                    
          
                    <button type="submit" class="registerbtn">Register</button>
                     <div class="container">
          <span class="psw">Already have an account?- <a style="padding-right: 12px;" href="loginpage.php">Login</a></span>
        </div>
</form>
</div>
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